<?php 


include('config/connect.php');

    if (isset($_POST['submit'])) {
        $Username = $_POST['user'];
        $Password = $_POST['pass'];

        $sql = "select * from login where Username = '$Username' and Password = '$Password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            header("Location: home.php");
        }  
        else{  
            echo  '<script>
                        window.location.href = "alog.php";
                        alert("Invalid username or password!!")
                    </script>';
        }     
    }

?>