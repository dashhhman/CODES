
<?php
include_once ('config/connect.php');

  $Fullname=$_POST["fname"];
  $Email=$_POST["ems"];
  $Concern=$_POST["conc"];

 

    $query = "INSERT INTO feedback (Fullname, Email, Concern) 
    VALUES ('$Fullname','$Email'  ,'$Concern')";

    mysqli_query($conn,$query);
    header("location: feedback.php");
    exit;
    


?>