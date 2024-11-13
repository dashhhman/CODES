<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="website icon" type="png" href="images/WEBLOGO.png"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/about.css">
    <title>About</title>
</head>
<body>
    <div class="banner">
                <div class="navbar">
                    <img src="images/FINAL WEBLINGUA.png" class="logo" href="homepage.php">
                        <ul>
                            <li><a href="homepage.php"><b>Home</b></a></li>
                            <li><a href="index.php"><b>Translator</b></a></li>
                            <li><a href="addtodictionary.php"><b>Add Dictionary</b></a></li>
                            <li><a href="index1.php"><b>Fun Quiz</b></a></li>  
                                  
                        </ul>
                </div>

    
            <section class="about">   
                <div class="main">
                    <img src="images/FINAL_WEBLINGUA WHITE LOGO.png">
                    <div class="about-text">
                        <h1>About Us</h1>
                        <h5>WebLingua:The Online Local Dialect Learning Platform</h5>
                        <p>The study is designed to address the difficulties in learning different dialects of the local language.
                            The development of the “WebLingua: The Online Language Learning Platforms”, 
                            is designed to help anyone to learn and gain knowledge from the system platforms.</p>
                    </div>                 
                </div>
                <button type="submit" class="submit-btn" id="transbut" name="transbut"><span></span>About Developers</button>  
            </section>
            
                <div class="popup">
                    <div class="popup-content">
                        <section class="container">
                            <img src="images/close.jpg" alt="Close" class="close">
                            <div class="wrapper">
                                <div class="card">
                                    <div class ="profile-img">
                                        <img src="images/" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>Arbel Balando</h3>
                                        <p>Collage Student</p>
                                        <div class="social-media">
                                            <i>
                                                <i class='bx bxl-facebook-circle'></i>
                                                <i class='bx bxl-instagram-alt'></i>
                                                <i class='bx bxl-gmail'></i>
                                            </i>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class ="profile-img">
                                        <img src="images/Benadera.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>Rose Marie Benadera</h3>
                                        <p>Collage Student</p>
                                        <div class="social-media">
                                            <i>
                                                <i class='bx bxl-facebook-circle'></i>
                                                <i class='bx bxl-instagram-alt'></i>
                                                <i class='bx bxl-gmail'></i>
                                            </i>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class ="profile-img">
                                        <img src="images/Lopera.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>Jaina Lopera</h3>
                                        <p>Collage Student</p>
                                        <div class="social-media">
                                            <i>
                                                <i class='bx bxl-facebook-circle'></i>
                                                <i class='bx bxl-instagram-alt'></i>
                                                <i class='bx bxl-gmail'></i>
                                            </i>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class ="profile-img">
                                        <img src="images/Maagma.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>Remark Maagma</h3>
                                        <p>Collage Student</p>
                                        <div class="social-media">
                                            <i>
                                                <i class='bx bxl-facebook-circle'></i>
                                                <i class='bx bxl-instagram-alt'></i>
                                                <i class='bx bxl-gmail'></i>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>    
    </div>

    <script>
        document.getElementById("transbut").addEventListener("click",function(){
            document.querySelector(".popup").style.display = "flex";
        })

        document.querySelector(".close").addEventListener("click",function(){
            document.querySelector(".popup").style.display = "none";
        })

    </script>
</body>
</html>
