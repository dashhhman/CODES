<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="images/WEBLOGO.png" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/trivia.css">
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
                display: block; /* Show close icon when menu is toggled */
            }/* Circle Container Styles */

            .circle-container {
                display: flex;
                flex-direction: column;
                align-items: center;
                margin-top: 10px;
                padding-bottom: 300px;
            }
        }   

</style>
<body>
    <section>
    <div class="banner">
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
        
        <div class="maincon">
            <div class="layout-container">
                <div class="circle-container">
                    <div class="nav">
                        <a href="leaderboard.php"><i class='bx bxs-trophy bx-tada'></i>Leaderboard</a>
                    </div>
                    <h1>Try Your Knowledge. Take a Quiz!</h1>
                    <div class="circle-row">
                        <a href="#triviaModal1" class="circle"><p>Kapampangan</p></a>
                        <a href="#triviaModal2" class="circle"><p>Pangasinense</p></a>
                        <a href="#triviaModal3" class="circle"><p>Iloko</p></a>
                        <a href="#triviaModal4" class="circle"><p>Bikol</p></a>
                    </div>
                    <div class="circle-row">
                        <a href="#triviaModal5" class="circle"><p>Cebuano</p></a>
                        <a href="#triviaModal6" class="circle"><p>Hiligaynon</p></a>
                        <a href="#triviaModal7" class="circle"><p>Waray</p></a>
                        <a href="#triviaModal8" class="circle"><p>Tausug</p></a>
                        <a href="#triviaModal9" class="circle"><p>Maguindanaoan</p></a>
                    </div>
                    <div class="circle-row">
                        <a href="#triviaModal10" class="circle"><p>Maranao</p></a>
                        <a href="#triviaModal11" class="circle"><p>Chabacano</p></a>
                        <a href="#triviaModal12" class="circle"><p>Ybanag</p></a>
                        <a href="#triviaModal13" class="circle"><p>Ivatan</p></a>
                        <a href="#triviaModal14" class="circle"><p>Sambal</p></a>
                    </div>
                    <div class="circle-row">
                        <a href="#triviaModal15" class="circle"><p>Aklanon</p></a>
                        <a href="#triviaModal16" class="circle"><p>Kinaray-a</p></a>
                        <a href="#triviaModal17" class="circle"><p>Yakan</p></a>
                        <a href="#triviaModal18" class="circle"><p>Surigaonon</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>  
    <div id="triviaModal5" class="modal">
    <div class="modal-content">
        <span class="close" data-modal="#triviaModal5">&times;</span>
        <h2>Trivia Time: Cebuano!</h2>
        <div class="trivia-content">
            <div class="trivia-left">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/320px-Flag_of_the_Philippines.svg.png" alt="Philippine Flag" class="flag-image">
            </div>
            <p class="trivia-text">
                Alam mo ba? Ang Pampanga ay kilala bilang Culinary Capital ng Pilipinas. Ang Pampanga ay kilala sa kanilang masasarap na pagkain tulad ng sisig, tocino, at iba pa. Maraming turista ang pumupunta dito upang tikman ang kanilang mga espesyal na putahe. Bukod dito, ang Pampanga ay mayroon ding makulay na kultura at tradisyon na ipinagmamalaki ng mga Kapampangan.
            </p>
        </div>
        <a href="quizgame.php?category=Cebuano" class="next-btn"><span></span>Take a Quiz</a>
    </div>
</div> 
    <script src="js/script.js"></script>
</body>
</html>
