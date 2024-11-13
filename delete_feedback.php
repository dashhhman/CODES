<?php
require_once('config/config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch feedback data
    $sqlFetch = "SELECT Fullname, Email, Concern FROM feedback WHERE id = $id";
    $resultFetch = mysqli_query($conn, $sqlFetch);

    if ($resultFetch && mysqli_num_rows($resultFetch) > 0) {
        $row = mysqli_fetch_assoc($resultFetch);

        // Insert data into delete_feedback
        $fullname = $row['Fullname'];
        $email = $row['Email'];
        $concern = $row['Concern'];
        
        $sqlInsert = "INSERT INTO delete_feedback (Fullname, Email, Concern) VALUES ('$fullname', '$email', '$concern')";
        mysqli_query($conn, $sqlInsert);

        // Delete the original feedback
        $sqlDelete = "DELETE FROM feedback WHERE id = $id";
        mysqli_query($conn, $sqlDelete);

        // Redirect back to the main feedback page
        header("Location: feedbackadmin.php");
        exit();
    } else {
        echo "Feedback not found.";
    }
} else {
    echo "Invalid request.";
}
?>
