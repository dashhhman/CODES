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
    $fullname = $_POST['fname'];
    $email = $_POST['ems'];
    $concern = $_POST['conc'];

    $sql = "INSERT INTO feedback (Fullname, Email, Concern) VALUES ('$fullname', '$email', '$concern')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(array("success" => true, "message" => "Feedback is Successfully Submitted!"));
    } else {
        echo json_encode(array("success" => false, "message" => "Error: " . $sql . "<br>" . $conn->error));
    }

    $conn->close();
}
?>
