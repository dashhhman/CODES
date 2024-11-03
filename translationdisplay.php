<?php
require_once('config/connect.php');

// Get the word and target language from the POST data
$word = $_POST["Word"];
$translatedLanguage = $_POST["Language2"];

// Prepare SQL query to fetch translation from the database
$sql = "SELECT Translated FROM translation WHERE Language2 = ? AND Word = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $translatedLanguage, $word);
$stmt->execute();
$result = $stmt->get_result();

// Check if translation exists
if ($result->num_rows > 0) {
    // Fetch the translation
    $row = $result->fetch_assoc();
    $translatedText = $row['Translated'];
} else {
    // If translation does not exist, set translated text to empty string or any default value
    $translatedText = "";
}

// Close the prepared statement
$stmt->close();

// Close the database connection
$conn->close();

// Prepare response
$response = array('Translated' => $translatedText);
echo json_encode($response);
?>
