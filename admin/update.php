<?php
require_once('config/connect.php');

if(isset($_GET['Word'], $_GET['Status'])) {
    $Word = $_GET['Word'];
    $Translated = $_GET['Tramslated'];
    $sql = "UPDATE translation SET Status='Accepted' WHERE Word=? AND Translated=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $Word, $Translated);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

// Redirect back to the previous page
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>