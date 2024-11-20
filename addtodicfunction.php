<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webling";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(array("success" => false, "message" => "Connection failed: " . $conn->connect_error)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $propose_word = $_POST['proposed_word'];
    $propose_translation = $_POST['proposed_translation_language'];
    $translation = $_POST['translated_word'];
    $translation_language = $_POST['target_translation_language'];

    $sql = "INSERT INTO add_to_dictionary (proposed_word, proposed_translation_language, translated_word, target_translation_language) 
            VALUES ('$propose_word', '$propose_translation', '$translation', '$translation_language')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(array("success" => true, "message" => "Form has been submitted successfully!"));
    } else {
        echo json_encode(array("success" => false, "message" => "Error: " . $sql . "<br>" . $conn->error));
    }

    $conn->close();
}
?>
