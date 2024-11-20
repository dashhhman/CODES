<?php
require_once('config/config.php');

// Check if 'Propose Translation Language' and 'Translated Word' are set in the URL
if (isset($_GET['Language']) && isset($_GET['Word'])) {
    // Get 'Language' and 'Word' from the URL
    $language = $_GET['Language'];
    $word = $_GET['Word'];

    // Start a transaction to ensure both queries succeed or fail together
    mysqli_begin_transaction($conn);

    try {
        // Copy the record into deleted_add_to_dictionary table
        $stmt_insert = mysqli_prepare($conn, "INSERT INTO deleted_add_to_dictionary (proposed_translation_language, translated_word) SELECT proposed_translation_language, translated_word FROM add_to_dictionary WHERE proposed_translation_language = ? AND translated_word = ?");
        
        // Bind the correct parameters
        mysqli_stmt_bind_param($stmt_insert, "ss", $language, $word);
        
        // Execute the insert statement
        mysqli_stmt_execute($stmt_insert);

        // Check if the insert was successful
        if (mysqli_stmt_affected_rows($stmt_insert) > 0) {
            // Prepare the delete statement to delete from add_to_dictionary table
            $stmt_delete = mysqli_prepare($conn, "DELETE FROM add_to_dictionary WHERE proposed_translation_language = ? AND translated_word = ?");
            mysqli_stmt_bind_param($stmt_delete, "ss", $language, $word);
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
                echo "Error deleting record: " . mysqli_error($conn);
            }

            // Close the delete statement
            mysqli_stmt_close($stmt_delete);
        } else {
            // Rollback transaction if insert fails
            mysqli_rollback($conn);
            echo "Error inserting record into deleted_add_to_dictionary: " . mysqli_error($conn);
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
