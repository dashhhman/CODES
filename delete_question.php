<?php
require('config/config.php');

if (isset($_GET['id'])) {
    $question_id = $_GET['id'];

    // Prepare a SQL statement to delete the question
    $stmt = $conn->prepare("DELETE FROM tbl_question WHERE question_id = ?");
    $stmt->bind_param("i", $question_id);

    if ($stmt->execute()) {
        echo "<script>
                alert('Question successfully created');
                window.location.href = 'manage_questioner.php';
              </script>";
    } else {
        echo "Error deleting question: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
