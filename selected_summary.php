<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="images/WEBLOGO.png" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/selected_summary.css">
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

            .summary-container{
                display: flex;
                flex-direction: column; 
                row-gap: 20px;
                resize: horizontal;
                width: 100%;
                height: fit-content; 
            }

            .exit-button{
                height: 0;   
            }
            
            .exit-button-img{
                position: relative; 
                cursor: pointer; 
                left: 16px;
                top: 26px;
                width: 35px;
                height: 35px;
                border-radius: 50%; 
            }

            .summary-text{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center; 
                padding : 0 10px; 
                row-gap: 15px;
                position: relative;
                top: -27px;

            }
            .summary-text h1{
                padding: 0;
                margin: 0; 
                margin-left: 120px;
                padding-top: 32px; 
                width: 100%;
            }

            .summary-text p{
                padding: 0;
                margin: 0;
                text-align: center;
                word-wrap:break-word;
                line-height: 2;
            }

            .image-container{
                padding: 0;
                margin: 0;
                display: flex; 
                justify-content: center;
                align-items: center;
                width: 100%;
                height: fit-content;
                resize: horizontal; 
            }

            .image-container img{ 
                padding: 0;
                margin: 0;
                resize: both ;
                width: 90%;
                height: auto; 
                border: 3px solid black;
                border-radius: 5% 5% 5% 5% / 0% 5% 5% 5%;
            }

            .buttons{
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                gap: 10px;
                padding: 10px; 
                margin-top: 25px;
                margin-bottom: 15px;
            }

            .buttons span{
                flex : 1;
            }

            .buttons button{
                padding: 10px;
                border: 2px solid black;
                border-radius: 5px;
                cursor: pointer;
                margin-right: 30px;
            }

            .maincon{
                display: flex; 
                height: fit-content;
                background-color: #fef2f2d1; 
                width: 90%;
                justify-self: center;
                align-self: center;
                flex-direction: column;
                border: 2px solid #b4bdbc;
                border-radius: 5% 5% 5% 5% / 0% 5% 5% 5%;
            }

            .banner {
                width: 100%;
                overflow-y: scroll;
                overflow-x: hidden;
                height: fit-content; 
                position: absolute; 
                top: 0;
                left: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                padding-bottom: 100px; 
                height: fit-content;
            }


 
        }   

</style>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="images/FINAL WEBLINGUA.png" class="logo" alt="Logo">
            <span class="toggle-menu" id="toggle-menu"><i class='bx bx-menu'></i></span>
            <ul id="nav-links">
                <li><a href="index.php"><b>Home</b></a></li>
                <li><a href="index.php"><b>Translator</b></a></li>
                <li><a href="addtodictionary.php"><b>Add to Dictionary</b></a></li>
                <li><a href="index1.php"><b>Fun Quiz</b></a></li>  
                <span class="close-menu" id="close-menu"><i class='bx bx-x'></i></span> 
            </ul>
        </div>
        
        <div class="maincon">
            
            <div class="summary-container">
                <div class="exit-button">
                    <img src="images/exit.svg" class="exit-button-img" alt="" style="cursor: pointer;" onclick="window.location.href='index1.php'">
                </div>
                
                <div class="summary-text">
                    <h1>Kapangpangan</h1>
                    <p>
                        Kapangpangan (Kapampangan, Kalabakan) adalah bahasa yang 
                        dimanapun, terutama di Kapampangan, Kalabakan, Sumatra Utara, 
                        Indonesia. Bahasa ini dikembangkan sebagai pengganti 
                        bahasa Melayu pada masa awal rakyat Indonesia. Bahasa ini dapat 
                        dilihat sebagai bahasa yang
                    </p>
                </div>
                <div class="image-container">
                    <img src="images/School.png" alt="kapangpangan">
                </div>
            </div>

            <div class="buttons">
                <span></span>
                <button>Start The Quiz!</button>
            </div> 
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
