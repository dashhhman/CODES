<?php
require_once('config/config.php');

// Get the ID from the URL
$Word = $_GET['Word'];
$Status = $_GET['Status'];

// Prepare the delete statement to prevent SQL injection
$stmt = mysqli_prepare($conn, "DELETE FROM translation WHERE Word = ? AND Status=?");
mysqli_stmt_bind_param($stmt, "ss", $Word, $Status);
mysqli_stmt_execute($stmt);

// Redirect back to the manage translation page or handle errors
if (mysqli_stmt_affected_rows($stmt) > 0) {
    header('Location: feedbackadmin.php'); // Redirect back to the management page
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>