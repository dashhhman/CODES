<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="website icon" type="png" href="images/WEBLOGO.png"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/addtodictionary.css">
    <title>Add to Dictionary</title>
    <style>
        .character-counter {
            font-size: 0.9em;
            color: gray;
            text-align: right;
        }
        .confirmation-message {
            display: none;
            color: green;
            font-size: 1.2em;
            margin-top: 10px;
            text-align: center;
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

        <form action="addtodicfunction.php" method="post" class="dict">
            <div class="maincon"> 
                <div class="glassmorphism">
                    <h1>Add to Dictionary</h1>
                    <div class="translator">
                        <ul class="item">
                            <li>           
                                <select class="select1" name="langwan">
                                    <option value="Tagalog">Tagalog</option>
                                </select>
                            </li>
                            <li>
                                <select class="select2" name="langtu">
                                    <option value="Cebuano">Cebuano</option>
                                    <option value="Bicol">Bicol</option>
                                    <option value="Hiligaynon">Hiligaynon</option>
                                </select>
                            </li>
                        </ul>

                        <div class="box">
                            <div class="mess">
                                <textarea maxlength="5000" name="words" class="textmess" placeholder="Write down.." oninput="updateCounter('words')"></textarea>
                                <div class="character-counter" id="words-counter">0 / 5000</div>
                            </div>
                        </div>

                        <div class="box2">
                            <div class="mess2">
                                <textarea maxlength="5000" name="translated" class="textmess2" placeholder="Write down.." oninput="updateCounter('translated')"></textarea>
                                <div class="character-counter" id="translated-counter">0 / 5000</div>
                            </div>
                        </div>

                        <button type="button" onclick="previewTranslation()" class="submit-btn">Preview Translation</button>
                        <button type="submit" class="submit-btn" id="transbut" name="transbut" onclick="showConfirmationMessage()">Add to Dictionary</button>
                        <div class="confirmation-message" id="confirmation-message">Entry added to the dictionary!</div>
                    </div>
                </div>
            </div>
        </form>                      
    </div>

    <script>
        function updateCounter(textareaId) {
            const textarea = document.getElementsByName(textareaId)[0];
            const counter = document.getElementById(`${textareaId}-counter`);
            counter.textContent = `${textarea.value.length} / 5000`;
        }

        function previewTranslation() {
            const words = document.getElementsByName("words")[0].value;
            document.getElementsByName("translated")[0].value = words;
        }

        function showConfirmationMessage() {
            const message = document.getElementById("confirmation-message");
            message.style.display = "block";
            setTimeout(() => {
                message.style.display = "none";
            }, 2000);
        }
    </script>
</body>
</html>
