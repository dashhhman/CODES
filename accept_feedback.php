<?php
require_once('config/config.php');

// Check if 'Fullname' and 'Concern' are set in the URL
if (isset($_GET['Fullname']) && isset($_GET['Concern'])) {
    // Get 'Fullname' and 'Concern' from the URL
    $Fullname = $_GET['Fullname'];
    $Concern = $_GET['Concern'];

    // Start a transaction to ensure both queries succeed or fail together
    mysqli_begin_transaction($conn);

    try {
        // Copy the record into accepted_add_to_dictionary table
        $stmt_insert = mysqli_prepare($conn, "INSERT INTO accepted_feedback (Fullname, Concern) SELECT Fullname, Concern FROM feedback WHERE Fullname = ? AND Concern = ?");
        
        // Bind the correct parameters
        mysqli_stmt_bind_param($stmt_insert, "ss", $Fullname, $Concern);
        
        // Execute the insert statement
        mysqli_stmt_execute($stmt_insert);

        // Check if the insert was successful
        if (mysqli_stmt_affected_rows($stmt_insert) > 0) {
            // Prepare the delete statement to delete from feedback table
            $stmt_delete = mysqli_prepare($conn, "DELETE FROM feedback WHERE Fullname = ? AND Concern = ?");
            mysqli_stmt_bind_param($stmt_delete, "ss", $Fullname, $Concern);
            mysqli_stmt_execute($stmt_delete);

            // Check if the delete was successful
            if (mysqli_stmt_affected_rows($stmt_delete) > 0) {
                // Commit transaction if both insert and delete are successful
                mysqli_commit($conn);
                header('Location: feedbackadmin.php'); // Redirect back to the management page
                exit();
            } else {
                // Rollback transaction if delete fails
                mysqli_rollback($conn);
                echo "Error deleting record: " . mysqli_error($conn);
            }

            // Close the delete statement
            mysqli_stmt_close($stmt_delete);
        } else {
            // Rollback transaction if insert fails
            mysqli_rollback($conn);
            echo "Error inserting record into accepted_feedback: " . mysqli_error($conn);
        }

        // Close the insert statement
        mysqli_stmt_close($stmt_insert);
    } catch (Exception $e) {
        // Rollback transaction on any exception
        mysqli_rollback($conn);
        echo "Transaction failed: " . $e->getMessage();
    }
} else {
    echo "Error: Missing required parameters.";
}

// Close the database connection
mysqli_close($conn);
?>
