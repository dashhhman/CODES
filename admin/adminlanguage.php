<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" type="png" href="images/WEBLOGO.png"/>
    <link rel="stylesheet" href="../css/homestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <title>Dashboard</title>
    <link rel="website icon" type="png" href="images/WEBLOGO.png"/>
</head>
<body>
<style>
    
</style>
<nav>
    <div class="sidebar">
        <div class="logo">
            <img src="../images/FINFINFIN.png" alt="logo">
            <h1></h1>
        </div>
        <ul class="mainmenu">
            <li class="active"><a href="home.php" >
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
            <li><a href="adminlanguage.php" class="languages">
                <i class="fas fa-sign-out-alt"></i>
                <span class="nav-item">Languages</span>
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
    <a href="add_languages.php"><button>+Add Languages</button></a>
    <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Langueges</th>  
                    <th>Status</th>
                    <th>ACTION</th>
                </tr>
        <footer>
            <tr>
                <td>1</td>
                <td>sample 1</td>
                <td>sample 2</td>
                <td><button>Delete</button></td>
            </tr>
        </footer>
    </table>
</nav>
</body>
</html>
