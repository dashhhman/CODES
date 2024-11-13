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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz App</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-color: #a00000; 
    }
    .nav {
    background-color: transparent;
    display: flex;
    align-items: center;
    padding: 10px;
    
    position: fixed;
    top: 0; 
    left: 0;
    right: 0;
    z-index: 100;
}

.nav img {
    height: 150px;
    width: 300px; 
    margin-right: 550px;
}

.nav a {
    color: white;
    text-decoration: none;
    margin-right: 20px;
    font-size: 16px;
    display: flex;
    align-items: center;
}

.nav a i {
    margin-right: 5px;
    font-size: 18px;
}

.nav a:hover {
    color: #FFD700; 
}

.nav a:last-child {
    margin-right: 0;
}

.quiz-container {
    text-align: center;
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    max-width: 400px;
    width: 100%;
    position: relative;
    margin-top: 80px; 
}
    h1 {
      color: #333;
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
      border: 2px solid #ddd;
      border-radius: 5px;
      background-color: #f9f9f9;
      transition: background-color 0.3s, border-color 0.3s;
    }
    #controls-container {
      margin-top: 20px;
    }
    #start-button {
      padding: 10px 20px;
      font-size: 1em;
      cursor: pointer;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 5px;
      transition: background-color 0.3s;
    }
    #start-button:hover {
      background-color: #45a049;
    }
    #timer-container {
      margin-top: 10px;
      font-size: 0.9em;
      color: #666;
    }
    #score-container {
      position: absolute;
      top: 20px;
      right: 20px;
      background: rgba(255, 255, 255, 0.8);
      padding: 10px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      font-size: 1.2em;
      color: #333;
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
      background-color: rgb(0,0,0); 
      background-color: rgba(0,0,0,0.4); 
      padding-top: 60px;
    }
    .modal-content {
      background-color: #fefefe;
      margin: 5% auto; 
      padding: 20px;
      border: 1px solid #888;
      width: 300px; 
    }
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }
    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }
    
  </style>
</head>
<body>
<div class="nav">
  <img src="images/FINFINFIN.png" alt="">
  <a href="index1.php"><i class="fas fa-home"></i> HOME</a>
  <a href="mantrans.php">TRANSLATOR</a>
  <a href="addtodictionary">ADD TO DICTIONARY</a>
</div>
<div class="quiz-container">
  <h1>funQuiz</h1>
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
      <span id="timer-text"><span id="timer"></span></span>
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

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> 
<script>
  const startButton = document.getElementById('start-button');
  const questionContainer = document.getElementById('question-container');
  const questionText = document.getElementById('question-text');
  const answerButtons = document.getElementById('answer-buttons');
  const timerText = document.getElementById('timer');
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

  function startQuiz() {
    score = 0;
    currentQuestionIndex = 0;
    questionContainer.style.display = 'block';
    startButton.style.display = 'none';
    scoreDisplay.innerText = score;
    instructions.forEach(instruction => instruction.style.display = 'none');
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
        } else {
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

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none"; 
    }
  }

  submitScoreButton.addEventListener('click', () => {
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
