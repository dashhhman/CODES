<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="images/WEBLOGO.png" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/selections_language.css">
    <title>WebLingua</title>
</head>
<style>
        .toggle-menu {
            display: none; /* Hidden by default */
        }

        .close-menu {
            display: none; /* Hidden by default */
            cursor: pointer;
            font-size: 24px;
            color: #fff;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        @media (max-width: 768px) {
            .toggle-menu {
                display: block; /* Show menu icon on mobile */
                cursor: pointer;
                font-size: 24px;
                color: #fff;
                margin-left: auto;
                margin-top: -100px;
                margin-bottom: 80px;
            }

            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar ul {
                position: fixed;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.9);
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                transition: left 0.3s ease;
            }

            .navbar ul.show {
                left: 0;
            }

            .navbar ul li {
                margin: 20px 0;
            }

             .navbar ul li a{
                text-decoration: none;
                color: #fff;
                text-transform: uppercase;   
            }
            .navbar ul li ::after{
                content: '';
                height: 3px;
                width: 0;
                background: #b4bdbc;
                position: absolute;
                left: 0;
                bottom:-10px;
                transition: 0.5s;
            }
            .navbar ul li a:hover::after{
                width: 100%;
            }
               
            .navbar ul.show ~ .close-menu {
                display: block;  
            } 

            .container{
                display: flex;
                flex-direction: row;
                padding-bottom: 80px; /* Add padding at the bottom of the body */
            }

            .selection-container{
                display: flex;
                flex-direction: row; 
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: fit-content;
                column-gap: 16px;
                row-gap: 16px;
            }

            .flag-container{
                display: none;
            }
 
            .lang-but {
                position: relative;
                width: 200px;
                height: 100px;
                cursor: pointer;
            }

            .lang-but::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.75), rgba(255, 255, 255, 0.75));
                z-index: 1;
                border-radius: 8px; /* Match the image's border radius */
                transition: opacity 0.3s ease-in-out;
            }

            .lang-but img {
                width: 100%;
                height: 100%;
                object-fit: cover; /* Ensure the image covers the container */ 
                transition: filter 0.3s ease-in-out; /* Smooth transition for the grayscale effect */
                border-radius: 8px;
                z-index: 0; /* Place image behind the gradient */
            }

            .lang-but:hover::before {
                opacity: 0; /* Remove gradient on hover */
            }

            .lang-but p {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                margin: 0;
                font-size: 18px;
                font-weight: bold;
                color: white;
                z-index: 2; /* Ensure text is above the gradient */
                transition: opacity 0.3s ease-in-out; /* Smooth transition for the text opacity */
            }

            .lang-but:hover p {
                opacity: 0; /* Make the text disappear on hover */
            }

 
        }   

</style>
<body>

    <div class="navbar">
        <img src="images/FINAL WEBLINGUA.png" class="logo" alt="Logo">
        <span class="toggle-menu" id="toggle-menu"><i class='bx bx-menu'></i></span>
        <ul id="nav-links">
            <li><a href="homepage.php"><b>Home</b></a></li>
            <li><a href="index.php"><b>Translator</b></a></li>
            <li><a href="addtodictionary.php"><b>Add to Dictionary</b></a></li>
            <li><a href="feedback.php"><b>Feedback</b></a></li>
            <span class="close-menu" id="close-menu"><i class='bx bx-x'></i></span> 
        </ul>
    </div>
    

    <div class="nav">
          <a href="leaderboard.php"><i class='bx bxs-trophy bx-tada'></i>Leaderboard</a>
    </div>
    
    <div class="container">

        <div class="selection-container">
            <div class="lang-but" onclick="window.location.href='kapampangan.php'">
                <img src="images/kapampangan.png" alt="">
                <p>Kapampangan</p>
            </div>
            <div class="lang-but"onclick="window.location.href='pangasinense.php'">
                <img src="images/pangasinense.jpg" alt="">
                <p>Pangasinense</p>
            </div>
            <div class="lang-but"onclick="window.location.href='iloko.php'">
                <img src="images/iloko.png" alt="">
                <p>Iloko</p>
            </div>
            <div class="lang-but"onclick="window.location.href='bikol.php'">
                <img src="images/bikol.jpg" alt="">
                <p>Bikol</p>
            </div>
            <div class="lang-but"onclick="window.location.href='cebuano.php'">
                <img src="images/cebuano.jpg" alt="">
                <p>Cebuano</p>
            </div>
            <div class="lang-but"onclick="window.location.href='hiligaynon.php'">
                <img src="images/hiligaynon.jpg" alt="">
                <p>Hiligaynon   </p>
            </div>
            <div class="lang-but"onclick="window.location.href='waray.php'">
                <img src="images/waray.png" alt="">
                <p>Waray</p>
            </div>
            <div class="lang-but"onclick="window.location.href='tausug.php'">
                <img src="images/tausug.png" alt="">
                <p>Tausug</p>
            </div>
            <div class="lang-but"onclick="window.location.href='maguindanaoan.php'">
                <img src="images/maguindanaoan.jpg" alt="">
                <p>Maguindanaoan</p>
            </div>
            <div class="lang-but"onclick="window.location.href='maranao.php'">
                <img src="images/maranao.png" alt="">
                <p>Maranao</p>
            </div>
            <div class="lang-but"onclick="window.location.href='chabacano.php'">
                <img src="images/chabacano.png" alt="">
                <p>Chabacano</p>
            </div>  
            <div class="lang-but" onclick="window.location.href='ibanag.php'">
                <img src="images/ibanag.png" alt="">
                <p>Ibanag</p>
            </div>
            <div class="lang-but"onclick="window.location.href='ivatan.php'">
                <img src="images/ivatan.png" alt="">
                <p>Ivatan</p>
            </div>
            <div class="lang-but"onclick="window.location.href='sambal.php'">
                <img src="images/sambal.png" alt="">
                <p>Sambal</p>
            </div>
            <div class="lang-but"onclick="window.location.href='aklanon.php'">
                <img src="images/aklanon.jpg" alt="">
                <p>Aklanon</p>
            </div>
            <div class="lang-but"onclick="window.location.href='kinaraya.php'">
                <img src="images/kinaray-a.jpg" alt="">
                <p>Kinaray-a</p>
            </div>
            <div class="lang-but"onclick="window.location.href='yakan.php'">
                <img src="images/yakan.jpg" alt="">
                <p>Yakan</p>
            </div>
            <div class="lang-but"onclick="window.location.href='surigaonon.php'">
                <img src="images/surigaonon.jpg" alt="">
                <p>Surigaonon</p>
            </div>
        </div>
        
        <div class="flag-container">
            <img src="images/phmap.png" alt="phmap">
        </div>
        
    </div>


    <script src="js/script.js"></script>
</body>
</html>
