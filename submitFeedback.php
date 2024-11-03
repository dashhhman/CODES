<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have fields for name, email, and description in your form
    $name = $_POST['name']; // Access the name from the form
    $email = $_POST['email']; // Access the email from the form
    $description = $_POST['description']; // Access the description from the form

    // Process the data here. For example, save to a database, send an email, etc.
    // This example just echoes the data for demonstration purposes.
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Description: " . $description . "<br>";
    
    // Here you would typically redirect the user to a thank you page or show a success message.
} else {
    // Not a POST request, handle accordingly
    echo "Invalid request.";
}
?>
</body>
</html>