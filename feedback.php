<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="website icon" type="png" href="images/WEBLOGO.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/feedback.css">
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
    </style>
</head>
<body>

    <div class="banner">



    <div class="error-message">
        <div class="verifications-content">
            <img src="images/error.svg" alt="">
            <h3>You forgot something!</h3>
            <p id="error-message-text">Please fill in all the required fields.</p> 
        </div>
    </div>

    <div class="success-message">
        <div class="verifications-content">
            <img src="images/success.svg" alt="">
            <h3>Successful!</h3>
            <p>Thank you for your feedback.</p> 
        </div>
    </div>



    <div class="verifications" id="verifications">
        <div class="verifications-content">
            <img src="images/alert.svg" alt="">
            <h3>Are you sure?</h3>
            <p>By clicking "Yes", you will submit your feedback.</p>
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
                <li><a href="addtodictionary.php"><b>Add Dictionary</b></a></li>
                <li><a href="index1.php"><b>Fun Quiz</b></a></li>  
                <span class="close-menu" id="close-menu"><i class='bx bx-x'></i></span>
            </ul>
        </div>

        <!-- <form action="feedadd.php" method="post" class="fd" id="feedbackForm"> -->
            <div class="maincon">
                <div class="glassmorphism">
                    <h1>Send us your Feedback</h1>
                    <div class="translator">
                        <div class="box">
                            <h2>Name:</h2>
                            <div class="mess">
                                <textarea maxlength="5000" name="fname" class="textmess" placeholder="Enter your name..."></textarea>
                            </div>
                        </div>
                        <div class="box2">
                            <h2>Email:</h2>
                            <div class="mess2">
                                <textarea maxlength="5000" name="ems" class="textmess2" placeholder="Enter your email Address..."></textarea>
                            </div>
                        </div>
                        <div class="contranslated">
                            <h2>Description:</h2>
                            <div class="mess">
                                <textarea name="conc" class="translated" placeholder="Your concern..."></textarea>
                            </div>
                        </div>
                        <button type="submit" class="submit-btn" id="transbut" name="transbut"><span></span>Submit</button>
                    </div>
                </div>
            </div>
        <!-- </form> -->
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
        submitBtn.addEventListener("click", ()=>{
            document.getElementById("verifications").style.display = "flex";
            document.getElementById("yes-btn-verification").onclick = validateForm; 
        });

        // document.addEventListener("keydown", function(event) {
        //     if (event.key === 'Enter') {
        //         validateForm(event);
        //     }
        // });
    });

    function validateForm(event) {
        event.preventDefault();

        const name = document.querySelector('textarea[name="fname"]').value.trim();
        const email = document.querySelector('textarea[name="ems"]').value.trim();
        const description = document.querySelector('textarea[name="conc"]').value.trim();

        if (!name || !email || !description) {
            showErrorMessage("All fields are required. Please fill in all fields.");
            return;
        }

        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test(email)) {
            showErrorMessage("Please enter a valid email address.");
            return;
        }

        showSuccessMessage("Form has been submitted successfully!");

        const formData = new FormData();
        formData.append('fname', name);
        formData.append('ems', email);
        formData.append('conc', description);

        fetch('feedadd.php', {
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
    errorDiv.style.display = 'flex';
    document.getElementById("error-message-text").innerHTML = message;
    errorDiv.style.opacity = '1';
    setTimeout(() => {
        errorDiv.style.opacity = '0';
    }, 1000); // Reduced delay for faster response
    setTimeout(() => {
        errorDiv.style.display = 'none';
    }, 3000); // Match with the fade out animation
}

function showSuccessMessage(message) {
    const successDiv = document.querySelector('.success-message'); 
    successDiv.style.display = 'flex'; 
    setTimeout(() => {
        successDiv.style.opacity = '0';
    }, 1000); // Reduced delay for faster response
    setTimeout(() => {
        document.getElementById("verifications").style.display = "none";
        successDiv.style.display = 'none';
    }, 3000); // Match with the fade out animation
}

    </script>
</body>
</html>
