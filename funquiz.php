<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="website icon" type="png" href="images/WEBLOGO.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/addtodictionary.css">
    <title>Feedback</title>
    <style>
        .error-message, .success-message { 
            position : absolute; 
            top : 50%;
            left : 50%;
            transform : translate(-50%, -50%);
            z-index : 2000;
            width : 100%;
            height : 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            display : none;
        }


        .error-message {
            color: #721c24;
        }

        .success-message {
            color: #155724;
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
 .verifications{ 
    position : absolute; 
    top : 50%;
    left : 50%;
    transform : translate(-50%, -50%);
    z-index : 1000;
    width : 100%;
    height : 100%;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
    display : none;
}

        @media (max-width: 768px) {

.error-message , .success-message {
    display: none;
    position : absolute; 
    top : 50%;
    left : 50%;
    transform : translate(-50%, -50%);
    z-index : 2000;
    width : 100%;
    height : 100%;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center; 
} 


.verifications{
    display: flex;
    position : absolute; 
    top : 50%;
    left : 50%;
    transform : translate(-50%, -50%);
    z-index : 1000;
    width : 100%;
    height : 100%;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
    display : none;
}           
            .navbar{  
                width: 100%;
                margin: auto;
                padding:0 ;
                display: flex;
                align-items: center;
                justify-content: space-between;
                z-index: 1;
                position : relative;
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

 @media (max-width: 768px) { 
.error-message , .success-message {
    display: none;
    position : absolute; 
    top : 50%;
    left : 50%;
    transform : translate(-50%, -50%);
    z-index : 2000;
    width : 100%;
    height : 130svh;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center; 
} 


.verifications{
    display: flex;
    position : absolute; 
    top : 50%;
    left : 50%;
    transform : translate(-50%, -50%);
    z-index : 1000;
    width : 100%;
    height : 130svh;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
    display : none;
}


.toggle-menu {
    display: block;
    cursor: pointer;
    font-size: 24px;
    margin-right: 30px;
}

.navbar {
    flex-direction: row;
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
    
.navbar {
        width: 100%;
        margin: auto;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        z-index: 1;
        position: relative;
    }

.verifications-content{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-color: #f8d7da;
    border-radius: 15px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    padding: 20px;
    width: 300px;
    height: 300px; 
    row-gap: 16px; 
    padding-top : 50px;
    padding-bottom : 50px;
}

.verifications-content img{
    width : 80px;
    height : 80px;

}

.verifications-content h3,
.verifications-content p{ 
    margin: 0;
    padding : 0;
    text-align: center;
}

.yes-no-buttons{
    display: flex;
    justify-content: space-between;
    width: 100%;
    resize : horizontal;
    height : fit-content;
    flex-direction : row;
}
.yes-no-buttons button{ 
    width : 100px;
    height : 40px;
    border-radius : 15px;
    border : none;
    font-size : 20px;
}

.yes-btn-verification{
    background-color: #28a745;
    color : white;
    transition: background-color 0.3s ease; /* Adding transition for smooth effect */
    cursor : pointer;
}

.yes-btn-verification:hover{
    background-color: #218838;
}

.no-btn-verification{
    background-color: #dc3545;
    color : white;
    transition: background-color 0.3s ease; /* Adding transition for smooth effect */
    cursor : pointer;
}

.no-btn-verification:hover{
    background-color: #c82333;
}
 }


 .content {
    width: 100%;
    position: absolute;
    top: 55%;
    transform: translateY(-50%);
    text-align: center;
    font-weight: bold;
    color: #fff;
}

.content h1 {
    margin: 20px auto;
    font-weight: 900;
    font-size: 65px;
    line-height: 1.5;
    word-wrap: break-word;
}

.content .logo {
    width: 300px;
    height: 300px;
    border: 3px solid rgb(87, 117, 141);
    border-radius: 50%;
    object-fit: cover;
}

.content p {
    margin: 20px auto;
    font-weight: 500;
    font-size: 65px;
    line-height: 1.5;
    word-wrap: break-word;
}

/* Button Styles */
button {
    width: 200px;
    padding: 15px 0;
    text-align: center;
    margin: 20px 10px;
    border-radius: 25px;
    font-weight: bold;
    border: 2px solid #009688;
    background: transparent;
    color: #fff;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}

button span {
    background: #009688;
    height: 100%;
    width: 0;
    border-radius: 25px;
    position: absolute;
    left: 0;
    bottom: 0;
    z-index: -1;
    transition: width 0.5s;
}

button:hover span {
    width: 100%;
}

button:hover {
    border: none;
}

/* Responsive Styles */
@media (max-width: 1280px) {
    .content h1 {
        font-size: 35px;
    }

    .content .logo {
        width: 250px;
        height: 250px;
    }

    .content p {
        font-size: 22px;
        line-height: 1.6;
    }
}

@media (max-width: 1024px) {
    
    .content h1 {
        font-size: 30px;
    }

    .content .logo {
        width: 230px;
        height: 230px;
    }

    .content p {
        font-size: 20px;
        line-height: 1.7;
    }
}

@media (max-width: 768px) {
 
    .content h1 {
        font-size: 30px;
    }

    .content .logo {
        width: 200px;
        height: 200px;
    }

    .content p {
        font-size: 18px;
        line-height: 1.8;
        margin: 10px 0;
    }

    button {
        width: 180px;
    }
}

@media (max-width: 500px) {
    .content h1 {
        font-size: 20px;
    }

    .content .logo {
        width: 180px;
        height: 180px;
    }

    .content p {
        font-size: 16px;
        line-height: 1.9;
        margin: 8px 0;
    }

    button {
        width: 160px;
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
                <li><a href="funquiz.php"><b>Fun Quiz</b></a></li>  
                <span class="close-menu" id="close-menu"><i class='bx bx-x'></i></span>
            </ul>
     </div>

     <div class="content">
        <h1>Try Your Knowledge.</h1>
        <div>
            
            <a href="index1.php">
                <button type="button"><span></span>Take a Quiz</button>
            </a>
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
</script>
</body>
</html>
