<?php
include('config/config.php'); // Make sure this path is correct

if (isset($_POST['submit'])) {
    $Username = $_POST['user'];
    $Password = $_POST['pass'];

    $sql = "SELECT * FROM login WHERE Username = '$Username' AND Password = '$Password'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  

    if ($count == 1) {
        if ($row['acc_type'] == 'admin') {
            echo  '<script>
                        alert("Successfully logged in as Admin!");
                        window.location.href = "dashboard.php";
                    </script>';
            exit;
        } else {
            echo  '<script>
                        alert("You do not have access to this area!");
                        window.location.href = "alog.php";
                    </script>';
        }
    } else {  
        echo  '<script>
                    alert("Invalid username or password!!");
                    window.location.href = "alog.php";
                </script>';
    }     
}
?>
