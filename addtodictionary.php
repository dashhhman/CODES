<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="website icon" type="png" href="images/WEBLOGO.png"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/addtodictionary.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to Dictionary</title>
    <style>
        
        .error-message, .success-message {
            display: none;
            margin-top: 15px;
            padding: 10px;
            border-radius: 5px;
            animation: popUp 0.5s, fadeOut 2s 2.5s;
            position: fixed;
            top: 100px;
            width: calc(100% - 30px);
            text-align: center;
            max-width: 450px;
            left: 35%;
            transform: translateX(-0%);
            z-index: 1000;
            align-items: center;
        }

        .error-message {
            background-color: #f8d7da;
            color: #721c24;
        }

        .success-message {
            background-color: #d4edda;
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


        @keyframes popUp {
            0% {
                opacity: 0;
                transform: scale(0.5);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                display: none;
            }
        }






        @media (max-width: 768px) { 

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

            .error-message, .success-message {
            display: none;
            margin-top: 100px;
            padding: 10px;
            border-radius: 5px;
            animation: popUp 0.5s, fadeOut 2s 2.5s;
            position: fixed;
            top: 200px;
            width: calc(100% - 30px);
            text-align: center;
            max-width: 450px;
            left: 20%;
            transform: translateX(-0%);
            z-index: 1000;

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

            .error-message, .success-message {
            display: none;
            margin-top: 100px;
            padding: 10px;
            border-radius: 5px;
            animation: popUp 0.5s, fadeOut 2s 2.5s;
            position: fixed;
            top: 200px;
            width: calc(100% - 30px);
            text-align: center;
            max-width: 450px;
            left: 5%;
            transform: translateX(-0%);
            z-index: 1000;

            }
    
.translator .item {
    width: 320px; /* Ayusin ang lapad kung kinakailangan */
    height: 50px;
    list-style: none;
    padding: 0 20px;
    position: absolute; /* I-set ang position sa absolute */
    margin-right: calc(20% - 5px);
}
  
    .select1 {
        padding: 8px;
        padding-top: 5px;
        font-size: 21px;
        border: 4px solid black;
        border-radius: 15px;
        font-weight: bold;
        color: #000;
        background-color: #fff;
        cursor: pointer;
        width: 320px; 
        position: relative;
        top: 8px;  
    }

    .select2 {
        padding: 8px;
        padding-top: 5px;
        font-size: 21px;
        border: 4px solid black;
        border-radius: 15px;
        font-weight: bold;
        color: #000;
        background-color: #fff;
        cursor: pointer;
        width: 320px ; 
        position: relative;
        top: 187px;  
    }      
        
 
.translator .box,
.translator .box2{
    height: 135px; /* Adjust the height as needed */ 
    position: relative; /* Add relative positioning to .box */
    width: calc(100% - 5px); /* Each box takes 50% width with 5px spacing */ 
    justify-content: center; 
}

.translator .box{ 
    margin-top: 120px;
}

.translator .box2{ 
    margin-top: 80px; 
}



.submit-btn {
    padding: 6px 0;
    text-align: center;
    margin: 15px 10px;
    border-radius: 25px;
    font-weight: bold;
    border: 2px solid #009688;
    background: transparent;
    color: #fff;
    cursor: pointer;
    position: absolute;
    margin-left: 0px;
    bottom: 8.5px;
    width: 200px;
    left: 34%;
    
    transform: translateX(0%) translateY(40%);    
    transition: background-color 0.3s ease, transform 0.3s ease; /* Adding transition for smooth effect */
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
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="images/FINAL WEBLINGUA.png" class="logo" href="homepage.php">
            <span class="toggle-menu" id="toggle-menu"><i class='bx bx-menu'></i></span>
            <ul id="nav-links">
                <li><a href="homepage.php"><b>Home</b></a></li>
                <li><a href="index.php"><b>Translator</b></a></li>
                <li><a href="index1.php"><b>Fun Quiz</b></a></li>
                <span class="close-menu" id="close-menu"><i class='bx bx-x'></i></span>
            </ul>
        </div>
       <form action="addtodicfunction.php" method="post" class="dict" id="dictionaryForm">
    <div class="maincon">
        <div class="glassmorphism">
            <h1>Add to Dictionary</h1>
            <div class="translator">
                <ul class="item">
                    <li>
                        <select class="select1" name="proposed_translation_language">
                            <option value="Tagalog">Tagalog</option> 
                        </select>
                    </li>
                    <li>
                        <select class="select2" name="target_translation_language">
                            <option value="Kapampangan">Kapampangan</option>
                            <option value="Pangasinense">Pangasinense</option>
                            <option value="Iloko">Iloko</option>
                            <option value="Bikol">Bikol</option>
                            <option value="Cebuano">Cebuano</option>
                            <option value="Hiligaynon">Hiligaynon</option>
                            <option value="Waray">Waray</option>
                            <option value="Tausug">Tausug</option>
                            <option value="Maguindanaoan">Maguindanaoan</option>
                            <option value="Maranao">Maranao</option>
                            <option value="Chabacano">Chavacano</option>   
                            <option value="Ybanag">Ybanag</option>
                            <option value="Ivatan">Ivatan</option>
                            <option value="Surigaonon">Surigaonon</option>
                            <option value="Sambal">Sambal</option>
                            <option value="Aklanon">Aklanon</option>
                        </select>
                    </li>
                </ul>
                <div class="box">
                    <div class="mess">
                        <textarea maxlength="5000" name="proposed_word" class="textmess" placeholder="Write down.."></textarea>
                    </div>
                </div>
                <div class="box2">
                    <div class="mess2">
                        <textarea maxlength="5000" name="translated_word" class="textmess2" placeholder="Write down.."></textarea>
                    </div>
                </div>
                <button type="submit" class="submit-btn" id="transbut" name="transbut"><span></span>Add to Dictionary</button>
            </div>
        </div>
    </div>
</form>
<div class="error-message"></div>
<div class="success-message"></div>



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
 
  document.addEventListener("DOMContentLoaded", function() {
    const submitBtn = document.querySelector(".submit-btn");
    submitBtn.addEventListener("click", validateForm);

    document.addEventListener("keydown", function(event) {
        if (event.key === 'Enter') {
            validateForm(event);
        }
    });
});

function validateForm(event) {
    event.preventDefault();

    const proposeWord = document.querySelector('textarea[name="proposed_word"]').value.trim();
    const proposeTranslation = document.querySelector('select[name="proposed_translation_language"]').value.trim();
    const translation = document.querySelector('textarea[name="translated_word"]').value.trim();
    const translationLanguage = document.querySelector('select[name="target_translation_language"]').value.trim();

    if (!proposeWord || !proposeTranslation || !translation || !translationLanguage) {
        showErrorMessage("All fields are required. Please fill in all fields.");
        return;
    }

    showSuccessMessage("Form has been submitted successfully!");

    const formData = new FormData();
    formData.append('proposed_word', proposeWord);
    formData.append('proposed_translation_language', proposeTranslation);
    formData.append('translated_word', translation);
    formData.append('target_translation_language', translationLanguage);

    fetch('addtodicfunction.php', {
        method: 'POST',
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showSuccessMessage(data.message);
            setTimeout(() => {
                location.reload(); // Reload the page after success message
            }, 2000);
        } else {
            showErrorMessage(data.message);
        }
    })
    .catch(error => showErrorMessage("An error occurred: " + error));
}

function showErrorMessage(message) {
    const errorDiv = document.querySelector('.error-message');
    errorDiv.textContent = message;
    errorDiv.style.display = 'block';
    errorDiv.style.opacity = '1';
    setTimeout(() => {
        errorDiv.style.opacity = '0';
    }, 1000); // Reduced delay for faster response
    setTimeout(() => {
        errorDiv.style.display = 'none';
    }, 2000); // Match with the fade out animation
}

function showSuccessMessage(message) {
    const successDiv = document.querySelector('.success-message');
    successDiv.textContent = message;
    successDiv.style.display = 'block';
    successDiv.style.opacity = '1';
    setTimeout(() => {
        successDiv.style.opacity = '0';
    }, 1000); // Reduced delay for faster response
    setTimeout(() => {
        successDiv.style.display = 'none';
    }, 2000); // Match with the fade out animation
}

    </script>
</body>
</html>