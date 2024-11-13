
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" type="png" href="images/WEBLOGO.png"/>
    <link rel="stylesheet" href="css/addadmin.css">
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
            <li ><a href="home.php" >
                <i class="fas fa-user"></i>
                <span class="nav-item">Dashboard</span>
            </a>
            </li>
          
            <li class="active"><a href="mantrans.php">
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
            <h1>Add to Dictionary</h1>
        </div>
        <div class="userinfo">

        </div>
    </div>

    <form action="addadminfunct.php" method="post" class="dict">
    <div class="maincon"> 
        
        <div class="glassmorphism">
            <div class="translator">
                <ul class="item">
                    <li>           
                        <select class="select1" name="langwan">
                        <option value="Tagalog" <?php if (isset($_POST['lang1']) && $_POST['lang1'] == "Tagalog") echo "selected"; ?>>Tagalog</option>
                                    <option value="Kapangpangan" <?php if (isset($_POST['lang1']) && $_POST['lang1'] == "Kapangpangan") echo "selected"; ?>>Kapangpangan</option>
                                    <option value="Pangasinense" <?php if (isset($_POST['lang1']) && $_POST['lang1'] == "Pangasinense") echo "selected"; ?>>Pangasinense</option>
                                    <option value="Iloko" <?php if (isset($_POST['lang1']) && $_POST['lang1'] == "Iloko") echo "selected"; ?>>Iloko</option>
                                    <option value="Bikol" <?php if (isset($_POST['lang1']) && $_POST['lang1'] == "Bikol") echo "selected"; ?>>Bikol</option>
                                    <option value="Cebuano" <?php if (isset($_POST['lang1']) && $_POST['lang1'] == "Cebuano") echo "selected"; ?>>Cebuano</option>
                                    <option value="Hiligaynon" <?php if (isset($_POST['lang1']) && $_POST['lang1'] == "Hiligaynon") echo "selected"; ?>>Hiligaynon</option>
                                    <option value="Waray" <?php if (isset($_POST['lang1']) && $_POST['lang1'] == "Waray") echo "selected"; ?>>Waray</option>
                                    <option value="Chavacano" <?php if (isset($_POST['lang1']) && $_POST['lang1'] == "Chavacano") echo "selected"; ?>>Chavacano</option>
                                    <option value="Aklanon" <?php if (isset($_POST['lang1']) && $_POST['lang1'] == "Aklanon") echo "selected"; ?>>Aklanon</option>
                        
                        </select>
                    </li>
                   
                    <li>
                        <select class="select2" name="langtu">
                        <option value="Tagalog" <?php if (isset($_POST['lang1']) && $_POST['lang1'] == "Tagalog") echo "selected"; ?>>Tagalog</option>
                                    <option value="Kapangpangan" <?php if (isset($_POST['lang1']) && $_POST['lang1'] == "Kapangpangan") echo "selected"; ?>>Kapangpangan</option>
                                    <option value="Pangasinense" <?php if (isset($_POST['lang1']) && $_POST['lang1'] == "Pangasinense") echo "selected"; ?>>Pangasinense</option>
                                    <option value="Iloko" <?php if (isset($_POST['lang1']) && $_POST['lang1'] == "Iloko") echo "selected"; ?>>Iloko</option>
                                    <option value="Bikol" <?php if (isset($_POST['lang1']) && $_POST['lang1'] == "Bikol") echo "selected"; ?>>Bikol</option>
                                    <option value="Cebuano" <?php if (isset($_POST['lang1']) && $_POST['lang1'] == "Cebuano") echo "selected"; ?>>Cebuano</option>
                                    <option value="Hiligaynon" <?php if (isset($_POST['lang1']) && $_POST['lang1'] == "Hiligaynon") echo "selected"; ?>>Hiligaynon</option>
                                    <option value="Waray" <?php if (isset($_POST['lang1']) && $_POST['lang1'] == "Waray") echo "selected"; ?>>Waray</option>
                                    <option value="Chavacano" <?php if (isset($_POST['lang1']) && $_POST['lang1'] == "Chavacano") echo "selected"; ?>>Chavacano</option>
                                    <option value="Aklanon" <?php if (isset($_POST['lang1']) && $_POST['lang1'] == "Aklanon") echo "selected"; ?>>Aklanon</option>
                        </select>
                    </li>
                </ul>
                
           
                
                <div class="box">
                    <div class="mess">
                        <textarea maxlength="5000" name="words"class="textmess" placeholder="Write down.."></textarea>
                        
                    </div>
                </div>
                <div class="box2">
                    <div class="mess2">
                        <textarea maxlength="5000" name="translated"class="textmess2" placeholder="Write downn.."></textarea>
                        
                    </div>
                </div>
               
                <button type="submit" name="submit" class="submit-btn">Submit</button>  
            </div>
        </div>
    </form>      

</body>
</html>
