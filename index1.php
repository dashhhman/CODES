<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="images/WEBLOGO.png" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <title>WebLingua</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="images/FINAL WEBLINGUA.png" class="logo" href="homepage.php">
            <ul>
                <li><a href="homepage.php"><b>Home</b></a></li>
                <li><a href="addtodictionary.php"><b>Add to Dictionary</b></a></li>
                <li><a href="index1.php"><b>Fun Quiz</b></a></li>   
            </ul>
        </div>
        
        <div class="maincon"> 
            <div class="circle-container">
                  
                <div class="nav">
                    <a href="leaderboard.php"><i class='bx bxs-trophy bx-tada' ></i>Leaderboard</a>
                </div>

                <h1>Try Your Knowledge. Take a Quiz!</h1> 
            
                <div class="circle-row">
                    <a href="quizgame.php?category=Kapampangan" class="circle"><p>Kapampangan</p></a>
                    <a href="quizgame.php?category=Pangasinense" class="circle"><p>Pangasinense</p></a>
                    <a href="quizgame.php?category=Iloko" class="circle"><p>Iloko</p></a>
                    <a href="quizgame.php?category=Bikol" class="circle"><p>Bikol</p></a>
                </div>
                <div class="circle-row">
                    <a href="quizgame.php?category=Cebuano" class="circle"><p>Cebuano</p></a>
                    <a href="quizgame.php?category=Hiligaynon" class="circle"><p>Hiligaynon</p></a>
                    <a href="quizgame.php?category=Waray" class="circle"><p>Waray</p></a>
                    <a href="quizgame.php?category=Tausug" class="circle"><p>Tausug</p></a>
                    <a href="quizgame.php?category=Maguindanaoan" class="circle"><p>Maguindanaoan</p></a>
                </div>
                <div class="circle-row">
                    <a href="quizgame.php?category=Maranao" class="circle"><p>Maranao</p></a>
                    <a href="quizgame.php?category=Chavacano" class="circle"><p>Chavacano</p></a>
                    <a href="quizgame.php?category=Ybanag" class="circle"><p>Ybanag</p></a>
                    <a href="quizgame.php?category=Ivatan" class="circle"><p>Ivatan</p></a>
                    <a href="quizgame.php?category=Sambal" class="circle"><p>Sambal</p></a>
                </div>
                <div class="circle-row">
                    <a href="quizgame.php?category=Aklanon" class="circle"><p>Aklanon</p></a>
                    <a href="quizgame.php?category=Kinaray-a" class="circle"><p>Kinaray-a</p></a>
                    <a href="quizgame.php?category=Yakan" class="circle"><p>Yakan</p></a>
                    <a href="quizgame.php?category=Surigaonon" class="circle"><p>Surigaonon</p></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<style>
 .nav {
    background-color: transparent;
    margin-left: 850px;
}

.nav img {
    height: 150px;
    width: 300px; 
    margin-right: 550px;
}

.nav a {
    color: white;
    text-decoration: none;
    margin-right: 10px;
    font-size: 20px;
    display: flex;
    align-items: center;
    
}

.nav a i {
    margin-right: 5px;
    font-size: 18px;
}

.nav a:hover {
    color: #FFD700; 
}

.nav a:last-child {
    margin-right: 0;
}
.circle-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 10px;
}
.circle-container h1 {
    text-align: center;
    padding-bottom: 20px;
    margin-bottom: 10px;
    color: white;
    letter-spacing: 2px; 
    line-height: 1.2;
    text-transform: uppercase; 
    font-size: 25px;
}

.circle-row {
    display: flex;
    justify-content: center;
    gap: 30px;
    margin-bottom: 15px;
}

.circle {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: brown;
    border-radius: 50%;
    height: 80px;  
    width: 170px;   
    color: white;
    font-weight: bold;
    text-align: center;
    text-decoration: none; 
}

.circle:hover {
    background-color: #a00000;
}

.circle p {
    margin: 0;
    font-size: 20px;
}
</style>
