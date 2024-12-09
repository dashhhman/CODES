<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="website icon" type="png" href="images/WEBLOGO.png"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/about.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
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
            }
        }   

        .popup {
            display: none;
        }
        
        .popup.fade-out {
            animation: fadeOut 0.5s forwards;
        }
        
        @keyframes fadeOut {
            from {
                opacity: 1;
            }
            to {
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="images/FINAL WEBLINGUA.png" class="logo" href="homepage.php">
            <span class="toggle-menu" id="toggle-menu"><i class='bx bx-menu'></i></span>
            <ul id="nav-links">
                <li><a href="homepage.php"><b>Home</b></a></li>
                <li><a href="index.php"><b>Translator</b></a></li>
                <li><a href="addtodictionary.php"><b>Add Dictionary</b></a></li>
                <li><a href="index1.php"><b>Fun Quiz</b></a></li>  
                <span class="close-menu" id="close-menu"><i class='bx bx-x'></i></span>
            </ul>
        </div>

        <section class="about">   
            <div class="main">
                <img src="images/FINAL_WEBLINGUA WHITE LOGO.png" alt="WebLingua Logo">
                <div class="about-text">
                    <h1>About Us</h1>
                    <h5>WebLingua: The Online Local Dialect Learning Platform</h5>
                    <p>
                        The study is designed to address the difficulties in learning different dialects of the local language.
                        The development of the “WebLingua: The Online Language Learning Platforms” 
                        is designed to help anyone to learn and gain knowledge from the system platforms.
                    </p>
                    <div class="button-container" style="text-align: center;">
                        <button type="submit" class="submit-btn" id="transbut" name="transbut"><span></span>About Developers</button>
                    </div>
                </div>         
            </div>
        </section>
    
        <div class="popup">
                    <div class="popup-content">
                        <section class="container">
                            <div class="wrapper">
                                <div class="card">
                                    <div class ="profile-img">
                                        <img src="images/balando.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>Arbel Balando</h3>
                                        <p>College Student</p>
                                        <div class="social-media">
                                        <a href="https://www.facebook.com/arbelyanihh" target="_blank"> 
                                            <i class='bx bxl-facebook-circle'></i> </a> 
                                            <a href=https://www.instagram.com/arbelyanihh/ target="_blank">
                                                 <i class='bx bxl-instagram-alt'></i> </a>
                                                  <a href="mailto:@johnarbel.balando@cvsu.edu.com"> 
                                                    <i class='bx bxl-gmail'></i> </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class ="profile-img">
                                        <img src="images/Benadera.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>Rose Benadera</h3>
                                        <p>College Student</p>
                                        <div class="social-media">
                                        <a href="https://www.facebook.com/ms.rosemariebenadera" target="_blank"> 
                                            <i class='bx bxl-facebook-circle'></i> </a> 
                                            <a href=https://www.instagram.com/ms.mariechen target="_blank">
                                                 <i class='bx bxl-instagram-alt'></i> </a>
                                                  <a href="mailto:bc.rosemarie.be@cvsu.edu.ph"> 
                                                    <i class='bx bxl-gmail'></i> </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class ="profile-img">
                                        <img src="images/Lopera.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>Jaina Lopera</h3>
                                        <p>College Student</p>
                                        <div class="social-media">
                                        <a href="https://www.facebook.com/haynuuhlpr" target="_blank"> 
                                            <i class='bx bxl-facebook-circle'></i> </a> 
                                            <a href=https://www.instagram.com/hi_ynaxoxo/ target="_blank">
                                                 <i class='bx bxl-instagram-alt'></i> </a>
                                                  <a href="mailto:bc.jaina.lopera@cvsu.edu.ph"> 
                                                    <i class='bx bxl-gmail'></i> </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class ="profile-img">
                                        <img src="images/Maagma.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>Remark Maagma</h3>
                                        <p>College Student</p>
                                        <div class="social-media">
                                        <a href="https://www.facebook.com/profile.php?id=100069494890332" target="_blank"> 
                                            <i class='bx bxl-facebook-circle'></i> </a> 
                                            <a href=https://www.instagram.com/_rmrkdm/ target="_blank">
                                                 <i class='bx bxl-instagram-alt'></i> </a>
                                                  <a href="mailto:bc.remark.maagma@cvsu.edu.ph"> 
                                                    <i class='bx bxl-gmail'></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>    
    </div>

    <script>
        document.getElementById("toggle-menu").addEventListener("click", function() {
            var navLinks = document.getElementById("nav-links");
            navLinks.classList.toggle("show");

            var closeMenu = document.getElementById("close-menu");
            closeMenu.style.display = "block";
        });

        document.getElementById("close-menu").addEventListener("click", function() {
            var navLinks = document.getElementById("nav-links");
            navLinks.classList.remove("show");

            var closeMenu = document.getElementById("close-menu");
            closeMenu.style.display = "none";
        });

        document.querySelectorAll(".navbar ul li a").forEach(function(link) {
            link.addEventListener("click", function() {
                var navLinks = document.getElementById("nav-links");
                navLinks.classList.remove("show");

                var closeMenu = document.getElementById("close-menu");
                closeMenu.style.display = "none";
            });
        });

        document.addEventListener("click", function(event) {
            var navLinks = document.getElementById("nav-links");
            var closeMenu = document.getElementById("close-menu");
            var isClickInside = navLinks.contains(event.target) || event.target.id === "toggle-menu" || event.target.closest("#toggle-menu");

            if (!isClickInside) {
                navLinks.classList.remove("show");
                closeMenu.style.display = "none";
            }
        });

   
        document.getElementById("transbut").addEventListener("click", function() {
            var popup = document.querySelector(".popup");
            popup.style.display = "flex";

            // Close the popup when clicking outside the content area
            popup.addEventListener("click", function(event) {
                if (!event.target.closest(".popup-content")) {
                    popup.classList.add("fade-out");
                    setTimeout(function() {
                        popup.style.display = "none";
                        popup.classList.remove("fade-out");
                    }, 500); // Match the duration of the fade-out animation
                }
            });
        });

        document.querySelector(".close").addEventListener("click", function() {
            var popup = document.querySelector(".popup");
            popup.classList.add("fade-out");
            setTimeout(function() {
                popup.style.display = "none";
                popup.classList.remove("fade-out");
            }, 500); // Match the duration of the fade-out animation
        });

    </script>
</body>
</html>
