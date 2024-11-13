<?php
require_once 'config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $questionId = $_POST['question_id'];
    $question = $_POST['question'];
    $correctAnswer = $_POST['correct_answer'];
    $wrongAnswer1 = $_POST['wrong_answer1'];
    $wrongAnswer2 = $_POST['wrong_answer2'];
    $wrongAnswer3 = $_POST['wrong_answer3'];
    $category = $_POST['category'];
    $questionLevel = $_POST['question_level'];
    $questionImage = '';

    if (isset($_FILES['question_image']) && $_FILES['question_image']['error'] === UPLOAD_ERR_OK) {
        $targetDir = "question_images/"; 
        $fileName = basename($_FILES["question_image"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
        if (in_array($fileType, $allowedTypes)) {
            if (move_uploaded_file($_FILES["question_image"]["tmp_name"], $targetFilePath)) {
                $questionImage = $targetFilePath;
            } else {
                echo "Error uploading the file.";
            }
        } else {
            echo "Invalid file type. Please upload an image (jpg, jpeg, png, gif).";
        }
    } else {
        $query = "SELECT question_image FROM tbl_question WHERE question_id = ?";
        if ($stmt = $conn->prepare($query)) {
            $stmt->bind_param("i", $questionId);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($row = $result->fetch_assoc()) {
                $questionImage = $row['question_image'];
            }
        }
    }

    $query = "UPDATE tbl_question SET Question = ?, Correct_answer = ?, Wrong_Answer1 = ?, Wrong_Answer2 = ?, Wrong_Answer3 = ?, question_image = ?, category = ?, question_level = ? WHERE question_id = ?";

    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("ssssssssi", $question, $correctAnswer, $wrongAnswer1, $wrongAnswer2, $wrongAnswer3, $questionImage, $category, $questionLevel, $questionId);
        
        if ($stmt->execute()) {
            echo "<script>alert('Question updated successfully.'); window.location.href='manage_questioner.php';</script>";
            exit();
        } else {
            echo "Error updating question: " . $stmt->error;
        }
    } else {
        echo "Database error: Unable to prepare statement.";
    }

    $stmt->close();
}

$conn->close();
?>
