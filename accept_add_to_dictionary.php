<?php
require_once('config/config.php');

// Check if the required parameters are set
if (isset($_GET['Word']) && isset($_GET['Translated'])) {
    $word = mysqli_real_escape_string($conn, $_GET['Word']);
    $translated = mysqli_real_escape_string($conn, $_GET['Translated']);

    // Insert the accepted translation into the dictionary table
    $insertSql = "INSERT INTO accepted_add_to_dictionary (Word, Translated, Status) 
                  SELECT Word, Translated, 'Accepted' 
                  FROM translation 
                  WHERE Word = '$word' AND Translated = '$translated'";

    if (mysqli_query($conn, $insertSql)) {
        // Remove the record from the pending translation table
        $deleteSql = "DELETE FROM translation WHERE Word = '$word' AND Translated = '$translated'";
        mysqli_query($conn, $deleteSql);
        
        echo json_encode(["success" => true, "message" => "Accepted"]);
    } else {
        echo json_encode(["success" => false, "message" => "Error accepting translation"]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Invalid parameters"]);
}
?>
