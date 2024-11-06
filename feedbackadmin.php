<?php
require_once('config/connect.php');
$sql = "select * from feedback";
$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="website icon" type="png" href="images/WEBLOGO.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/feed.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <title>Home</title>
</head>
<body>

<nav>
      <div class="sidebar">
        <div class="logo">
          <img src="images/FINFINFIN.png" alt="logo">
          <h1></h1>
        </div>
        <ul class="mainmenu">
          <li ><a href="home.php" >
            <i class="fas fa-user"></i>
            <span class="nav-item">Dashboard</span>
          </a>
          </li>
          
          <li><a href="mantrans.php">
                <i class="fas fa-tasks"></i>
                <span class="nav-item">Manage Translation </span>
            </a>
          </li>

          <li><a href="translationrequest.php">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">Translation Request</span>
          </a>
          </li>
          
          <li class="active"><a href="#">
            <i class="fas fa-star"></i>
            <span class="nav-item">Feedback</span>
          </a>
          </li>

          <li><a href="index.php" class="logout"> 
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Logout</span>
          </a>
          </li>
        </ul>
      </div>
    </nav>

<div class="maincontent">
    <div class="header">
        <div class="headertitle">
        <h1 class="maintitle"> Manage Feedback</h1>
        </div>
        
    </div>

    <div class="container">
        <div class="row">
            <div class="card">
                <div class="headcard">
                  <h2 class="dbtitle">User's Feedback</h2>
                </div>

                <div class="tablehey">
                  <table class="column">
                      <tr class="tablehead">  
                          <th> Name </th>
                          <th> Email </th>
                          <th> Concern </th>
                          <th> Status </th>  
                      </tr>
                      <tr>
                          <?php
                              while($row = mysqli_fetch_assoc($result)) {   
                          ?>
                              <td><?php echo $row['Fullname'];?></td>
                              <td><?php echo $row['Email'];?></td>
                              <td><?php echo $row['Concern'];?></td>
                              <td><a href="" class=but>Pending</a>
                      </tr>
                          <?php
                            }
                          ?>
                      
                  </table>
                </div>
            </div>
        </div>
    </div>
    
</div>

</body>
