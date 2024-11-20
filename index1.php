<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="images/WEBLOGO.png" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <title>WebLingua</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="images/FINAL WEBLINGUA.png" class="logo" href="homepage.php">
            <ul>
                <li><a href="homepage.php"><b>Home</b></a></li>
                <li><a href="index.php"><b>Translator</b></a></li>
                <li><a href="addtodictionary.php"><b>Add to Dictionary</b></a></li>
                <li><a href="index1.php"><b>Fun Quiz</b></a></li>   
            </ul>
        </div>
        
        <div class="maincon">
            <div class="layout-container">
                <div class="circle-container">
                    <div class="nav">
                        <a href="leaderboard.php"><i class='bx bxs-trophy bx-tada'></i>Leaderboard</a>
                    </div>
                    <h1>Try Your Knowledge. Take a Quiz!</h1>
                    <div class="circle-row">
                        <a href="#triviaModal1" class="circle"><p>Kapampangan</p></a>
                        <a href="#triviaModal2" class="circle"><p>Pangasinense</p></a>
                        <a href="#triviaModal3" class="circle"><p>Iloko</p></a>
                        <a href="#triviaModal4" class="circle"><p>Bikol</p></a>
                    </div>
                    <div class="circle-row">
                        <a href="#triviaModal5" class="circle"><p>Cebuano</p></a>
                        <a href="#triviaModal6" class="circle"><p>Hiligaynon</p></a>
                        <a href="#triviaModal7" class="circle"><p>Waray</p></a>
                        <a href="#triviaModal8" class="circle"><p>Tausug</p></a>
                        <a href="#triviaModal9" class="circle"><p>Maguindanaoan</p></a>
                    </div>
                    <div class="circle-row">
                        <a href="#triviaModal10" class="circle"><p>Maranao</p></a>
                        <a href="#triviaModal11" class="circle"><p>Chabacano</p></a>
                        <a href="#triviaModal12" class="circle"><p>Ybanag</p></a>
                        <a href="#triviaModal13" class="circle"><p>Ivatan</p></a>
                        <a href="#triviaModal14" class="circle"><p>Sambal</p></a>
                    </div>
                    <div class="circle-row">
                        <a href="#triviaModal15" class="circle"><p>Aklanon</p></a>
                        <a href="#triviaModal16" class="circle"><p>Kinaray-a</p></a>
                        <a href="#triviaModal17" class="circle"><p>Yakan</p></a>
                        <a href="#triviaModal18" class="circle"><p>Surigaonon</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div id="triviaModal1" class="modal">
    <div class="modal-content">
        <span class="close" data-modal="#triviaModal1">&times;</span>
        <h2>Trivia Time: Kapampangan!</h2>
        <div class="trivia-content">
            <div class="trivia-left">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/320px-Flag_of_the_Philippines.svg.png" alt="Philippine Flag" class="flag-image">
            </div>
            <p class="trivia-text">
            Alam mo ba? Ang Kapampangan ay isa sa mga pangunahing wika ng mga naninirahan sa probinsya ng Pampanga at ilang bahagi ng Central Luzon. Kilala rin ito sa tawag na Pampango. Ang Kapampangan ay bahagi ng malaking pamilya ng mga Austronesian languages. Ang wika na ito ay puno ng kasaysayan at kultura ng mga Kapampangan. Ginagamit ito sa pang-araw-araw na komunikasyon, panitikan, at mga tradisyonal na seremonya. Ipinagmamalaki ng mga Kapampangan ang kanilang wika dahil ito'y bahagi ng kanilang identidad at kasaysayan.
            </p>
        </div>
        <a href="quizgame.php?category=Kapampangan" class="next-btn">Take a Quiz</a>
    </div>
</div>
<div id="triviaModal2" class="modal">
    <div class="modal-content">
        <span class="close" data-modal="#triviaModal2">&times;</span>
        <h2>Trivia Time: Pangasinense!</h2>
        <div class="trivia-content">
            <div class="trivia-left">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/320px-Flag_of_the_Philippines.svg.png" alt="Philippine Flag" class="flag-image">
            </div>
            <p class="trivia-text">
            Alam mo ba? Ang Pangasinense ay isa sa mga pangunahing wika ng Pangasinan at ng Ilocos Region. Ang wika na ito ay bahagi ng malaking pamilya ng Austronesian languages. Bukod sa pagiging isang wika ng komunikasyon, ang Pangasinense ay punong-puno rin ng kasaysayan at kultura. Ang kanilang mga salita ay nagbibigay-buhay sa mga kwento ng kanilang mga ninuno at nagsisilbing tanda ng kanilang matatag na identidad. Ang mga Pangasinense ay ipinagmamalaki ang kanilang wika at patuloy na ginagamit ito sa araw-araw na pamumuhay.
            </p>
        </div>
        <a href="quizgame.php?category=Pangasinense" class="next-btn">Take a Quiz</a>
    </div>
</div>
<div id="triviaModal3" class="modal">
    <div class="modal-content">
        <span class="close" data-modal="#triviaModal3">&times;</span>
        <h2>Trivia Time: Iloko!</h2>
        <div class="trivia-content">
            <div class="trivia-left">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/320px-Flag_of_the_Philippines.svg.png" alt="Philippine Flag" class="flag-image">
            </div>
            <p class="trivia-text">
            Alam mo ba? Ang Iloko, kilala rin bilang Ilocano, ay isa sa mga pangunahing wika ng Hilagang Luzon, partikular sa mga rehiyon ng Ilocos at mga karatig na probinsya. Ang wika na ito ay bahagi ng malawak na Austronesian language family. Ang Iloko ay puno ng kasaysayan at kultura ng mga Ilokano. Ginagamit ito sa pang-araw-araw na komunikasyon, mga panitikan, at sa iba't ibang mga tradisyon at seremonya. Ang mga Ilokano ay ipinagmamalaki ang kanilang wika dahil ito ay sumasalamin sa kanilang pagkakakilanlan at makulay na kasaysayan.
            </p>
        </div>
        <a href="quizgame.php?category=Iloko" class="next-btn">Take a Quiz</a>
    </div>
</div>
<div id="triviaModal4" class="modal">
    <div class="modal-content">
        <span class="close" data-modal="#triviaModal4">&times;</span>
        <h2>Trivia Time: Bikol!</h2>
        <div class="trivia-content">
            <div class="trivia-left">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/320px-Flag_of_the_Philippines.svg.png" alt="Philippine Flag" class="flag-image">
            </div>
            <p class="trivia-text">
            Alam mo ba? Ang Bikol ay isa sa mga pangunahing wika ng Bicol Region, na matatagpuan sa timog-silangang bahagi ng Luzon. Ang wika na ito ay bahagi ng malaking Austronesian language family. Ang Bikol ay may iba't ibang dialekto, ngunit lahat ng ito ay nagkakaisa sa pagpapahayag ng mayamang kultura at kasaysayan ng mga Bicolano. Ang mga salitang Bikolano ay ginagamit sa pang-araw-araw na komunikasyon, sa mga tradisyunal na seremonya, at sa sining. Ipinagmamalaki ng mga Bicolano ang kanilang wika dahil ito ay sumasalamin sa kanilang pagkakakilanlan at makulay na kasaysayan.
            </p>
        </div>
        <a href="quizgame.php?category=Bikol" class="next-btn">Take a Quiz</a>
    </div>
</div>
<div id="triviaModal5" class="modal">
    <div class="modal-content">
        <span class="close" data-modal="#triviaModal5">&times;</span>
        <h2>Trivia Time: Cebuano!</h2>
        <div class="trivia-content">
            <div class="trivia-left">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/320px-Flag_of_the_Philippines.svg.png" alt="Philippine Flag" class="flag-image">
            </div>
            <p class="trivia-text">
                Alam mo ba? Ang Pampanga ay kilala bilang Culinary Capital ng Pilipinas. Ang Pampanga ay kilala sa kanilang masasarap na pagkain tulad ng sisig, tocino, at iba pa. Maraming turista ang pumupunta dito upang tikman ang kanilang mga espesyal na putahe. Bukod dito, ang Pampanga ay mayroon ding makulay na kultura at tradisyon na ipinagmamalaki ng mga Kapampangan.
            </p>
        </div>
        <a href="quizgame.php?category=Cebuano" class="next-btn">Take a Quiz</a>
    </div>
</div>
<div id="triviaModal6" class="modal">
    <div class="modal-content">
        <span class="close" data-modal="#triviaModal6">&times;</span>
        <h2>Trivia Time: Hiligaynon!</h2>
        <div class="trivia-content">
            <div class="trivia-left">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/320px-Flag_of_the_Philippines.svg.png" alt="Philippine Flag" class="flag-image">
            </div>
            <p class="trivia-text">
             Alam mo ba? Ang Hiligaynon, na kilala rin bilang Ilonggo, ay isa sa mga pangunahing wika ng Western Visayas, partikular sa mga probinsya ng Iloilo at Negros Occidental. Bahagi ito ng malaking Austronesian language family. Ang Hiligaynon ay kilala sa malumanay at musikang himig ng kanilang pagsasalita, kaya't madalas ay tinatawag itong "language of love" sa Pilipinas. Ang wika na ito ay ginagamit sa pang-araw-araw na komunikasyon, sa mga panitikan, at sa iba't ibang tradisyon at seremonya. Ang mga Ilonggo ay ipinagmamalaki ang kanilang wika dahil ito ay sumasalamin sa kanilang mayamang kultura at kasaysayan.
             </p>
        </div>
        <a href="quizgame.php?category=Hiligaynon" class="next-btn">Take a Quiz</a>
    </div>
</div>
<div id="triviaModal7" class="modal">
    <div class="modal-content">
        <span class="close" data-modal="#triviaModal7">&times;</span>
        <h2>Trivia Time: Waray!</h2>
        <div class="trivia-content">
            <div class="trivia-left">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/320px-Flag_of_the_Philippines.svg.png" alt="Philippine Flag" class="flag-image">
            </div>
            <p class="trivia-text">
                Alam mo ba? Ang Waray ay isa sa mga pangunahing wika ng Eastern Visayas, partikular sa mga probinsya ng Samar at Leyte. Ang Waray ay bahagi ng malaking Austronesian language family. Ang mga salitang Waray ay ginagamit sa pang-araw-araw na komunikasyon, panitikan, at mga tradisyonal na seremonya. Kilala ang Waray sa kanilang matapang at malakas na paraan ng pagsasalita, na sumasalamin sa matatag at matapang na karakter ng mga Waraynon. Ang mga Waraynon ay ipinagmamalaki ang kanilang wika at patuloy itong ginagamit sa iba't ibang aspeto ng kanilang buhay upang mapanatili ang kanilang makulay na kultura at kasaysayan.
           </p>
        </div>
        <a href="quizgame.php?category=Waray" class="next-btn">Take a Quiz</a>
    </div>
</div>
<div id="triviaModal8" class="modal">
    <div class="modal-content">
        <span class="close" data-modal="#triviaModal8">&times;</span>
        <h2>Trivia Time: Tausug!</h2>
        <div class="trivia-content">
            <div class="trivia-left">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/320px-Flag_of_the_Philippines.svg.png" alt="Philippine Flag" class="flag-image">
            </div>
            <p class="trivia-text">
                Alam mo ba? Ang Pampanga ay kilala bilang Culinary Capital ng Pilipinas. Ang Pampanga ay kilala sa kanilang masasarap na pagkain tulad ng sisig, tocino, at iba pa. Maraming turista ang pumupunta dito upang tikman ang kanilang mga espesyal na putahe. Bukod dito, ang Pampanga ay mayroon ding makulay na kultura at tradisyon na ipinagmamalaki ng mga Kapampangan.
            </p>
        </div>
        <a href="quizgame.php?category=Tausug" class="next-btn">Take a Quiz</a>
    </div>
</div>
<div id="triviaModal9" class="modal">
    <div class="modal-content">
        <span class="close" data-modal="#triviaModal9">&times;</span>
        <h2>Trivia Time: Maguindanaoan!</h2>
        <div class="trivia-content">
            <div class="trivia-left">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/320px-Flag_of_the_Philippines.svg.png" alt="Philippine Flag" class="flag-image">
            </div>
            <p class="trivia-text">
                Alam mo ba? Ang Maguindanao ay isa sa mga pangunahing wika ng Maguindanao Province at ilang bahagi ng Cotabato sa Mindanao. Ang wika na ito ay bahagi ng malaking Austronesian language family. Ang Maguindanao ay ginagamit sa pang-araw-araw na komunikasyon, sa mga panitikan, at sa iba't ibang tradisyon at seremonya ng mga Maguindanaon. Ang mga Maguindanaon ay ipinagmamalaki ang kanilang wika dahil ito ay sumasalamin sa kanilang mayamang kasaysayan at kultura. Ang kanilang wika ay nagpapakita ng kanilang malalim na paggalang sa kanilang mga ninuno at sa kanilang lupang tinubuan.
            </p>
        </div>
        <a href="quizgame.php?category=Maguindanaoan" class="next-btn">Take a Quiz</a>
    </div>
</div>
<div id="triviaModal10" class="modal">
    <div class="modal-content">
        <span class="close" data-modal="#triviaModal10">&times;</span>
        <h2>Trivia Time: Maranao!</h2>
        <div class="trivia-content">
            <div class="trivia-left">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/320px-Flag_of_the_Philippines.svg.png" alt="Philippine Flag" class="flag-image">
            </div>
            <p class="trivia-text">
                Alam mo ba? Ang Maranao ay isa sa mga pangunahing wika ng Lanao del Sur sa Mindanao. Ang wika na ito ay bahagi ng malaking Austronesian language family. Ang Maranao ay ginagamit sa pang-araw-araw na komunikasyon, sa mga panitikan, at sa iba't ibang tradisyon at seremonya ng mga Maranao. Ang mga Maranao ay ipinagmamalaki ang kanilang wika dahil ito ay sumasalamin sa kanilang mayamang kasaysayan at kultura. Ang kanilang wika ay nagpapakita ng kanilang malalim na paggalang sa kanilang mga ninuno at sa kanilang lupang tinubuan. Ang Maranao ay kilala rin sa kanilang mga malikhaing sining tulad ng okir (carving) at malong (tapestry).
            </p>
        </div>
        <a href="quizgame.php?category=Maranao" class="next-btn">Take a Quiz</a>
    </div>
</div>
<div id="triviaModal11" class="modal">
    <div class="modal-content">
        <span class="close" data-modal="#triviaModal11">&times;</span>
        <h2>Trivia Time: Chabacano!</h2>
        <div class="trivia-content">
            <div class="trivia-left">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/320px-Flag_of_the_Philippines.svg.png" alt="Philippine Flag" class="flag-image">
            </div>
            <p class="trivia-text">
             Alam mo ba? Ang Chavacano ay isang natatanging creole language sa Pilipinas na pangunahing sinasalita sa Zamboanga City. Ang Chavacano ay may malakas na impluwensya ng Espanyol, na hinaluan ng mga salitang mula sa iba't ibang wika sa Pilipinas, tulad ng Cebuano, Ilonggo, at Tagalog. Ang wika na ito ay nagmula noong panahon ng mga Kastila, at hanggang ngayon ay ginagamit pa rin sa pang-araw-araw na komunikasyon. Ipinagmamalaki ng mga Zamboangueño ang kanilang wika dahil ito ay simbolo ng kanilang makulay na kasaysayan at kultura.
            </p>
        </div>
        <a href="quizgame.php?category=Chavacano" class="next-btn">Take a Quiz</a>
    </div>
</div>
<div id="triviaModal12" class="modal">
    <div class="modal-content">
        <span class="close" data-modal="#triviaModal12">&times;</span>
        <h2>Trivia Time: Ybanag!</h2>
        <div class="trivia-content">
            <div class="trivia-left">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/320px-Flag_of_the_Philippines.svg.png" alt="Philippine Flag" class="flag-image">
            </div>
            <p class="trivia-text">
                 Alam mo ba? Ang Ybanag ay isa sa mga pangunahing wika ng Cagayan Valley, partikular sa mga probinsya ng Cagayan at Isabela. Ang wika na ito ay bahagi ng malaking Austronesian language family. Ang Ybanag ay ginagamit sa pang-araw-araw na komunikasyon, sa mga panitikan, at sa iba't ibang tradisyon at seremonya ng mga Ybanag. Kilala ang Ybanag sa kanilang masiglang pamumuhay at makulay na kultura na naipapahayag sa kanilang wika. Ang mga Ybanag ay ipinagmamalaki ang kanilang wika dahil ito ay sumasalamin sa kanilang mayamang kasaysayan at kultura.
            </p>
        </div>
        <a href="quizgame.php?category=Ybanag" class="next-btn">Take a Quiz</a>
    </div>
</div>
<div id="triviaModal13" class="modal">
    <div class="modal-content">
        <span class="close" data-modal="#triviaModal13">&times;</span>
        <h2>Trivia Time: Ivatan!</h2>
        <div class="trivia-content">
            <div class="trivia-left">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/320px-Flag_of_the_Philippines.svg.png" alt="Philippine Flag" class="flag-image">
            </div>
            <p class="trivia-text">
             Alam mo ba? Ang Ivatan ay isa sa mga pangunahing wika ng Batanes, ang pinakahilagang probinsya ng Pilipinas. Ang Ivatan ay bahagi ng malaking Austronesian language family. Kilala ang mga Ivatan sa kanilang kakaibang kultura at pamumuhay na nag-aadapt sa matitinding panahon sa kanilang isla. Ang wika na ito ay ginagamit sa pang-araw-araw na komunikasyon, mga panitikan, at sa mga tradisyonal na seremonya. Ang mga Ivatan ay ipinagmamalaki ang kanilang wika dahil ito ay sumasalamin sa kanilang pagkakakilanlan at kasaysayan. Ang Ivatan ay isang mahalagang bahagi ng kanilang kultura at nagbibigay-buhay sa kanilang mayamang tradisyon.
            </p>
        </div>
        <a href="quizgame.php?category=Ivatan" class="next-btn">Take a Quiz</a>
    </div>
</div>
<div id="triviaModal14" class="modal">
    <div class="modal-content">
        <span class="close" data-modal="#triviaModal14">&times;</span>
        <h2>Trivia Time: Sambal!</h2>
        <div class="trivia-content">
            <div class="trivia-left">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/320px-Flag_of_the_Philippines.svg.png" alt="Philippine Flag" class="flag-image">
            </div>
            <p class="trivia-text">
            Alam mo ba? Ang Sambal ay isa sa mga pangunahing wika ng Zambales at ilang bahagi ng Pangasinan sa Luzon. Ang Sambal ay bahagi ng malaking Austronesian language family. Ginagamit ito sa pang-araw-araw na komunikasyon, panitikan, at sa iba't ibang tradisyon at seremonya ng mga Sambal. Kilala ang Sambal sa kanilang matatag na pamumuhay at mayamang kultura na naipapahayag sa kanilang wika. Ang mga Sambal ay ipinagmamalaki ang kanilang wika dahil ito ay sumasalamin sa kanilang mayamang kasaysayan at kultura.
            </p>
        </div>
        <a href="quizgame.php?category=Sambal" class="next-btn">Take a Quiz</a>
    </div>
</div>
<div id="triviaModal15" class="modal">
    <div class="modal-content">
        <span class="close" data-modal="#triviaModal15">&times;</span>
        <h2>Trivia Time: Aklanon!</h2>
        <div class="trivia-content">
            <div class="trivia-left">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/320px-Flag_of_the_Philippines.svg.png" alt="Philippine Flag" class="flag-image">
            </div>
            <p class="trivia-text">
                Alam mo ba? Ang Aklanon ay isa sa mga pangunahing wika ng Aklan Province sa Panay Island, sa Western Visayas. Ang Aklanon ay bahagi ng malaking Austronesian language family. Ang wika na ito ay kilala sa kanilang natatanging tunog ng "l" sa halip na "r," isang katangian na nagbibigay ng kakaibang himig sa kanilang pagsasalita.Ipinagmamalaki ng mga Aklanon ang kanilang wika dahil ito ay sumasalamin sa kanilang mayamang kasaysayan at kultura. Ang Aklan ay kilala rin sa kanilang makulay na Ati-Atihan Festival, isang pagdiriwang na nagpapakita ng kanilang malalim na paggalang sa kanilang kasaysayan at tradisyon.
            </p>
        </div>
        <a href="quizgame.php?category=Aklanon" class="next-btn">Take a Quiz</a>
    </div>
</div>
<div id="triviaModal16" class="modal">
        <div class="modal-content">
            <span class="close" data-modal="#triviaModal16">&times;</span>
            <h2>Trivia Time: Kinaray-a!</h2>
            <div class="trivia-content">
            <div class="trivia-left">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/320px-Flag_of_the_Philippines.svg.png" alt="Philippine Flag" class="flag-image">
            </div>
            <p class="trivia-text">
            Alam mo ba? Ang Kinaray-a ay isa sa mga pangunahing wika ng Antique Province at ilang bahagi ng Panay Island sa Western Visayas. Ang Kinaray-a ay bahagi ng malaking Austronesian language family. Ang wika na ito ay ginagamit sa pang-araw-araw na komunikasyon, sa mga panitikan, at sa iba't ibang tradisyon at seremonya. Ang Kinaray-a ay kilala sa kanilang mayamang kasaysayan at kultura na naipapahayag sa kanilang wika. Ipinagmamalaki ng mga Kinaray-a ang kanilang wika dahil ito ay sumasalamin sa kanilang pagkakakilanlan at makulay na kasaysayan.
            </p>
        </div>
            <a href="quizgame.php?category=Kinaray-a" class="next-btn">Take a Quiz</a>
        </div>
    </div>
    <div id="triviaModal17" class="modal">
        <div class="modal-content">
            <span class="close" data-modal="#triviaModal17">&times;</span>
            <h2>Trivia Time: Yakan!</h2>
            <div class="trivia-content">
            <div class="trivia-left">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/320px-Flag_of_the_Philippines.svg.png" alt="Philippine Flag" class="flag-image">
            </div>
            <p class="trivia-text">
            Alam mo ba? Ang Yakan ay isa sa mga pangunahing wika ng Basilan, isang isla sa Mindanao. Ang Yakan ay bahagi ng malaking Austronesian language family. Kilala ang mga Yakan sa kanilang natatanging kultura at mga tradisyon na nag-uugat sa kanilang kasaysayan at relihiyon. Ang wika na ito ay ginagamit sa pang-araw-araw na komunikasyon, panitikan, at sa iba't ibang tradisyon at seremonya. Ang mga Yakan ay ipinagmamalaki ang kanilang wika dahil ito ay sumasalamin sa kanilang pagkakakilanlan at mayamang kasaysayan. Kilala rin ang mga Yakan sa kanilang masalimuot at makukulay na tradisyonal na habi at kasuotan.
            </p>
        </div>
            <a href="quizgame.php?category=Yakan" class="next-btn">Take a Quiz</a>
        </div>
    </div>
    <div id="triviaModal18" class="modal">
        <div class="modal-content">
            <span class="close" data-modal="#triviaModal18">&times;</span>
            <h2>Trivia Time: Surigaonon!</h2>
            <div class="trivia-content">
            <div class="trivia-left">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/320px-Flag_of_the_Philippines.svg.png" alt="Philippine Flag" class="flag-image">
            </div>
            <p class="trivia-text">
            Alam mo ba? Ang Surigaonon ay isa sa mga pangunahing wika ng Surigao del Norte at Surigao del Sur sa Mindanao. Ang Surigaonon ay bahagi ng malaking Austronesian language family. Ginagamit ito sa pang-araw-araw na komunikasyon, sa mga panitikan, at sa iba't ibang tradisyon at seremonya ng mga Surigaonon. Kilala ang Surigaonon sa kanilang masayahing pamumuhay at mayamang kultura na naipapahayag sa kanilang wika. Ang mga Surigaonon ay ipinagmamalaki ang kanilang wika dahil ito ay sumasalamin sa kanilang mayamang kasaysayan at kultura.
            </p>
        </div>
            <a href="quizgame.php?category=Surigaonon" class="next-btn">Take Quiz</a>
        </div>
    </div>
    
    

    <script src="js/script.js" defer></script>
</body>
</html>
<style>
/* Navigation Styles */
/* Navigation Styles */
.nav {
    background-color: transparent;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
}

.nav img {
    height: 100px;
    width: auto;
    margin-right: 20px;
}

.nav a {
    color: white;
    text-decoration: none;
    margin-right: 10px;
    font-size: 20px;
    display: flex;
    align-items: center;
}

.nav a i {
    margin-right: 5px;
    font-size: 18px;
}

.nav a:hover {
    color: #FFD700;
}

.nav a:last-child {
    margin-right: 0;
}

/* Circle Container Styles */
.circle-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 10px;
}

.circle-container h1 {
    text-align: center;
    padding-bottom: 20px;
    margin-bottom: 10px;
    color: white;
    letter-spacing: 2px;
    line-height: 1.2;
    text-transform: uppercase;
    font-size: 25px;
}

.circle-row {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
    margin-bottom: 15px;
}

.circle {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: brown;
    border-radius: 50%;
    height: 90px;
    width: 190px;
    color: white;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    border: 4px solid black; /* Black border */
}

.circle:hover {
    background-color: #FFD700; /* Change background color to gold */
    color: black; /* Change text color to black */
    transform: scale(1.1); /* Slightly increase the size */
    transition: all 0.3s ease; /* Smooth transition effect */
}

.circle p {
    margin: 0;
    font-size: 20px;
}

/* Modal Styles */
@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeOut {
    from {opacity: 1;}
    to {opacity: 0;}
}

.modal {
    display: none; /* Hidden by default */
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: hidden; /* Prevent scrolling */
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
    width: 50%;
    color: white;
    text-align: center;
    opacity: 1;
    overflow: hidden; /* Prevent scrolling */
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

h2 {
    font-size: 25px;
    margin-bottom: 20px; /* Adds space below the heading */
}

.trivia-content {
    display: flex;
    align-items: flex-start;
    text-align: left;
}

.trivia-content .flag-image {
    margin-top: 40px;
    width: 200px;
    height: 140px;
}

.trivia-content .trivia-text {
    margin: 20px;
    font-size: 18px;
    line-height: 1.5;
    border-left: 4px solid #FFD700;
    padding-left: 10px;
}

.next-btn {
    padding: 8px 20px;
      font-size: 1em;
      cursor: pointer;
      background-color: #242526;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      color: #e4e6eb;
      border: none;
      border-radius: 15px;
      transition: background-color 0.3s;
      border: 1px solid white;
    }
.next-btn {
      background-color:   #242526;
    }

/* Responsive Styles */
@media screen and (max-width: 768px) {
    .nav {
        flex-direction: column;
        text-align: center;
    }

    .nav img {
        margin-bottom: 10px;
    }

    .circle {
        width: 150px;
        height: 75px;
    }
}

@media screen and (max-width: 480px) {
    .circle {
        width: 120px;
        height: 60px;
    }

    .circle-container h1 {
        font-size: 20px;
    }

    .trivia-content .flag-image {
        width: 150px;
        height: 100px;
    }

    .trivia-content .trivia-text {
        font-size: 16px;
    }
}

</style>
