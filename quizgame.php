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
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="css/quiz.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz App</title>
  <style>
     * {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif, sans-serif;
            1
        }
    
  </style>
</head>
<body>
<div class="banner">
<div class="navbar">
            <img src="images/FINAL WEBLINGUA.png" class="logo" alt="Logo">
            <button id="back-button" onclick="location.href='index1.php'">Back to Selection</button>
            <span class="toggle-menu" id="toggle-menu"><i class='bx bx-menu'></i></span>
            <ul id="nav-links">
                <li><a href="index.php"><b>Home</b></a></li>
                <li><a href="translator.php"><b>Translator</b></a></li>
                <li><a href="addtodictionary.php"><b>Add to Dictionary</b></a></li>
                <li><a href="index1.php"><b>Fun Quiz</b></a></li>
                <span class="close-menu" id="close-menu"><i class='bx bx-x'></i></span>
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
            transform: translateX(-0%);
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

        .close-menu {
            display: none; /* Hidden by default */
            cursor: pointer;
            font-size: 24px;
            color: #fff;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        @media (max-width: 768px) {
            .toggle-menu {
                display: block; /* Show menu icon on mobile */
                cursor: pointer;
                font-size: 24px;
                color: #fff;
                margin-left: auto;
                margin-right: 30px;
                margin-top: 60px
            }

            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar ul {
                position: fixed;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.9);
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                transition: left 0.3s ease;
            }

            .navbar ul.show {
                left: 0;
            }

            .navbar ul li {
                margin: 20px 0;
            }

             .navbar ul li a{
                text-decoration: none;
                color: #fff;
                text-transform: uppercase;   
            }
            .navbar ul li ::after{
                content: '';
                height: 3px;
                width: 0;
                background: #b4bdbc;
                position: absolute;
                left: 0;
                bottom:-10px;
                transition: 0.5s;
            }
            .navbar ul li a:hover::after{
                width: 100%;
            }
               
            .navbar ul.show ~ .close-menu {
                display: block; /* Show close icon when menu is toggled */
            }

            .error-message, .success-message {
            display: none;
            margin-top: 100px;
            padding: 10px;
            border-radius: 5px;
            animation: popUp 0.5s, fadeOut 2s 2.5s;
            position: fixed;
            top: 200px;
            width: calc(100% - 30px);
            text-align: center;
            max-width: 450px;
            left: 20%;
            transform: translateX(-0%);
            z-index: 1000;

            }
        }   

    @media (max-width: 480px) {
            .toggle-menu {
                display: block; /* Show menu icon on mobile */
                cursor: pointer;
                font-size: 24px;
                color: #fff;
                margin-left: auto;
                margin-right: 10px;
                margin-top: -100px;
                margin-bottom: 80px;
            }

            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar ul {
                position: fixed;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.9);
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                transition: left 0.3s ease;
            }

            .navbar ul.show {
                left: 0;
            }

            .navbar ul li {
                margin: 20px 0;
            }

             .navbar ul li a{
                text-decoration: none;
                color: #fff;
                text-transform: uppercase;   
            }
            .navbar ul li ::after{
                content: '';
                height: 3px;
                width: 0;
                background: #b4bdbc;
                position: absolute;
                left: 0;
                bottom:-10px;
                transition: 0.5s;
            }
            .navbar ul li a:hover::after{
                width: 100%;
            }
               
            .navbar ul.show ~ .close-menu {
                display: block; /* Show close icon when menu is toggled */
            }

            .error-message, .success-message {
            display: none;
            margin-top: 100px;
            padding: 10px;
            border-radius: 5px;
            animation: popUp 0.5s, fadeOut 2s 2.5s;
            position: fixed;
            top: 200px;
            width: calc(100% - 30px);
            text-align: center;
            max-width: 450px;
            left: 5%;
            transform: translateX(-0%);
            z-index: 1000;

            }
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
  
document.getElementById("toggle-menu").addEventListener("click", function() {
            var navLinks = document.getElementById("nav-links");
            navLinks.classList.toggle("show");

            var closeMenu = document.getElementById("close-menu");
            closeMenu.style.display = "block";
        });

        document.getElementById("close-menu").addEventListener("click", function() {
            var navLinks = document.getElementById("nav-links");
            navLinks.classList.remove("show");

            var closeMenu = document.getElementById("close-menu");
            closeMenu.style.display = "none";
        });

        document.querySelectorAll(".navbar ul li a").forEach(function(link) {
            link.addEventListener("click", function() {
                var navLinks = document.getElementById("nav-links");
                navLinks.classList.remove("show");

                var closeMenu = document.getElementById("close-menu");
                closeMenu.style.display = "none";
            });
        });

        document.addEventListener("click", function(event) {
            var navLinks = document.getElementById("nav-links");
            var closeMenu = document.getElementById("close-menu");
            var isClickInside = navLinks.contains(event.target) || event.target.id === "toggle-menu" || event.target.closest("#toggle-menu");

            if (!isClickInside) {
                navLinks.classList.remove("show");
                closeMenu.style.display = "none";
            }
        });
 
</script>

</body>
</html>
