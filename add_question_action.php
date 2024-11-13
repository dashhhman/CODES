<?php
require('config/config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $question = $conn->real_escape_string($_POST['question']);
    $correct_answer = $conn->real_escape_string($_POST['correct_answer']);
    $wrong_answer1 = $conn->real_escape_string($_POST['wrong_answer1']);
    $wrong_answer2 = $conn->real_escape_string($_POST['wrong_answer2']);
    $wrong_answer3 = $conn->real_escape_string($_POST['wrong_answer3']);
    $category = $conn->real_escape_string($_POST['category']);
    $question_level = $conn->real_escape_string($_POST['question_level']);

    // Handle image upload
    $image_path = ""; // Initialize variable for image path

    if (isset($_FILES['image_upload']) && $_FILES['image_upload']['error'] == UPLOAD_ERR_OK) {
        // Specify the target directory for uploads
        $target_dir = "question_images/";
        $image_file = $_FILES['image_upload'];
        $target_file = $target_dir . basename($image_file["name"]);
        
        // Check if the directory exists, if not create it
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0755, true);
        }
        
        // Move the uploaded file to the target directory
        if (move_uploaded_file($image_file["tmp_name"], $target_file)) {
            $image_path = $conn->real_escape_string($target_file); // Save the path for the database
        } else {
            echo "<script>
                    alert('Error uploading image.');
                    window.location.href = 'manage_questioner.php';
                  </script>";
            exit; // Stop further execution if image upload fails
        }
    }

    // SQL query to insert data into the database, including the image path
    $sql = "INSERT INTO tbl_question (Question, Correct_answer, Wrong_Answer1, Wrong_Answer2, Wrong_Answer3, category, question_level, question_image) 
            VALUES ('$question', '$correct_answer', '$wrong_answer1', '$wrong_answer2', '$wrong_answer3', '$category', '$question_level', '$image_path')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Question successfully created');
                window.location.href = 'manage_questioner.php';
              </script>";
    } else {
        echo "<script>
                alert('Error adding question: " . $conn->error . "');
                window.location.href = 'dashboard.php';
              </script>";
    }

    $conn->close();
} else {
    header("Location: manage_questioner.php");
}
?>
