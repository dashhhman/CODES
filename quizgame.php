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
    border: 4px solid black; /* Black border */
    }
    h1 {
      color: #e4e6eb;
    }
    #question-container {
      margin-top: 30px;
    }
    #question-text {
      font-size: 1.5em;
      margin-bottom: 40px;
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
    position: relative; 
    top: 5px;
    font-size: 2em; 
    font-weight: 600; 
    color: #fff; 
    width: 60px; 
    height: 60px; 
    border: 2px solid #fff; 
    border-radius: 50%; 
    display: flex; 
    justify-content: center; 
    align-items: center; 
    background-color: #1c1e21; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4); 
    animation: pulse 1s infinite; 
    transition: transform 0.2s; 
}

#timer-container:hover {
    transform: scale(1.1); 
}

@keyframes pulse {
    0% {
        transform: scale(1);
        opacity: 1;
    }
    50% {
        transform: scale(1.1);
        opacity: 0.7;
    }
    100% {
        transform: scale(1);
        opacity: 1;
    }
}


    @keyframes pulse {
        0% {
            transform: scale(1);
            opacity: 1;
        }
        50% {
            transform: scale(1.1);
            opacity: 0.7;
        }
        100% {
            transform: scale(1);
            opacity: 1;
        }
    }
    #score-container {
    position: absolute;
    top: 20px;
    right: 20px;
    background: #1c1e21;  /* Darker background for better contrast */
    padding: 15px;  /* Increased padding for better spacing */
    border-radius: 20px;  /* More rounded corners for a sleek look */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);  /* Enhanced shadow for depth */
    font-size: 1.2em;
    color: #ffffff;  /* White color for better contrast */
    border: 1px solid #ffffff;  /* Solid white border for better definition */
    transition: transform 0.3s, background-color 0.3s;  /* Smooth transitions for interactivity */
}

#score-container:hover {
    transform: translateY(-5px);  /* Slight lift on hover for interactivity */
    background-color: #292b2e;  /* Slightly lighter background on hover for visual feedback */
}

#score-container span {
    font-weight: bold;
    color: #ffcc00;  /* Highlighted score color for better visibility */
}

    .modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: hidden; /* Remove scrolling */
    background-color: rgba(0, 0, 0, 0.6); /* Darker background for better visibility */
    padding-top: 40px; /* Adjust padding top */
}

.modal-content {
    position: relative;
    margin: 15% auto; /* Move modal higher */
    padding: 20px; /* Increased padding for better spacing */
    border-radius: 15px;
    width: 80%;
    max-width: 400px;
    color: white;
    background-color: #800000;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    animation: slideIn 0.5s ease-out;
}

.close {
    color: white;
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
    transition: color 0.3s ease;
}

.close:hover,
.close:focus {
    color: #FFD700;
    text-decoration: none;
}

#submit-score {
    background-color: #18191a;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 15px;
    margin-top: 10px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s, transform 0.3s;
    border: 1px solid white;
}

#username {
    width: 80%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 15px;
    font-size: 14px;
}

#submit-score:hover {
    background-color: #DAA520;
    transform: translateY(-2px);
}

@keyframes slideIn {
    from {
        transform: translateY(-50px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

@media (max-width: 768px) {
    .quiz-container {
        width: 95%;
        padding: 15px;
    }
}

@media (max-width: 480px) {
    .quiz-container {
        width: 100%;
        padding: 10px;
    }
}


@media (max-width: 480px) {
    .quiz-container {
        width: 100%; 
        padding: 10px; 
    }
}


.fade-in {
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }

    .btn {
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn:hover {
        background-color: #ffa500; /* Highlight color */
        transform: scale(1.05);
    }
    #question-level {
        font-size: 1.4em;
        margin-top: 20px;
        margin-left: 500px;
        color: #e4e6eb;
        opacity: 0; /* Initial state for fade-in effect */
        transition: opacity 1s ease-in-out;
    }

    /* Animation keyframes for blinking effect */
    @keyframes blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0; }
    }

    .blink {
        animation: blink 1s infinite;
    }

    .btn {
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn:hover {
        background-color: #ffa500; /* Highlight color */
        transform: scale(1.05);
    }
    /* Animation keyframes */
    @keyframes fadeInHighlight {
        0% {
            opacity: 0;
            background-color: yellow;
        }
        100% {
            opacity: 1;
            background-color: transparent;
        }
    }

    /* Apply animation on load */
    .highlighted {
        animation: fadeInHighlight 1s forwards;
    }
  </style>
</head>
<body>
<div class="banner">
  <div class="navbar">
      <img src="images/FINAL WEBLINGUA.png" class="logo" href="homepage.php">
      <button id="back-button" onclick="location.href='index1.php'">Back to Selection</button>
    <ul>
      <li><a href="homepage.php"><b>Home</b></a></li>
      <li><a href="index.php"><b>Translator</b></a></li>
      <li><a href="addtodictionary.php"><b>Add to Dictionary</b></a></li>                            
   </ul>
 </div>

 <!-- Progress Bar Placement -->
 <div id="progress-bar">
    <div id="progress-bar-inner"></div>
 </div>

 <div class="quiz-container">
    <h1>FunQuiz</h1>
    <p class="instruction" id="instruction-1">Pumili ng tamang sagot upang makakuha ng mataas na iskor.</p>
    <p class="instruction" id="instruction-2">Galingan mo!</p>
    <div id="score-container">Score: <span id="score">0</span></div>
    <div id="question-container" style="display: none;">
      <p id="question-text"></p>
      <div id="answer-buttons"></div>
      <p id="question-level"></p> <!-- Ito ang element para sa question level -->
    </div>
    <div id="controls-container">
      <button id="start-button">Start Quiz</button>
      <div id="timer-container">
        <span id="timer-text"><span id="timer">0</span></span>
      </div>
    </div>
  </div>
  
</div>

  <style>
    .error-message, .success-message {
        display: none;
        margin-top: 15px;
        padding: 10px;
        border-radius: 5px;
        animation: popUp 0.5s, fadeOut 2s 2.5s;
        position: fixed;
        top: 100px;
        width: calc(100% - 30px);
        text-align: center;
        max-width: 450px;
        left: 35%;
        z-index: 1000;
        align-items: center;
    }

    .error-message {
        background-color: #f8d7da;
        color: #721c24;
    }

    .success-message {
        background-color: #d4edda;
        color: #155724;
    }

    @keyframes popUp {
        0% {
            opacity: 0;
            transform: scale(0.5);
        }
        100% {
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes fadeOut {
        0% {
            opacity: 1;
        }
        100% {
            opacity: 0;
            display: none;
        }
    }
    #back-button {
    position: absolute;
    left: 30px;
    top: 150px;
    padding: 5px 10px; /* Smaller padding */
    font-size: 0.8em; /* Smaller font size */
    cursor: pointer;
    background-color: #242526;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    color: #e4e6eb;
    border: none;
    border-radius: 10px; /* Smaller border radius */
    transition: background-color 0.3s, transform 0.3s;
    border: 1px solid white;
}

#back-button:hover {
    background-color: #DAA520;
    transform: translateY(-2px);
}


</style>

<div class="error-message"></div>
<div class="success-message"></div>

<div id="usernameModal" class="modal">
    <div class="modal-content">
     
        <p>Enter your username to submit your score:</p>
        <input type="text" id="username" placeholder="Username">
        <button id="submit-score">Submit</button>
    </div>
</div>

<script>
const startButton = document.getElementById('start-button');
const questionContainer = document.getElementById('question-container');
const questionText = document.getElementById('question-text');
const answerButtons = document.getElementById('answer-buttons');
const timerText = document.getElementById('timer'); 
const timerContainer = document.getElementById('timer-container'); 
const instructions = document.querySelectorAll('.instruction'); 
const scoreDisplay = document.getElementById('score'); 
const questionLevelDisplay = document.getElementById('question-level');
const backButton = document.getElementById('back-button'); // Reference to the back button

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

timerContainer.style.display = 'none'; 

function startQuiz() {
    // Hide the back button when the quiz starts
    backButton.style.display = 'none';

    score = 0;
    currentQuestionIndex = 0;
    questionContainer.style.display = 'block';
    startButton.style.display = 'none';
    scoreDisplay.innerText = score;  
    timerText.innerText = timeLeft;  
    instructions.forEach(instruction => instruction.style.display = 'none');
    timerContainer.style.display = 'block'; 
    showQuestion();
}

function updateProgressBar() {
    const progressBar = document.getElementById('progress-bar-inner');
    const progress = (currentQuestionIndex / questions.length) * 100;
    progressBar.style.width = progress + '%';
}

function showQuestion() {
    const currentQuestion = questions[currentQuestionIndex];
    console.log("Showing Question:", currentQuestion);
    questionText.innerText = currentQuestion.question;
    questionLevelDisplay.innerText = `Level: ${currentQuestion.level}`;
    answerButtons.innerHTML = '';

    questionContainer.classList.add('fade-in');
    setTimeout(() => questionContainer.classList.remove('fade-in'), 1000);

    currentQuestion.answers.forEach(answer => {
        const button = document.createElement('button');
        button.innerText = answer.text;
        button.classList.add('btn', 'fade-in');
        button.addEventListener('click', () => selectAnswer(button, answer));
        answerButtons.appendChild(button);
        
        setTimeout(() => button.classList.remove('fade-in'), 1000);
    });

    // Make the question level blink for all levels
    if (currentQuestion.level === 'Easy' || currentQuestion.level === 'Medium' || currentQuestion.level === 'Hard') {
        questionLevelDisplay.classList.add('blink');
    } else {
        questionLevelDisplay.classList.remove('blink');
    }

    updateProgressBar(); // Update the progress bar

    switch (currentQuestion.level) {
      case 'Easy':
        timeLeft = 10;
        break;
      case 'Medium':
        timeLeft = 10;
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

// Function to play correct sound using triangle wave
function playCorrectSound() {
    const context = new (window.AudioContext || window.webkitAudioContext)();
    const oscillator = context.createOscillator();
    oscillator.type = 'triangle';
    oscillator.frequency.setValueAtTime(660, context.currentTime); // Frequency for E5 note
    oscillator.connect(context.destination);
    oscillator.start();
    setTimeout(() => oscillator.stop(), 500); // Play sound for 500ms
}

// Function to play incorrect sound using sawtooth wave
function playIncorrectSound() {
    const context = new (window.AudioContext || window.webkitAudioContext)();
    const oscillator = context.createOscillator();
    oscillator.type = 'sawtooth';
    oscillator.frequency.setValueAtTime(110, context.currentTime); // Frequency for A2 note
    oscillator.connect(context.destination);
    oscillator.start();
    setTimeout(() => oscillator.stop(), 500); // Play sound for 500ms
}

function selectAnswer(button, answer) {
    const currentQuestion = questions[currentQuestionIndex]; 
    const correct = answer.correct;
    const buttons = answerButtons.querySelectorAll('button');

    console.log("Answer Selected:", answer);
    console.log("Correct Answer for Current Question:", currentQuestion.correctAnswer);

    if (correct) {
        button.style.backgroundColor = 'green';
        playCorrectSound();
        console.log("Selected button:", button.innerText, "Color:", button.style.backgroundColor);

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
    } else {
        button.style.backgroundColor = 'red';
        playIncorrectSound();
        console.log("Selected button:", button.innerText, "Color:", button.style.backgroundColor);

        // Highlight the correct answer
        buttons.forEach(btn => {
            if (btn.innerText === currentQuestion.correctAnswer) {
                btn.style.backgroundColor = 'green';
                console.log("Correct Answer button (Green):", btn.innerText, "Color:", btn.style.backgroundColor);
            }
        });
    }

    // Delay before showing next question
    currentQuestionIndex++;
    setTimeout(() => {
        if (currentQuestionIndex < questions.length) {
            showQuestion();
        } else {
            clearInterval(timer); 
            showModal();
        }
    }, 2000); // 2 seconds delay to show the colors
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

function showSuccessMessage(message) {
    const successDiv = document.querySelector('.success-message');
    successDiv.textContent = message;
    successDiv.style.display = 'block';
    successDiv.style.opacity = '1';
    setTimeout(() => {
        successDiv.style.opacity = '0';
    }, 1000); 
    setTimeout(() => {
        successDiv.style.display = 'none';
        location.href = 'leaderboard.php'; // Reload the page after the success message
    }, 2000); 
}

function showErrorMessage(message) {
    const errorDiv = document.querySelector('.error-message');
    errorDiv.textContent = message;
    errorDiv.style.display = 'block';
    errorDiv.style.opacity = '1';
    setTimeout(() => {
        errorDiv.style.opacity = '0';
    }, 1000); 
    setTimeout(() => {
        errorDiv.style.display = 'none';
    }, 2000); 
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
                showSuccessMessage('Score submitted for ' + username);
            } else {
                showErrorMessage("Error: " + data.message);
            }
        })
        .catch(error => showErrorMessage('Error: ' + error));
    } else {
        showErrorMessage('Please enter a username.');
    }
});

</script>

</body>
</html>
