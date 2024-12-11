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


        .maincon2{
            display : none;
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



@media (max-width: 768px) { 
.error-message {
    display: flex;
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
.success-message {
    display : none;
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
    display: block; /* Show menu icon on mobile */
    cursor: pointer;
    font-size: 24px;  
    margin-right : 30px;
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



.modal {
    display: none; /* Hidden by default */
    position: fixed;
    z-index : 999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto; /* Allow scrolling */
    background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
}


.modal.show {
    display: block;
    animation: fadeIn 0.5s ease;
}

.modal.hide {
    display: block; /* Ensure the element is still shown to allow the animation to play */
    animation: fadeOut 0.5s ease;
}


.modal-content {
    background-color: brown;
    margin: 15% auto;
    padding: 20px;
    border: 4px solid black;
    border-radius: 15px;
    width: 90%; /* Adjusted width for smaller devices */
    color: white;
    text-align: center;
    opacity: 1;
}

.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close:hover,
.close:focus {
    color: #FFD700;
    text-decoration: none;
    cursor: pointer;
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




.maincon{
    display : none;
}


.maincon2 {
    height: 110vh;
    overflow-y: auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
 
.glassmorphism {
    width: 85%;
    box-shadow: 15px 15px 12px #00000035;
    backdrop-filter: blur(-1px);
    border-radius: 15px;
    overflow: hidden;
    position: absolute;
    height: 50%;
    top: calc(50% + 58px); 
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: left;
    padding: 8px;
    height: calc(60% - -30px);   
    background: brown;
    border: 4px solid black; /* Black border */   
}






.select1-2 { 
    font-size: 20px; 
    border: 2px solid #333;
    font-weight: bold;
    border-radius: 15px;
    cursor: pointer; 
    margin: 0; /* Remove auto margin */
    margin-right: auto; /* Push the select element to the left */  
    color: #000;
    background-color: #fff;
    border: 4px solid black; /* Black border */
    width: 100%;
    resize: horizontal;
    padding: 10px;
}   

.select2-2 {
    font-size: 20px; 
    border: 2px solid #333;
    font-weight: bold;
    border-radius: 15px;
    cursor: pointer; 
    margin: 0; /* Remove auto margin */
    margin-right: auto; /* Push the select element to the left */  
    color: #000;
    background-color: #fff;
    border: 4px solid black; /* Black border */
    width: 100%;
    resize: horizontal;
    padding: 10px;
    
}

option{
    background-color: floralwhite;
    text-align:center;
    font-weight: bold;
    font-size: 22px;
    resize: horizontal;
    width : 90%;
}

.translator .boxnew,
.translator .box2new {
    height: 10px;
    margin-bottom: 0px;
    position: relative;
    width: calc(50% - 15px);
    float: left;
    margin-left: 10px;
    margin-top: 25px;
}

.translator .box2new {
    margin-left: 10px;
    margin-top: 25px;
}


.translator .boxnew .messnew,
.translator .box2new .mess2new {
    display: flex;
    justify-content: left;
    align-items: left;
    color: #ffffff; 
    resize : none;

}

.translator .boxnew textarea.textmess,
.translator .box2new textarea.textmess2 {
    width: calc(100% - 20px);
    height: 300px;
    border: 1px solid black;
    border-radius: 15px;
    font-size: 25px;
    font-weight: bold;
    resize: none;
    padding: 10px;
    margin: 30px;
    margin-top: 0px;
    margin-bottom: 80px;
    background: white;
    color: black;
    -webkit-backdrop-filter: blur(11px);
    backdrop-filter: blur(4px);
    overflow: hidden;
    padding-right: 40px; /* Make space for the icon */
    position: relative;
    display: none;
}


 
  
.box2new textarea,
.boxnew textarea{ 
    height: 200px;
}

.glassmorphism{
    height : fit-content;
    margin-top: 75px; 
}




.submit-btn2 {
 
    left: 46%; 
    padding: 6px 0;
    text-align: center;
    margin:0 auto;
    border-radius: 25px;
    font-weight: bold;
    border: 2px solid #009688;
    background: transparent;
    color: #fff;  
    width: 50%;
    position : relative;
    transition: background-color 0.3s ease, transform 0.3s ease; /* Adding transition for smooth effect */
    margin-top : 16px;

}


.submit-btn2 span {
    background: #009688;
    height: 100%;
    width: 0;
    border-radius: 25px;
    position: absolute;
    left: 0;
    bottom: 0;
    z-index: -1;
    transition: 0.5s;
}
.submit-btn2:hover span {
    width: 100%;
}
.submit-btn2:hover {
    border: none;
}


@keyframes popUp {
    0% {
        opacity: 0;
        transform: scale(0.5) translate(-50%, -300%);
    }
    100% {
        opacity: 1;
        transform: scale(1) translate(-50%, -300%);
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


 
    </style>
</head>
<body>






    <div class="banner">

     

    <div class="error-message">
        <div class="verifications-content">
                <img src="images/success.svg" alt="">
                <h3>Are you sure?</h3>
                <p>By clicking "Yes", you agree to add this word to the dictionary.</p> 
            </div>
    </div>

    <div class="success-message">
        
    </div>



    <div class="verifications" id="verifications">
        <div class="verifications-content">
            <img src="images/alert.svg" alt="">
            <h3>Are you sure?</h3>
            <p>By clicking "Yes", you agree to add this word to the dictionary.</p>
            <div class="yes-no-buttons">
                <button class="yes-btn-verification" id="yes-btn-verification">Yes</button>
                <button class="no-btn-verification" id="no-btn-verification">No</button>
            </div> 
        </div>
    </div>

    <script>
        document.getElementById("no-btn-verification").addEventListener("click", function() {
            document.getElementById("verifications").style.display = "none";
        })
    </script>


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
 
            <div class="maincon2">
                <div class="glassmorphism">
                    <h1>Add to Dictionary</h1> 
                        <div class="boxnew">
                            <select class="select1-2" name="proposed_translation_language2">
                                <option value="Tagalog">Tagalog</option> 
                            </select>
                            <div class="messnew">
                                <textarea maxlength="5000" name="proposed_word2" class="textmess" placeholder="Write down.."></textarea>
                            </div>
                        </div>

                        <div class="box2new">
                            <select class="select2-2" name="target_translation_language2">
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
                            <div class="mess2new">
                                <textarea maxlength="5000" name="translated_word2" class="textmess2" placeholder="Write down.."></textarea>
                            </div>
                        </div>
                        <button type="submit" class="submit-btn2" id="transbut2" name="transbut"><span></span>Add to Dictionary</button>
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
 
    document.addEventListener("DOMContentLoaded", function() {
        const submitBtn = document.querySelector(".submit-btn");
        submitBtn.addEventListener("click", validateForm);

        document.addEventListener("keydown", function(event) {
            if (event.key === 'Enter') {
                validateForm(event);
            }
        });

        const submitBtn2 = document.getElementById("transbut2");
        // submitBtn2.addEventListener("click", validateForm2);
        submitBtn2.addEventListener("click", ()=>{
            document.getElementById("verifications").style.display = "flex";
            document.getElementById("yes-btn-verification").onclick = validateForm2;
        });


    });

function validateForm(event) {
    event.preventDefault();


    let proposeWord = document.querySelector('textarea[name="proposed_word"]').value.trim(); 
    let proposeTranslation = document.querySelector('select[name="proposed_translation_language"]').value.trim();
    let translation = document.querySelector('textarea[name="translated_word"]').value.trim();
    let translationLanguage = document.querySelector('select[name="target_translation_language"]').value.trim();

    if (!proposeWord || !proposeTranslation || !translation || !translationLanguage) {  
            showErrorMessage("All fields are required. Please fill in all fields.");  
            return;
    }
 
 

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
    errorDiv.style.display = 'flex';
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
    successDiv.style.display = 'flex';
    successDiv.style.opacity = '1';
    setTimeout(() => {
        successDiv.style.opacity = '0';
    }, 1000); // Reduced delay for faster response
    setTimeout(() => {
        successDiv.style.display = 'none';
    }, 2000); // Match with the fade out animation
}




function validateForm2(event) {
    event.preventDefault();

    console.log("helllo hehehee");

    let proposeWord = document.querySelector('textarea[name="proposed_word2"]').value.trim(); 
    let proposeTranslation = document.querySelector('select[name="proposed_translation_language2"]').value.trim();
    let translation = document.querySelector('textarea[name="translated_word2"]').value.trim();
    let translationLanguage = document.querySelector('select[name="target_translation_language2"]').value.trim();

    if (!proposeWord || !proposeTranslation || !translation || !translationLanguage) {  
            showErrorMessage("All fields are required. Please fill in all fields.");  
            return;
    }
 
 

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
    </script>
</body>
</html>