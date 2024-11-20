<?php
require_once('config/config.php');

// Start a transaction to ensure both queries succeed or fail together
mysqli_begin_transaction($conn);

try {
    // Copy all records into accepted_add_to_dictionary table
    $stmt_insert = mysqli_prepare($conn, "INSERT INTO accepted_add_to_dictionary (proposed_translation_language, translated_word) SELECT proposed_translation_language, translated_word FROM add_to_dictionary");
    
    // Execute the insert statement
    mysqli_stmt_execute($stmt_insert);

    // Check if the insert was successful
    if (mysqli_stmt_affected_rows($stmt_insert) > 0) {
        // Prepare the delete statement to delete all from add_to_dictionary table
        $stmt_delete = mysqli_prepare($conn, "DELETE FROM add_to_dictionary");
        mysqli_stmt_execute($stmt_delete);

        // Check if the delete was successful
        if (mysqli_stmt_affected_rows($stmt_delete) > 0) {
            // Commit transaction if both insert and delete are successful
            mysqli_commit($conn);
            header('Location: translationrequest.php'); // Redirect back to the management page
            exit();
        } else {
            // Rollback transaction if delete fails
            mysqli_rollback($conn);
            echo "Error deleting records: " . mysqli_error($conn);
        }

        // Close the delete statement
        mysqli_stmt_close($stmt_delete);
    } else {
        // Rollback transaction if insert fails
        mysqli_rollback($conn);
        echo "Error inserting records into accepted_add_to_dictionary: " . mysqli_error($conn);
    }

    // Close the insert statement
    mysqli_stmt_close($stmt_insert);
} catch (Exception $e) {
    // Rollback transaction on any exception
    mysqli_rollback($conn);
    echo "Transaction failed: " . $e->getMessage();
}

// Close the database connection
mysqli_close($conn);
?>
