<?php
require_once('config/connect.php');

$sql = "select count(*) as total_feedback from feedback";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$total_feedback = $row['total_feedback'];


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
          
            <li><a href="feedbackadmin.php   ">
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
    <div class="glassmorphism2">
        <div class="headertitle">
            <span> <b>Primary</b></span>
        </div>
        <div class="userinfo">

        </div>
    </div>

    <div class="glassmorphism"> 
        <h3 class="maintitle"> Summary</h3>
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
        </div>
    </div>

    <!-- Live History Section -->
    <div class="glassmorphism1">
        <h3><b>Live History</b></h3>
        <ul>
        <?php
            while($row = mysqli_fetch_assoc($resultw)) {   
        ?>
            <li><?php echo $row['recent'];?></li>
        <?php
            }
        ?>
        </ul>
        
    </div>
<script>
    // Function to add new event to live history
    function addEvent(eventText) {
        var eventList = document.getElementById("live-events");
        var eventItem = document.createElement("li");
        eventItem.textContent = eventText;
        eventList.appendChild(eventItem);
    }

    // Example: Automatically add events every few seconds (you can replace this with actual event triggering logic)
    setInterval(function() {
        var randomEvent = "New Event " + Math.floor(Math.random() * 1000);
        addEvent(randomEvent);
    }, 5000); // Add new event every 5 seconds
</script>

</body>
</html>
