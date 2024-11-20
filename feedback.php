<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="website icon" type="png" href="images/WEBLOGO.png"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/feedback.css">
    <title>Feedback</title>
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
    </style>
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
        <form action="feedadd.php" method="post" class="fd" id="feedbackForm">
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
        </form>
        <div class="error-message"></div>
        <div class="success-message"></div>
    </div>
    <script>
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
