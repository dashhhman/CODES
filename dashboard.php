<?php
require_once('config/config.php');

$sql = "select count(*) as total_feedback from feedback";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$total_feedback = $row['total_feedback'];

$sql = "select count(*) as tbl_leaderboard from tbl_leaderboard";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$total_leaderboard = $row['tbl_leaderboard'];



$sql1 = "select count(*) as total_pro from translation where Status='Pending'";
$result1 = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result1);
$total_pro = $row['total_pro'];

?>

<?php
require_once('config/connect.php');

$sqlw = "SELECT recent FROM history ORDER BY recent ASC LIMIT 4"; 
$resultw = mysqli_query($conn, $sqlw);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" type="png" href="images/WEBLOGO.png"/>
    <link rel="stylesheet" href="css/homestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <title>Dashboard</title>
    <link rel="website icon" type="png" href="images/WEBLOGO.png"/>
    <style>
        /* CSS for the gender toggle */
        .gender-toggle {
          margin-top: 10px; /* Adjust spacing as needed */
          text-align: center; /* Align the toggle to the left */
          margin-left: 20px; /* Add left margin for spacing */
        }

        .gender-switch {
          display: none;
        }

        .gender-switch-label {
          display: inline-block;
          width: 150px; /* Increased width */
          height: 50px; /* Increased height */
          background-color: #ccc;
          border-radius: 25px; /* Increased border radius */
          position: relative;
          cursor: pointer;
          box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
          background-color: #001E1E;
          border: 0.5px solid white;
          color: white;
        }
        .toggle-label{
            color: white;
            font-size: 15px;
            margin-bottom: 10px;
        }
        .toggle-label::before,
        .toggle-label::after {
        content: "";
        position: absolute;
        top:150%;
        transform: translateY(-50%); /* Vertically center the lines */
        height: 2px;
        margin-bottom: 50px;
        background-color: #66fcf1; 
        }

        .toggle-label::before {
            content: "";
            position: absolute;
            top: 13%;
            left: 100px; /* Align to the left edge of the container */
            transform: translateY(-50%); /* Vertically center */
            width: 300px; /* Adjust length as needed */
            background-color: #66fcf1;
        }
        
        .toggle-label::after {
            content: "";
            position: absolute;
            top: 13%;
            right: 100px; /* Align to the right edge of the container */
            transform: translateY(-50%); /* Vertically center */
            width: 300px; /* Adjust length as needed */
            background-color: #66fcf1;
        }


        .gender-icon {
          position: absolute;
          top: 50%;
          transform: translateY(-50%);
          font-size: 24px; /* Increased font size */
          transition: all 0.3s ease;
        }

        .gender-icon i {
          font-size: 30px;
          margin-left: 20px; /* Increased icon size */
        }

        .female {
          left: 5px;
        }

        .male {
          right: 5px;
          opacity: 0; 
          margin-right: 35px;
        }

        .gender-switch:checked + .gender-switch-label {
            background-color: #001E1E; 
        }

        .gender-switch:checked + .gender-switch-label .female {
          opacity: 0; 
        }

        .gender-switch:checked + .gender-switch-label .male {
          opacity: 1; 
        }

        .toggle-label { /* CSS for the label */
          text-align: center;
          font-size: 15px;
          margin-top: 5px;
        }
    </style>
</head>
<body>

<nav>
    <div class="sidebar">
        <div class="logo">
            <img src="images/FINFINFIN.png" alt="logo">
            <h1></h1>
        </div>
        <ul class="mainmenu">
            <li class="active"><a href="#" >
                <i class="fas fa-user"></i>
                <span class="nav-item">Dashboard</span>
            </a>
            </li>
          

            <li><a href="translationrequest.php">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">Translation Request</span>
          </a>
          </li>
          
            <li><a href="manage_questioner.php   ">
                <i class="fas fa-star"></i>
                <span class="nav-item">Manage Questionnaire</span>
            </a>
            </li>
            <li><a href="feedbackadmin.php   ">
                <i class="fas fa-comments"></i>
                <span class="nav-item">Feedback</span>
            </a>
            </li>

            <li><a href="adminlogin.php" class="logout">
                <i class="fas fa-sign-out-alt"></i>
                <span class="nav-item">Logout</span>
            </a>
            </li>
        </ul>
    </div>
</nav>

<div class="maincontent">
    <div class="glassmorphism2">
        <div class="headertitle">
            <span> <b>Primary</b></span>
        </div>
        <div class="userinfo">

        </div>
    </div>

    <div class="gender-toggle">
      <input type="checkbox" id="gender-switch" class="gender-switch">
      <label for="gender-switch" class="gender-switch-label">
        <span class="gender-icon female"><i class="fas fa-female"></i> GIRL</span> 
        <span class="gender-icon male"><i class="fas fa-male"></i> BOY</span>
      </label>
      <div class="toggle-label">CHANGE VOICES</div> 
    </div>

    <div class="glassmorphism"> 
        <h3 class="maintitle">DASHBOARD</h3>
        <div class="con">
            <div class="totaldialectscard" >
                <div class="headcard">
                    <div class="total">
                        <span class="totaldia">
                        19
                        </span>
                        
                        
                    </div>
                </div>
                <span class="dialectlabel">TOTAL LOCAL LANGUAGES</span>
            </div>
            
            <a href="translationrequest.php">
            <div class="totaldialectscard2" href="translationrequest.php">
                <div class="headcard">
                    <div class="total">
                        <span class="totaldia2">
                        <?php echo $total_pro; ?>
                        </span>
                    
                    </div>
                </div>
                <span class="dialectlabel">TOTAL TRANSLATION REQUEST</span>
            </div>
            </a>


            <a href="feedbackadmin.php">
            <div class="totaldialectscard3" >
                <div class="headcard" >
                    <div class="total">
                        <span class="totaldia3" >
                            <?php echo $total_feedback; ?>
                        </span>
                        
                    </div>
                </div>
                <span class="dialectlabel">TOTAL FEEDBACK</span>
            </div>
            </a>


            
          
            <div class="totaldialectscard4" >
                <div class="headcard" >
                    <div class="total">
                        <span class="totaldia4" >
                            <?php echo $total_leaderboard; ?>
                        </span>
                        
                    </div>
                </div>
                <span class="dialectlabel">LEADERBOARD</span>
            </div>
            </a>
        </div>
    </div>

    <script>
    document.getElementById('gender-switch').addEventListener('change', function() {
      var isFemale = this.checked;
      var gender = isFemale ? 'female' : 'male';
      console.log('Gender switch changed to:', gender);

      // Store the gender in localStorage
      localStorage.setItem('selectedGender', gender);
    });
  </script>

</body>
</html>