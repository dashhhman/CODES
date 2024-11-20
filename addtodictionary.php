<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="website icon" type="png" href="images/WEBLOGO.png"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/addtodictionary.css">
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
                <li><a href="index1.php"><b>Fun Quiz</b></a></li>
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
                    <li>
                        <select class="select2" name="target_translation_language">
                            <option value="Tagalog">Tagalog</option> 
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
                            <!-- Add other options -->
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
