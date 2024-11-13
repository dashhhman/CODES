
<?php
include_once ('config/connect.php');

  $Word=$_POST["words"];
  $Language2=$_POST["langwan"];
  $Translated=$_POST["translated"];
  $Language2=$_POST["langtu"];
  $Descriptions=$_POST["descri"];


    $query = "INSERT INTO translation (Word, Language1, Translated, Language2, Descriptions, Status) 
    VALUES ('$Word','$Language1','$Translated','$Language2','$Descriptions','Pending')";

    mysqli_query($conn,$query);
    header("location: addtodictionary.php");
    exit;
    


?>