<?php
require('config/config.php');

// Decode the JSON input
$data = json_decode(file_get_contents("php://input"), true);

// Extract data from the request
$username = $data['username'];
$score = (int)$data['score']; // Ensure score is treated as an integer
$date_play = $data['date_play'];
$category = $data['category'];

$sql = "INSERT INTO `tbl_leaderboard` (`username`, `score`, `date_play`, `category`) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("siss", $username, $score, $date_play, $category); // "siss" => string, int, string, string

// Execute the statement and check for success
if ($stmt->execute()) {
    echo json_encode(['success' => true, 'redirect' => 'leaderboard.php']);
} else {
    error_log("Insert error: " . $stmt->error); // Log the error
    echo json_encode(['success' => false, 'message' => $stmt->error]);
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
