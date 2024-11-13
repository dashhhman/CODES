<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" type="png" href="images/WEBLOGO.png"/>
    <link rel="stylesheet" href="css/manage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <title>Manage Questions</title>
    <style>

        body{
            background-image: radial-gradient(circle, #0b0c10, #121419, #171b21, #1b212a, #1f2833) ;
        }
        /* Sidebar styling */
        .sidebar {
        position: sticky;
        top: 0;
        left: 0;
        bottom: 0;
        width: 100px;
        height: 100vh;
        padding: 0 1.7rem;
        color: #66fcf1;
        overflow: hidden;
        transition: all 0.5s linear;
        background-image: radial-gradient(circle, #0b0c10, #121419, #171b21, #1b212a, #1f2833);
    }

    .sidebar:hover {
        width: 350px;
        transition: 0.5s;
    }
    .glassmorphism2 {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    box-shadow: 5px 5px 12px #00000035;
    border-top: 1px solid #ffffff75;
    border-left: 1.2px solid #ffffff75;
    backdrop-filter: blur(1px);
    border-radius: 20px;
    padding: 10px 2rem;
    margin-bottom: 1rem;
}

.headertitle {
    color: #66fcf1;
    font-size: 20px;
}
.glassmorphism {
    padding: 2rem;
    box-shadow: 5px 5px 12px #00000035;
    border-top: 1px solid #ffffff75;
    border-left: 1.2px solid #ffffff75;
    backdrop-filter: blur(1px);
    border-radius: 10px;
    width: 100%;
    height: auto; /* Allows container height to adjust to content */
    overflow: auto; /* Enables scrolling if content overflows */
}

.maincontent {
    background: rgb(11, 12, 16);
    background: radial-gradient(circle, rgba(11, 12, 16, 1) 0%, rgba(69, 162, 158, 1) 0%, rgba(31, 40, 51, 1) 78%, rgba(31, 40, 51, 1) 96%);
    position: relative;
    width: 100%;
    padding: 1rem;
}

        .logout {
            color: #ff6b6b;
        }

        /* Table and button styling */
        main {
            margin-left: px;
            padding: 20px;
        }
        h2 {
            color: white;
        }
        .add-button {
            display: inline-block;
            margin-bottom: 15px;
            padding: 10px 20px;
            background-color: #001E1E;
            color: white;
            text-decoration: none;
            left: 10px;
            border-radius: 15px;
            transition: background-color 0.3s;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border: 0.5px solid white;
        }
        .add-button:hover {
            background-color: brown;
        }
        table {
        width: 100%;
        border-collapse: collapse;
        background-color: rgba(249, 249, 249, 0.848);
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        max-height: 500px; /* Optional: limits table height */
        overflow-y: auto; /* Optional: scrolls table if it exceeds max height */
        font-weight: bold;
        }
        
    .dbtitle {
        background:  #001E1E;
        color: #fff;
        padding: 15px 15px;
        text-align: center;
        border: 2px solid white;
        border-radius: 5px;
        }

        table thead {
            background-color:#001E1E;
            color: white;
            border: 0.5px solid white;
        }
        table th, table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        table th {
            font-weight: bold;
        }
        table tbody tr:hover {
            background-color: #f1f1f1;
        }
        table tbody tr:last-child td {
            border-bottom: none;
        }
        .no-data {
            text-align: center;
            padding: 15px;
            color: #888;
        }

        /* Modal styling */
        .modal {
            display: none; /* Hidden by default */
            position: fixed;
            z-index: 1;
            left: 0;
            top: -100px;
            width: 100%;
            height: 100%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .modal-content {
            background-color: #18191a;
            margin: 10% auto;
            padding: 20px;
            border-radius: 15px;
            width: 80%;
            max-width: 500px;
            color: white;
            border: 0.5px solid white
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
        .close:hover {
            color: #000;
        }
        .form-container input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 14px;
            background-color: white;
        }
        .form-container button {
            margin-top: 20px;
            padding: 5px 15PX;
            background-color: #001E1E;
            color: white;
            border: none;
            border-radius: 14px;
            cursor: pointer;
            border: 0.5px solid white;
            transition: background-color 0.3s;
        }
        .form-container button:hover {
            background-color: brown;
        }
    </style>
</head>

<!-- Sidebar and Main Content -->
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
          <li class="active"><a href="#">
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
        <div class="glassmorphism2">
            <div class="headertitle">
                <span> <b>Manage Questionnaire</b></span>
            </div>
        </div>
        <button class="add-button" onclick="openAddModal()">Add Question</button>

        <div class="glassmorphism"> 
            <div class="con">   

                <table>
                    <div class="headcard">
                    <h2 class="dbtitle">Questionnaire Proposal</h2>
                    </div>
                    <thead>
                        <tr>
                            <th>Question ID</th>
                            <th>Question</th>
                            <th>Correct Answer</th>
                            <th>Wrong Answer 1</th>
                            <th>Wrong Answer 2</th>
                            <th>Wrong Answer 3</th>
                            <th>Category</th>
                            <th>Level</th>
                            <th>Image</th> 
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require('config/config.php');
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT question_id, Question, Correct_answer, Wrong_Answer1, Wrong_Answer2, Wrong_Answer3, category, question_level, question_image FROM tbl_question";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["question_id"] . "</td>";
                                echo "<td>" . $row["Question"] . "</td>";
                                echo "<td>" . $row["Correct_answer"] . "</td>";
                                echo "<td>" . $row["Wrong_Answer1"] . "</td>";
                                echo "<td>" . $row["Wrong_Answer2"] . "</td>";
                                echo "<td>" . $row["Wrong_Answer3"] . "</td>";
                                echo "<td>" . $row["category"] . "</td>";
                                echo "<td>" . $row["question_level"] . "</td>";
                                echo "<td><img src='" . htmlspecialchars($row["question_image"]) . "' alt='Question Image' style='width: 100px; height: auto;'></td>"; // Display the image
                                echo "<td><a href='edit_questioner.php?question_id=" . $row["question_id"] . "&question=" . urlencode($row["Question"]) . "&correct_answer=" . urlencode($row["Correct_answer"]) . "&wrong_answer1=" . urlencode($row["Wrong_Answer1"]) . "&wrong_answer2=" . urlencode($row["Wrong_Answer2"]) . "&wrong_answer3=" . urlencode($row["Wrong_Answer3"]) . "&question_level=" . urlencode($row["question_level"]) . "&category=" . urlencode($row["category"]) . "&question_image=" . urlencode($row["question_image"]) . "'>Edit</a> 
                        <a href='delete_question.php?id=" . $row["question_id"] . "' onclick='return confirm(\"Are you sure you want to delete this question?\");'>Delete</a>";


                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='10' class='no-data'>No questions found</td></tr>"; // Updated colspan to match the new column count
                        }

                        $conn->close();
                        ?>
                </tbody>
            </div>  
        </div>      
    </table>


        <!-- Modal for Adding a New Question -->
    <div id="addQuestionModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeAddModal()">&times;</span>
            <h2>Add New Question</h2>
            <form action="add_question_action.php" method="POST" class="form-container" enctype="multipart/form-data" onsubmit="return validateForm()">

                <label for="question">Question (and Upload Image):</label>
                <div>
                    <input type="text" id="question" name="question" placeholder="Enter your question" required>
                    <input type="file" id="image_upload" name="image_upload" accept="image/*">
                </div>

                <label for="correct_answer">Correct Answer:</label>
                <input type="text" id="correct_answer" name="correct_answer" required>

                <label for="wrong_answer1">Wrong Answer 1:</label>
                <input type="text" id="wrong_answer1" name="wrong_answer1" required>

                <label for="wrong_answer2">Wrong Answer 2:</label>
                <input type="text" id="wrong_answer2" name="wrong_answer2" required>

                <label for="wrong_answer3">Wrong Answer 3:</label>
                <input type="text" id="wrong_answer3" name="wrong_answer3" required>

                <label for="category">Category:</label>
                <select name="category" id="category">
                    <option value="tagalog">Tagalog</option>
                    <option value="Kapampangan">Kapampangan</option>
                    <option value="Pangasinense">Pangasinense</option>
                    <option value="Iloko">Iloko</option>
                    <option value="Bikol">Bikol</option>
                    <option value="Cebuano">Cebuano</option>
                    <option value="Hiligaynon">Hiligaynon</option>
                    <option value="Waray">Waray</option>
                    <option value="Tausug">Tausug</option>
                    <option value="Maguindanaoan">Maguindanaoan</option>
                    <option value="Maranao">Maranao</option>
                    <option value="Chavacano">Chavacano</option>
                    <option value="Ybanag">Ybanag</option>
                    <option value="Ivatan">Ivatan</option>
                    <option value="Sambal">Sambal</option>
                    <option value="Aklanon">Aklanon</option>
                    <option value="Kinaray-a">Kinaray-a</option>
                    <option value="Yakan">Yakan</option>  
                    <option value="Surigaonon">Surigaonon</option>
                </select>

                <label for="edit_question_level">Level:</label>
                <select id="edit_question_level" name="question_level">
                    <option value="Easy">Easy</option>
                    <option value="Medium">Medium</option>
                    <option value="Hard">Hard</option>
                </select>

                <button type="submit">Add Question</button>
            </form>
        </div>
    </div>

    <!-- Modal for Editing a Question -->
    <div id="editQuestionModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeEditModal()">&times;</span>
            <h2>Edit Question</h2>
            <form action="edit_question_action.php" method="POST" class="form-container">
                <input type="hidden" id="edit_question_id" name="question_id">

                <!-- Display Current Image -->
                <label>Current Image:</label>
                <img id="edit_question_image" src="" alt="Current Question Image" style="width: 100px; height: auto; display: none;">

                <label for="edit_question">Question:</label>
                <input type="text" id="edit_question" name="question" required>

                <label for="edit_correct_answer">Correct Answer:</label>
                <input type="text" id="edit_correct_answer" name="correct_answer" required>

                <label for="edit_wrong_answer1">Wrong Answer 1:</label>
                <input type="text" id="edit_wrong_answer1" name="wrong_answer1" required>

                <label for="edit_wrong_answer2">Wrong Answer 2:</label>
                <input type="text" id="edit_wrong_answer2" name="wrong_answer2" required>

                <label for="edit_wrong_answer3">Wrong Answer 3:</label>
                <input type="text" id="edit_wrong_answer3" name="wrong_answer3" required>

                    <label for="edit_category">Category:</label>
                    <select id="edit_category" name="category">
                        <option value="Kapampangan">Kapampangan</option>
                        <option value="Pangasinense">Pangasinense</option>
                        <option value="Iloko">Iloko</option>
                        <option value="Bikol">Bikol</option>
                        <option value="Cebuano">Cebuano</option>
                        <option value="Hiligaynon">Hiligaynon</option>
                        <option value="Waray">Waray</option>
                        <option value="Tausug">Tausug</option>
                        <option value="Maguindanaoan">Maguindanaoan</option>
                        <option value="Maranao">Maranao</option>
                        <option value="Chavacano">Chavacano</option>
                        <option value="Ybanag">Ybanag</option>
                        <option value="Ivatan">Ivatan</option>
                        <option value="Sambal">Sambal</option>
                        <option value="Aklanon">Aklanon</option>
                        <option value="Kinaray-a">Kinaray-a</option>
                        <option value="Yakan">Yakan</option>
                        <option value="Surigaonon">Surigaonon</option>
                    </select>

                    <label for="edit_question_level">Level:</label>
                    <select id="edit_question_level" name="question_level">
                        <option value="Easy">Easy</option>
                        <option value="Medium">Medium</option>
                        <option value="Hard">Hard</option>
                    </select>

                    <button type="submit">Save Changes</button>
                </form>
            </div>
        </div>

    </main>
</div>

<script>
    function openAddModal() {
        document.getElementById('addQuestionModal').style.display = 'block';
    }

    function closeAddModal() {
        document.getElementById('addQuestionModal').style.display = 'none';
    }

    function openEditModal(questionId, question, correctAnswer, wrongAnswer1, wrongAnswer2, wrongAnswer3, questionLevel, category, questionImage) {
    document.getElementById("edit_question_id").value = questionId;
    document.getElementById("edit_question").value = question;
    document.getElementById("edit_correct_answer").value = correctAnswer;
    document.getElementById("edit_wrong_answer1").value = wrongAnswer1;
    document.getElementById("edit_wrong_answer2").value = wrongAnswer2;
    document.getElementById("edit_wrong_answer3").value = wrongAnswer3;
    document.getElementById("edit_category").value = category;
    document.getElementById("edit_question_level").value = questionLevel;

    // Set the image source
    const editImageElement = document.getElementById("edit_question_image");
    editImageElement.src = questionImage; // URL to the current question image
    editImageElement.style.display = questionImage ? "block" : "none"; // Show image if it exists

    // Open the modal
    document.getElementById("editQuestionModal").style.display = "block";
}


    function closeEditModal() {
        document.getElementById('editQuestionModal').style.display = 'none';
    }

    // Close the modal if the user clicks outside of it
    window.onclick = function(event) {
        const addModal = document.getElementById('addQuestionModal');
        const editModal = document.getElementById('editQuestionModal');
        if (event.target === addModal) {
            closeAddModal();
        }
        if (event.target === editModal) {
            closeEditModal();
        }
    }
    function validateForm() {
    const imageInput = document.getElementById('image_upload');
    const questionInput = document.getElementById('question');
    if (imageInput.files.length > 0 && questionInput.value.trim() === '') {
        alert('Please enter a question if you upload an image.');
        return false;
    }
    return true; 
}
</script>

</body>
</html>