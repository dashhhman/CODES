<?php
require('config/config.php');
$category = isset($_GET['category']) ? $_GET['category'] : 'default_category'; 

$sql = "SELECT `question_id`, `Question`, `Correct_answer`, `Wrong_Answer1`, `Wrong_Answer2`, `Wrong_Answer3`, `category`, `question_level`, `question_image` 
        FROM `tbl_question` 
        WHERE `category` = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $category); 
$stmt->execute();
$result = $stmt->get_result();

$questions = ['Easy' => [], 'Medium' => [], 'Hard' => []];

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
      $answers = [
          ['text' => $row['Correct_answer'], 'correct' => true],
          ['text' => $row['Wrong_Answer1'], 'correct' => false],
          ['text' => $row['Wrong_Answer2'], 'correct' => false],
          ['text' => $row['Wrong_Answer3'], 'correct' => false],
      ];
      shuffle($answers);
      $questions[$row['question_level']][] = [
          'question' => $row['Question'],
          'answers' => $answers,
          'level' => $row['question_level'],
          'image' => $row['question_image'] 
      ];
  }
} else {
  echo "No questions found for this category.";
}


$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="images/WEBLOGO.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="css/quiz.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz App</title>
  <style>
     * {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif, sans-serif;
        }
    .quiz-container {
    text-align: center;
    background-color: brown;
    color: #e4e6eb;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    max-width: 800px; /* Limit the maximum width */
    width: 90%; /* Occupy a percentage of the viewport width */
    margin: 5px auto; /* Center the container horizontally */
    position: relative;
    font-size: 18px;
    }
    h1 {
      color: #e4e6eb;
    }
    #question-container {
      margin-top: 20px;
    }
    #question-text {
      font-size: 1.2em;
      margin-bottom: 20px;
    }
    #answer-buttons button {
      display: block;
      width: 100%;
      margin: 5px 0;
      padding: 10px;
      font-size: 1em;
      cursor: pointer;
      color: #e4e6eb;
      border-radius: 15px;
      background-color:#242526;
      transition: background-color 0.3s, border-color 0.3s;
      border: 1 solid white;
    }
    #controls-container {
      margin-top: 20px;
    }
    #start-button {
      padding: 8px 20px;
      font-size: 1em;
      cursor: pointer;
      background-color: #242526;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      color: #e4e6eb;
      border: none;
      border-radius: 15px;
      transition: background-color 0.3s;
      border: 1px solid white;
    }
    #start-button:hover {
      background-color:   #242526;
    }
    #timer-container {
      margin-top: 10px;
      top: 20px;
      font-size: 1em;
      font-weight: 200;
      color: #e4e6eb  ;
      width: 50px;
      border: 1.5px solid white;
    }
    #score-container {
      position: absolute;
      top: 20px;
      right: 20px;
      background: #242526	;
      padding: 10px;
      border-radius: 15px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      font-size: 1.2em;
      color: #e4e6eb;
      border: 1px solid white;
    }

    .modal {
    display: none; 
    position: fixed; 
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4); 
    padding-top:   
 60px;
}

.modal-content {
    position: relative;  
    /* To position the close button */
    align-items: left; /* This doesn't do much here */
    margin: 20% auto; 
    padding: 10px; /* Increased padding */
    border-radius: 15px;
    width: 400px; 
    color: white;
    background-color: #800000; /* Darker brown */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Added a subtle shadow */
    /* Add these to center the content */
    display: flex;
    flex-direction: column; /* Align items vertically */
    align-items: center; /* Center horizontally */
    text-align: center; /* Center the text */ 
    border: 1px solid white;
 */
}

.close {
    color: white; /* Changed color to white */
    position: absolute; /* Absolute positioning for better control */
    top: 10px; 
    right: 15px; 
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
    transition: color 0.3s ease; /* Smooth color transition */
}

.close:hover,
.close:focus {
    color: #FFD700; /* Gold hover color */
    text-decoration: none;
}
    @media (max-width: 768px) { 
    .quiz-container {
        width: 95%; /* Adjust width for smaller screens */
        padding: 15px; /* Adjust padding for smaller screens */
    }
}
#submit-score {
  background-color: #18191a; /* Gold background color */
  color: white; /* Dark brown text color */
  padding: 5px 10px;
  border: none;
  border-radius: 15px;
  margin-top: 10px;
  cursor: pointer;
  font-size: 15px;
  transition: background-color 0.2s ease, transform 0.2s ease; 
  border: 0.5px solid white;  
 /* Smooth transitions */
}
#username {
  width: 220px; /* Adjust the width as needed */
  padding: 6px; 
  border: 1px solid #ccc; 
  border-radius: 15px;
  font-size: 12px; 
}
#submit-score:hover {
  background-color: #DAA520; /* Darker gold on hover */
  transform: translateY(-2px); /* Slight lift on hover */
}

@media (max-width: 480px) {
    .quiz-container {
        width: 100%; /* Occupy full width on very small screens */
        padding: 10px; /* Adjust padding further */
    }
}
  </style>
</head>
<body>
<div class="banner">
  <div class="navbar">
      <img src="images/FINAL WEBLINGUA.png" class="logo" href="homepage.php">
    <ul>
      <li><a href="homepage.php"><b>Home</b></a></li>
      <li><a href="addtodictionary.php"><b>Add to Dictionary</b></a></li>   
      <li><a href="trivia.php"><b>Trivia</b></a></li>                          
   </ul>
 </div>
 
  <div class="quiz-container">
    <h1>FunQuiz</h1>
    <p class="instruction" id="instruction-1">Pumili ng tamang sagot upang makakuha ng mataas na iskor.</p>
    <p class="instruction" id="instruction-2">Galingan mo!</p>
    <div id="score-container">Score: <span id="score">0</span></div>
    <div id="question-container" style="display: none;">
      <p id="question-text"></p>
      <div id="answer-buttons"></div>
      <p id="question-level"></p> 
    </div>
    <div id="controls-container">
      <button id="start-button">Start Quiz</button>
      <div id="timer-container">
        <span id="timer-text"><span id="timer">0</span></span>
      </div>
    </div>
  </div>

  <div id="usernameModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Submit Your Score</h2>
      <label for="username">Username:</label>
      <input type="text" id="username" required>
      <button id="submit-score">Submit</button>
    </div>
  </div>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> 
<script>
  const startButton = document.getElementById('start-button');
  const questionContainer = document.getElementById('question-container');
  const   
 questionText = document.getElementById('question-text');
  const answerButtons = document.getElementById('answer-buttons');
  const   
 timerText = document.getElementById('timer'); 
  const timerContainer = document.getElementById('timer-container'); // Get the timer container
  const instructions = document.querySelectorAll('.instruction'); 
  const scoreDisplay = document.getElementById('score'); 
  const questionLevelDisplay = document.getElementById('question-level');

  let currentQuestionIndex = 0;
  let timeLeft = 0; 
  let timer;
  let score = 0;
  let questions = [];

  const easyQuestions = <?php echo json_encode($questions['Easy']); ?>;
  const mediumQuestions = <?php echo json_encode($questions['Medium']); ?>;
  const hardQuestions = <?php echo json_encode($questions['Hard']); ?>;

  const modal = document.getElementById("usernameModal");
  const span = document.getElementsByClassName("close")[0];
  const submitScoreButton = document.getElementById("submit-score");
  const usernameInput = document.getElementById("username");

  questions = [...easyQuestions, ...mediumQuestions, ...hardQuestions];

  startButton.addEventListener('click', startQuiz);

  // Initially hide the timer container
  timerContainer.style.display = 'none'; 

  function startQuiz() {
    score = 0;
    currentQuestionIndex = 0;
    questionContainer.style.display = 'block';
    startButton.style.display = 'none';
    scoreDisplay.innerText = score;  // Set initial score to 0
    timerText.innerText = timeLeft;  // Set initial timer based on difficulty
    instructions.forEach(instruction => instruction.style.display = 'none');
    timerContainer.style.display = 'block'; // Show the timer when the quiz starts
    showQuestion();
  }

  function showQuestion() {
    const currentQuestion = questions[currentQuestionIndex];
    questionText.innerText = currentQuestion.question;
    questionLevelDisplay.innerText = `Level: ${currentQuestion.level}`; 
    answerButtons.innerHTML = '';

    const questionImage = document.createElement('img');
    questionImage.src = currentQuestion.image; 
    questionImage.alt = 'Question Image'; 
    questionImage.style.width = '150px'; 
    questionImage.style.height = '150px'; 
    questionImage.style.borderRadius = '5px'; 
    
    questionContainer.innerHTML = ''; 
    questionContainer.appendChild(questionImage); 
    questionContainer.appendChild(questionText); 
    questionContainer.appendChild(answerButtons); 

    currentQuestion.answers.forEach(answer => {
      const button = document.createElement('button');
      button.innerText = answer.text;
      button.classList.add('btn');
      button.addEventListener('click', () => selectAnswer(answer));
      answerButtons.appendChild(button);   
   

    });

    switch (currentQuestion.level) {
      case 'Easy':
      case 'Medium':
        timeLeft = 5; 
        break;
      case 'Hard':
        timeLeft = 15;
        break;
      default:
        timeLeft = 0; 
    }

    timerText.innerText = timeLeft; 
    clearInterval(timer);
    timer = setInterval(updateTimer, 1000); 
  }

  function selectAnswer(answer) {
    const currentQuestion = questions[currentQuestionIndex]; 
    const correct = answer.correct;
    const buttons = answerButtons.querySelectorAll('button');

    buttons.forEach(button => {
      button.disabled = true; 
      if (button.innerText === answer.text) {
        button.style.backgroundColor = correct ? 'green' : '#DF2526'; 
      }
      if (button.innerText === currentQuestion.correctAnswer) { 
        button.style.backgroundColor = 'green'; 
      }
    });

    if (correct) {
      let points = 0;
      switch (currentQuestion.level) {
        case 'Easy':
          points = 2;
          break;
        case 'Medium':
          points = 4;
          break;
        case 'Hard':
          points = 10;
          break;
        default:
          points = 0; 
      }
      score += points; 
      scoreDisplay.innerText = score; 
    }
    
    currentQuestionIndex++;
    setTimeout(() => {
      if (currentQuestionIndex < questions.length) {
        showQuestion();
      } else {
        clearInterval(timer); 
        showModal();
      }
    }, 1000); 
  }

  function updateTimer() {
    timeLeft--;
    timerText.innerText = timeLeft; 
    if (timeLeft <= 0) {
      clearInterval(timer); 
      currentQuestionIndex++; 
      if (currentQuestionIndex < questions.length) {
        showQuestion(); 
      } else   
  
    {
        showModal(); 
      }
    }
  }

  function showModal() {
    modal.style.display = "block"; 
  }

  span.onclick = function() {
    modal.style.display = "none"; 
  }

  window.onclick = function(event)   
  
  {
    if (event.target == modal) {
      modal.style.display = "none"; 
    }
  }

  submitScoreButton.addEventListener('click',   
   
  () => {
    const username = usernameInput.value;
    if (username) {
      const category = "<?php echo $category; ?>"; 
      fetch('save_score.php', { 
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({
          username: username,
          score: score,
          date_play: new Date().toISOString(), 
          category: category
        })
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          alert('Score submitted for ' + username);
          window.location.href = data.redirect; 
        } else {
          alert("Error: " + data.message);
        }
      })
      .catch(error => console.error('Error:', error));
    } else {
      alert('Please enter a username.');
    }
  });
</script>

</body>
</html>
