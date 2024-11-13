<?php
require_once('config/config.php');

// Retrieve parameters from the URL
$word = isset($_GET['Word']) ? mysqli_real_escape_string($conn, $_GET['Word']) : '';
$translation = isset($_GET['Translated']) ? mysqli_real_escape_string($conn, $_GET['Translated']) : '';

// Check if the parameters are not empty
if (!empty($word) && !empty($translation)) {
    // Insert into accept_add_to_dictionary table
    $sql_insert = "INSERT INTO accept_add_to_dictionary (Propose_Word, Propose_Translation, Translation, Language_Translation, Description)
                   SELECT Word, Language1, Translated, Language2, Descriptions
                   FROM translation
                   WHERE Word = '$word' AND Translated = '$translation'";

    if (mysqli_query($conn, $sql_insert)) {
        // Update the translation status to 'Accepted'
        $sql_update = "UPDATE translation SET Status = 'Accepted' WHERE Word = '$word'";
        mysqli_query($conn, $sql_update);

        // Send a JSON response back to confirm success
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to insert data.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid input data.']);
}

mysqli_close($conn);
?>
