<?php
//require_once('config/connect.php');
//$sql = "select * from translation";
//$result = mysqli_query($conn, $sql);
?>


<?php
require_once('config/connect.php');

if (isset($_POST['transbut'])) {
    $conn = $GLOBALS['conn']; // Assuming $conn is defined in your included file
    $Word = $_POST['wordhey'];
    $Language1 = $_POST['lang1'];
    $Language2 = $_POST['lang2'];

    $stmt = $conn->prepare("SELECT * FROM translation WHERE Word=? AND Language1=? AND Language2=? AND Status='Accepted'");
    $stmt->bind_param("sss", $Word, $Language1, $Language2);
    $stmt->execute();
    $result = $stmt->get_result();

    $recent = $_POST["wordhey"];
    $query = "INSERT INTO history (recent) 
    VALUES ('$recent')";

    mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $Word = $row['Word'];
            $Language1 = $row['Language1'];
            $Language2 = $row['Language2'];
            $translatedText = $row['Translated'];
            $Descript = $row['Descriptions'];
        } else {
            $translatedText = "No translate found";
            $Descript = "No description yet";
        }
    } else {
        echo "Error executing query: " . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="website icon" type="png" href="images/WEBLOGO.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
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
                display: block; /* Show close icon when menu is toggled */
            }
        }   

</style>
<body>
    <div class="banner">
                <div class="navbar">
                    <img src="images/FINAL WEBLINGUA.png" class="logo" href="homepage.php">
                    <span class="toggle-menu" id="toggle-menu"><i class='bx bx-menu'></i></span>
                    <ul id="nav-links">
                        <li><a href="homepage.php"><b>Home</b></a></li>
                        <li><a href="addtodictionary.php"><b>Add to Dictionary</b></a></li>
                        <li><a href="index1.php"><b>Fun Quiz</b></a></li>
                        <span class="close-menu" id="close-menu"><i class='bx bx-x'></i></span>  
                  </ul>
                </div>


            <div class="maincon">
                    <div class="glassmorphism">
                        <div class="translator">
                            <ul class="item">
                                <li>
                                    <select class="select1" id="lang1" name="lang1">
                                        <option value="tagalog" <?php if (isset($_POST['lang1']) && $_POST['lang1'] == "Tagalog") echo "selected"; ?>>Tagalog</option>
                                    </select>
                                </li>
                                <li class="switch">
                                    <!-- <i class='bx bx-transfer-alt'></i> -->
                                    <i ></i>
                                </li>
                                <li>
                                    <select class="select2" id="lang2" name="lang2">
                                        <option value="cebuano" <?php if (isset($_POST['lang2']) && $_POST['lang2'] == "Cebuano") echo "selected"; ?>>Cebuano</option>
                                        <option value="kapampangan" <?php if (isset($_POST['lang2']) && $_POST['lang2'] == "Kapampangan") echo "selected"; ?>>Kapampangan</option>
                                        <option value="pangasinense" <?php if (isset($_POST['lang2']) && $_POST['lang2'] == "Pangasinense") echo "selected"; ?>>Pangasinense</option>
                                        <option value="ilocano" <?php if (isset($_POST['lang2']) && $_POST['lang2'] == "Ilocano") echo "selected"; ?>>Ilocano</option>
                                        <option value="bicolano" <?php if (isset($_POST['lang2']) && $_POST['lang2'] == "Bicolano") echo "selected"; ?>>Bicolano</option>
                                        <option value="hiligaynon" <?php if (isset($_POST['lang2']) && $_POST['lang2'] == "Hiligaynon") echo "selected"; ?>>Hiligaynon</option>
                                        <option value="waray" <?php if (isset($_POST['lang2']) && $_POST['lang2'] == "Waray") echo "selected"; ?>>Waray</option>
                                        <option value="maranao" <?php if (isset($_POST['lang2']) && $_POST['lang2'] == "Maranao") echo "selected"; ?>>Maranao</option>
                                        <option value="kinaray-a" <?php if (isset($_POST['lang2']) && $_POST['lang2'] == "Kinaray-a") echo "selected"; ?>>Kinaray-a</option>
                                        <option value="chabacano" <?php if (isset($_POST['lang2']) && $_POST['lang2'] == "Chabacano") echo "selected"; ?>>Chabacano</option>
                                        <option value="yakan" <?php if (isset($_POST['lang2']) && $_POST['lang2'] == "Yakan") echo "selected"; ?>>Yakan</option>
                                        <option value="ybanag" <?php if (isset($_POST['lang2']) && $_POST['lang2'] == "Ybanag") echo "selected"; ?>>Ybanag</option>
                                        <option value="tausug" <?php if (isset($_POST['lang2']) && $_POST['lang2'] == "Tausug") echo "selected"; ?>>Tausug</option>
                                        <option value="ivatan" <?php if (isset($_POST['lang2']) && $_POST['lang2'] == "Ivatan") echo "selected"; ?>>Ivatan</option>
                                        <option value="sambal" <?php if (isset($_POST['lang2']) && $_POST['lang2'] == "Sambal") echo "selected"; ?>>Sambal</option>
                                        <option value="surigaonon" <?php if (isset($_POST['lang2']) && $_POST['lang2'] == "Surigaonon") echo "selected"; ?>>Surigaonon</option>
                                        <option value="maguindanao" <?php if (isset($_POST['lang2']) && $_POST['lang2'] == "Maguindanao") echo "selected"; ?>>Maguindanao</option>
                                        <option value="aklanon" <?php if (isset($_POST['lang2']) && $_POST['lang2'] == "Aklanon") echo "selected"; ?>>Aklanon</option>
                                    </select>
                                </li>
                            </ul>

                            <div class="box">
                                <div class="mess">
                                    <textarea maxlength="5000" name="wordhey" id="wordhey" class="textmess" placeholder="Write down.."><?php if (isset($Word)) echo htmlspecialchars($Word); ?></textarea>
                                    <!-- Copy icon -->
                                </div>
                            </div>

                            <div class="box2">
                                
                                <div class="mess2">
                                    <textarea maxlength="5000" name="translatedhey" id="translatedhey" class="textmess2" placeholder=""><?php if (isset($translatedText)) echo htmlspecialchars($translatedText); ?></textarea>
                                 
                                    <div class="icon3">
                                        <span class="copy3"><i  id="voice-but" class='bx bxs-volume-full' type="solid"></i></span>
                                    </div>
                                    <div class="icon4">
                                        <span class="copy4"><i id="copy-but" onclick="copyTextareaContent()" class='bx bxs-copy-alt' type="solid"></i></span>
                                    </div>
                                </div>
                            </div>
                            
                            <button type="submit" class="submit-btn" id="transbut" name="transbut"><span></span>Translate</button>
                            <button onclick="clear()" id="clear-but" class="clear-btn"><span></span>Clear</button>
                            <button onclick="window.location.href='feedback.php';" class="Feedback"><span></span>Feedback</button>
                    </div>
                        </div>

                    </div>
                </form>
            </div>


        </div>
            
            

    </div>
    <script>
    
        const url = 'http://127.0.0.1:5000/translate';

        let speech = new SpeechSynthesisUtterance();
        speech.volume = 5; // Set the volume to maximum
        speech.pitch = 1.2; // Adjust the pitch, range is from 0 (lowest) to 2 (highest)
        speech.rate = 1; // Adjust the rate, range is from 0.1 (lowest) to 10 (highest)

        let voices = []; 

        window.speechSynthesis.onvoiceschanged = () => {
            voices = window.speechSynthesis.getVoices();
        };

        setTimeout(() => {
            var selectedGender = localStorage.getItem('selectedGender');
            console.log("HELLO : ", selectedGender);
            if (selectedGender === 'female') {
                speech.voice = voices[1];
            } else if (selectedGender === 'male') {
                speech.voice = voices[2];
            } else {
                speech.voice = voices[2];
            }
        }, 1000);

        const voice_but = document.getElementById('voice-but');
        voice_but.addEventListener("click", () => { 
            speech.text = document.getElementById("translatedhey").value;
            window.speechSynthesis.speak(speech);
        });


 
        function copyTextareaContent() {
            var textarea = document.getElementById("translatedhey");
            textarea.select();
            document.execCommand("copy");
        }
  
        const clear_but = document.getElementById('clear-but');
        clear_but.addEventListener('click', () => {
            document.querySelector('textarea').value = '';
            document.querySelector('textarea').focus();
        });


        const translateButton = document.getElementById('transbut');
        translateButton.addEventListener('click', async (e) => {
            e.preventDefault();

            const sentence = document.getElementById('wordhey').value;
            const sourceLanguage = document.getElementById('lang1').value;
            const targetLanguage = document.getElementById('lang2').value;

            if (!sentence) return;


            fetch(url, {
                    method: 'POST',
                    body: JSON.stringify({
                        sentence,
                        sourceLanguage,
                        targetLanguage
                    }),
                    headers: {
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    document.getElementById('translatedhey').value = data.translated_sentence;
                })
                .catch(error => console.error('Error:', error));

        });

 
        function debounce(func, delay) {
            let timer;
            return function(...args) {
                clearTimeout(timer);
                timer = setTimeout(() => func.apply(this, args), delay);
            };
        }

        const translateText = () => {
            console.log("Keyboard pressed");
            const sentence = document.getElementById('wordhey').value;
            const sourceLanguage = document.getElementById('lang1').value;
            const targetLanguage = document.getElementById('lang2').value;

            if (!sentence) return;
 
            fetch( url , {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body:JSON.stringify({
                        sentence,
                        sourceLanguage,
                        targetLanguage
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    document.getElementById('translatedhey').value =data.translated_sentence;
                }).catch(error => console.error('Error:', error));
        };

        const debouncedTranslateText = debounce(translateText, 900); // 1000 ms = 1 second

        const wordhey = document.getElementById('wordhey');
        wordhey.addEventListener('keyup', debouncedTranslateText);
 

        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // Function to display the modal
        function displayModal() {
            modal.style.display = "block";
        }

        // When the page loads, display the modal
        window.onload = function() {
            displayModal();
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }


        // Prevent typing in text areas within box2 and contranslated
        document.querySelectorAll('.box2 textarea, .contranslated textarea .modal').forEach(function(textarea) {
            textarea.addEventListener('keydown', function(event) {
                event.preventDefault();
            });
        });
        document.querySelector('.Feedback').addEventListener('click', function() {
    window.location.href = 'feedback.php';
});
  
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