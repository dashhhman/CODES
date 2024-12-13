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
        .error-message, .success-message { 
            position : absolute; 
            top : 50%;
            left : 50%;
            transform : translate(-50%, -50%);
            z-index : 2000;
            width : 100%;
            height : 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            display : none;
        }

        .error-message {
            color: #721c24;
        }

        .success-message {
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



.verifications{ 
    position : absolute; 
    top : 50%;
    left : 50%;
    transform : translate(-50%, -50%);
    z-index : 1000;
    width : 100%;
    height : 100%;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
    display : none;
}






        @media (max-width: 768px) {
.error-message , .success-message {
    display: none;
    position : absolute; 
    top : 50%;
    left : 50%;
    transform : translate(-50%, -50%);
    z-index : 2000;
    width : 100%;
    height : 130svh;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center; 
} 


.verifications{
    display: flex;
    position : absolute; 
    top : 50%;
    left : 50%;
    transform : translate(-50%, -50%);
    z-index : 1000;
    width : 100%;
    height : 130svh;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
    display : none;
}

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
                z-index : 10;
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

            
            @keyframes popUp {
                0% {
                    opacity: 0;
                    transform: scale(0.5) translate(-50%, -500%);
                }
                100% {
                    opacity: 1;
                    transform: scale(1) translate(-50%, -500%);
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

 


            #question-level {
                font-size: 1.4em;
                margin-top: 0;
                margin-left: 0;
                color: #e4e6eb;
                opacity: 0; /* Initial state for fade-in effect */
                transition: opacity 1s ease-in-out;
            } 

                    
        .modal-content {     
            z-index: 1;
            position: relative;
            margin: auto; /* Center the modal */
            padding: 20px; /* Increased padding for better spacing */
            border-radius: 15px;
            width: 80%; 
            color: white;
            background-color: #800000;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            animation: slideIn 0.5s ease-out;

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

            @keyframes popUp {
                0% {
                    opacity: 0;
                    transform: scale(0.5) translate(-50%, -500%);
                }
                100% {
                    opacity: 1;
                    transform: scale(1) translate(-50%, -500%);
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
 
            #question-level {
                font-size: 1.4em;
                margin-top: 0;
                margin-left: 0;
                color: #e4e6eb;
                opacity: 0; /* Initial state for fade-in effect */
                transition: opacity 1s ease-in-out;
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




.verifications-content{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-color: #f8d7da;
    border-radius: 15px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    padding: 20px;
    width: 300px;
    height: 300px; 
    row-gap: 16px; 
    padding-top : 50px;
    padding-bottom : 50px;
}

.verifications-content img{
    width : 80px;
    height : 80px;

}

.verifications-content h3,
.verifications-content p{ 
    margin: 0;
    padding : 0;
    text-align: center;
}

.yes-no-buttons{
    display: flex;
    justify-content: space-between;
    width: 100%;
    resize : horizontal;
    height : fit-content;
    flex-direction : row;
}
.yes-no-buttons button{ 
    width : 100px;
    height : 40px;
    border-radius : 15px;
    border : none;
    font-size : 20px;
}

.yes-btn-verification{
    background-color: #28a745;
    color : white;
    transition: background-color 0.3s ease; /* Adding transition for smooth effect */
    cursor : pointer;
}

.yes-btn-verification:hover{
    background-color: #218838;
}

.no-btn-verification{
    background-color: #dc3545;
    color : white;
    transition: background-color 0.3s ease; /* Adding transition for smooth effect */
    cursor : pointer;
}

.no-btn-verification:hover{
    background-color: #c82333;
}



</style>
</head>
<body>
<div class="banner">







    <div class="error-message">
        <div class="verifications-content">
            <img src="images/error.svg" alt="">
            <h3>You forgot something!</h3>
            <p>Please fill in all the required fields.</p> 
        </div>
    </div>

    <div class="success-message">
        <div class="verifications-content">
            <img src="images/success.svg" alt="">
            <h3>Successful!</h3>
            <p>You have successfully submitted your score.</p> 
        </div>
    </div>



    <div class="verifications" id="verifications">
        <div class="verifications-content">
            <img src="images/alert.svg" alt="">
            <h3>Are you sure?</h3>
            <p>By clicking "Yes", you confirm the name is correct!.</p>
            <div class="yes-no-buttons">
                <button class="yes-btn-verification" id="yes-btn-verification">Yes</button>
                <button class="no-btn-verification" id="no-btn-verification">No</button>
            </div> 
        </div>
    </div>

    <script>
        document.getElementById("no-btn-verification").addEventListener("click", function() {
            document.getElementById("verifications").style.display = "none";
        })
    </script>

<div class="navbar">
            <img src="images/FINAL WEBLINGUA.png" class="logo" alt="Logo">
            <button id="back-button" onclick="location.href='index1.php'">Back to Selection</button>
            <span class="toggle-menu" id="toggle-menu"><i class='bx bx-menu'></i></span>
            <ul id="nav-links">
                <li><a href="homepage.php"><b>Home</b></a></li>
                <li><a href="index.php"><b>Translator</b></a></li>
                <li><a href="addtodictionary.php"><b>Add to Dictionary</b></a></li>
                <li><a href="feedback.php"><b>Feedback</b></a></li>
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
    <div id="score-container"> <span id="score">0</span></div>
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

<audio id="background-music" src="music/Background Music.mp3" loop volume="0.1"></audio>
<audio id="correct-sound" src="music/correct.mp3"></audio>
<audio id="incorrect-sound" src="music/wrong.mp3"></audio>

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
const backButton = document.getElementById('back-button');
const backgroundMusic = document.getElementById('background-music'); // Reference sa background music
const correctSound = document.getElementById('correct-sound');
const incorrectSound = document.getElementById('incorrect-sound');
const modal = document.getElementById("usernameModal");
const span = document.getElementsByClassName("close")[0];
const submitScoreButton = document.getElementById("submit-score");
const usernameInput = document.getElementById("username");

let currentQuestionIndex = 0;
let timeLeft = 0; 
let timer;
let score = 0;
let questions = [];

const easyQuestions = <?php echo json_encode($questions['Easy']); ?>;
const mediumQuestions = <?php echo json_encode($questions['Medium']); ?>;
const hardQuestions = <?php echo json_encode($questions['Hard']); ?>; 

questions = [...easyQuestions, ...mediumQuestions, ...hardQuestions ];

startButton.addEventListener('click', startQuiz);

timerContainer.style.display = 'none'; 

function startQuiz() {
    backgroundMusic.volume = 0.1; // Set the volume to a lower level
    backgroundMusic.play(); // Patugtugin ang background music

    backButton.style.display = 'none';

    score = 0;
    currentQuestionIndex = 0;
    questionContainer.style.display = 'block';
    startButton.style.display = 'none';
    scoreDisplay.innerText = `Score: ${score}`;  
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

    if (['Easy', 'Medium', 'Hard'].includes(currentQuestion.level)) {
        questionLevelDisplay.classList.add('blink');
    } else {
        questionLevelDisplay.classList.remove('blink');
    }

    updateProgressBar();

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

function playCorrectSound() {
    correctSound.play();
}

function playIncorrectSound() {
    incorrectSound.play();
}

function selectAnswer(button, answer) {
    const currentQuestion = questions[currentQuestionIndex]; 
    const correct = answer.correct;
    const buttons = answerButtons.querySelectorAll('button');

    buttons.forEach(btn => {
        btn.disabled = true;
    });

    if (correct) {
        button.style.backgroundColor = 'green';
        playCorrectSound();

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
        scoreDisplay.innerText = `Score: ${score}`; 
    } else {
        button.style.backgroundColor = 'red';
        playIncorrectSound();

        buttons.forEach(btn => {
            if (btn.innerText === currentQuestion.correctAnswer) {
                btn.style.backgroundColor = 'green';
            }
        });
    }

    currentQuestionIndex++;
    setTimeout(() => {
        if (currentQuestionIndex < questions.length) {
            showQuestion();
        } else {
            clearInterval(timer); 
            backgroundMusic.pause(); // Itigil ang background music kapag tapos na ang quiz
            showModal();
        }
    }, 2000);
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
            backgroundMusic.pause(); // Itigil ang background music kapag tapos na ang quiz
            showModal(); 
        }
    }
}

function showModal() {
    modal.style.display = "block"; 
}




function showErrorMessage(message) {
    const errorDiv = document.querySelector('.error-message');
    errorDiv.style.display = 'flex';
    errorDiv.style.opacity = '1';
    setTimeout(() => {
        errorDiv.style.opacity = '0';
    }, 1000); // Reduced delay for faster response
    setTimeout(() => {
        errorDiv.style.display = 'none';
    }, 3000); // Match with the fade out animation
}

function showSuccessMessage(message) {
    const successDiv = document.querySelector('.success-message'); 
    successDiv.style.display = 'flex'; 
    setTimeout(() => {
        successDiv.style.opacity = '0';
    }, 1000); // Reduced delay for faster response
    setTimeout(() => {
        document.getElementById("verifications").style.display = "none";
        successDiv.style.display = 'none';
    }, 3000); // Match with the fade out animation
}


function submitScoreButtonFunc(){
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
                location.href = 'leaderboard.php';
            } else {
                showErrorMessage("Error: " + data.message);
            }
        })
        .catch(error => showErrorMessage('Error: ' + error));
    } else {
        showErrorMessage('Please enter a username.');
    }
}


submitScoreButton.addEventListener('click', () => { 
    document.getElementById("verifications").style.display = "flex";
    document.getElementById("yes-btn-verification").onclick = submitScoreButtonFunc;

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
