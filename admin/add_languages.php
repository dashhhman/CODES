<?php
$require = "../config/congig.php";

if(isset($POST['submit'])){
    $languages = $POST['languages'];
    $sql = "INSERT INTO languagestbl languages='$languages'";
}


?>

<html>
    <body>
        <div class="form">
            <center><h2>Add Languages</h2></center>
            <form action="" method="post">
                <label for="">LANGUAGES</label>
                <input type="text" name="langauges">
                <button>Submit</button>
            </form>
        </div>
    </body>
</html>