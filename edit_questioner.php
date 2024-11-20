<?php
require_once 'config/config.php';

$questionId = '';
$question = '';
$correctAnswer = '';
$wrongAnswer1 = '';
$wrongAnswer2 = '';
$wrongAnswer3 = '';
$questionImage = '';
$category = '';
$questionLevel = '';

if (isset($_GET['question_id'])) {
    $questionId = $_GET['question_id'];

    $query = "SELECT * FROM tbl_question WHERE question_id = ?";
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("i", $questionId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            $question = $row['Question'];
            $correctAnswer = $row['Correct_answer'];
            $wrongAnswer1 = $row['Wrong_Answer1'];
            $wrongAnswer2 = $row['Wrong_Answer2'];
            $wrongAnswer3 = $row['Wrong_Answer3'];
            $questionImage = $row['question_image'];
            $category = $row['category'];
            $questionLevel = $row['question_level'];
        } else {
            echo "No question found.";
        }
    } else {
        echo "Database error: Unable to prepare statement.";
    }
} else {
    echo "No question ID provided.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" type="png" href="images/WEBLOGO.png"/>
    <link rel="stylesheet" href="css/homestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <title>Edit Question</title>
    <style>

        .editing {
            background-color: #18191a;
            border: 2px solid #007bff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 600px; 
            margin: 20px auto;
            display: flex;
            flex-direction: column; 
            align-items: center; 
            color: white;
        }

        h2 {
            text-align: center;
            color: white;
        }

        label {
            display: block; 
            margin-top: 10px;
            text-align: left; 
            width: 100%; 
        }

        input[type="text"], select {
            width: 100%; 
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 14px;
        }

        .answer-row {
            display: flex; 
            justify-content: space-between; 
            width: 100%; 
            margin-top: 10px; 
        }

        button {
            background-color: #001E1E;
            color: white;
            padding: 10px 15px;
            border-radius: 14px;
            cursor: pointer;
            display: block;
            margin: 20px auto 0;
            width: 100%; 
            border: 0.5px solid white;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        img {
            display: block;
            margin: 10px auto;
            width: 100px; 
            height: auto; 
        }

        main {
            padding-left: 100px; 
        }
    </style>
</head>
<body>
<nav>
        <div class="sidebar">
        <div class="logo">
          <img src="images/FINFINFIN.png" alt="logo">
          <h1></h1>
        </div>
        <ul class="mainmenu">
          <li ><a href="dashboard.php" >
            <i class="fas fa-user"></i>
            <span class="nav-item">Dashboard</span>
          </a>
          </li>
          
          <li><a href="translationrequest.php">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">Translation Request</span>
          </a>
          </li>
          <li><a href="#">
            <i class="fas fa-star"></i>
            <span class="nav-item">Manage Questionnaire</span>
        </a>
        </li>
        <li><a href="feedbackadmin.php   ">
                <i class="fas fa-comments"></i>
                <span class="nav-item">Feedback</span>
            </a>
            </li>

          <li><a href="adminlogin.php" class="logout"> 
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Logout</span>
          </a>
          </li>
        </ul>
      </div>
    </div>
</nav>
<div class="maincontent">
        <main>
            <div id="form-editing" class="editing">
                <h2>Edit Question</h2>
                <form action="edit_question_action.php" method="POST" class="form-container" enctype="multipart/form-data">
                    <input type="hidden" name="question_id" value="<?php echo htmlspecialchars($questionId); ?>">

                    <label>Current Image:</label>
                    <img id="edit_question_image" src="<?php echo htmlspecialchars($questionImage); ?>" alt="Current Question Image" style="display: <?php echo $questionImage ? 'block' : 'none'; ?>;">

                    <label for="edit_question">Question:</label>
                    <input type="text" id="edit_question" name="question" value="<?php echo htmlspecialchars($question); ?>" required>

                    <label for="edit_correct_answer">Correct Answer:</label>
                    <input type="text" id="edit_correct_answer" name="correct_answer" value="<?php echo htmlspecialchars($correctAnswer); ?>" required>

                    <div class="answer-row">
                        <div>
                            <label for="edit_wrong_answer1">Wrong Answer 1:</label>
                            <input type="text" id="edit_wrong_answer1" name="wrong_answer1" value="<?php echo htmlspecialchars($wrongAnswer1); ?>" required>
                        </div>
                        <div>
                            <label for="edit_wrong_answer2">Wrong Answer 2:</label>
                            <input type="text" id="edit_wrong_answer2" name="wrong_answer2" value="<?php echo htmlspecialchars($wrongAnswer2); ?>" required>
                        </div>
                        <div>
                            <label for="edit_wrong_answer3">Wrong Answer 3:</label>
                            <input type="text" id="edit_wrong_answer3" name="wrong_answer3" value="<?php echo htmlspecialchars($wrongAnswer3); ?>" required>
                        </div>
                    </div>

                    <label for="edit_category">Category:</label>
                    <select id="edit_category" name="category" required>
                        <option value="tagalog" <?php if ($category === 'tagalog') echo 'selected'; ?>>Tagalog</option>
                        <option value="Kapampangan" <?php if ($category === 'Kapampangan') echo 'selected'; ?>>Kapampangan</option>
                        <option value="Pangasinense" <?php if ($category === 'Pangasinense') echo 'selected'; ?>>Pangasinense</option>
                        <option value="Iloko" <?php if ($category === 'Iloko') echo 'selected'; ?>>Iloko</option>
                        <option value="Bikol" <?php if ($category === 'Bikol') echo 'selected'; ?>>Bikol</option>
                        <option value="Cebuano" <?php if ($category === 'Cebuano') echo 'selected'; ?>>Cebuano</option>
                        <option value="Hiligaynon" <?php if ($category === 'Hiligaynon') echo 'selected'; ?>>Hiligaynon</option>
                        <option value="Waray" <?php if ($category === 'Waray') echo 'selected'; ?>>Waray</option>
                        <option value="Tausug" <?php if ($category === 'Tausug') echo 'selected'; ?>>Tausug</option>
                        <option value="Maguindanaoan" <?php if ($category === 'Maguindanaoan') echo 'selected'; ?>>Maguindanaoan</option>
                        <option value="Maranao" <?php if ($category === 'Maranao') echo 'selected'; ?>>Maranao</option>
                        <option value="Chavacano" <?php if ($category === 'Chavacano') echo 'selected'; ?>>Chavacano</option>
                        <option value="Ybanag" <?php if ($category === 'Ybanag') echo 'selected'; ?>>Ybanag</option>
                        <option value="Ibanag" <?php if ($category === 'Ibanag') echo 'selected'; ?>>Ibanag</option>
                    </select>

                    <label for="edit_question_level">Level:</label>
                    <select id="edit_question_level" name="question_level" required>
                        <option value="easy" <?php if ($questionLevel === 'easy') echo 'selected'; ?>>Easy</option>
                        <option value="medium" <?php if ($questionLevel === 'medium') echo 'selected'; ?>>Medium</option>
                        <option value="hard" <?php if ($questionLevel === 'hard') echo 'selected'; ?>>Hard</option>
                    </select>

                

                    <button type="submit">Update Question</button>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
