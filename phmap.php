<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="images/WEBLOGO.png" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <title>WebLingua</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>
    <style>
        .img-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px;
            height: auto;
        }
        .details-container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }
        .info-box {
            margin-left: 20px;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 300px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .info-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
        }
        .info-box h3 {
            margin: 0;
            font-size: 22px;
            color: #333;
        }
        .info-box p, .info-box ul {
            margin: 10px 0;
            font-size: 16px;
            color: #555;
        }
        .info-box ul {
            list-style: none;
            padding: 0;
        }
        .info-box ul li {
            margin: 10px 0;
        }
        .info-box ul li a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }
        .info-box ul li a:hover {
            text-decoration: underline;
        }
        /* Changing SVG color */
        .img-container img {
            filter: hue-rotate(90deg) saturate(150%);
        }
    </style>
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="images/FINAL WEBLINGUA.png" class="logo" href="homepage.php">
            <ul>
                <li><a href="homepage.php" style="color: #FFD700;"><b>Home</b></a></li>
                <li><a href="index.php" style="color: #FFD700;"><b>Translator</b></a></li>
                <li><a href="addtodictionary.php" style="color: #FFD700;"><b>Add to Dictionary</b></a></li>
                <li><a href="index1.php" style="color: #FFD700;"><b>Fun Quiz</b></a></li>   
            </ul>
        </div>
        
        <div class="maincon">
            <div class="details-container">
                <div class="img-container">
                    <!-- Ilagay ang path ng iyong image ng mapa ng Pilipinas sa src attribute -->
                    <img src="images/philippine-map.svg" alt="Mapa ng Pilipinas" width="500" height="600">
                </div>
                <div class="info-box">
                    <h3>Languages in the Philippines</h3>
                    <p>The Philippines is home to over 175 languages and dialects. Some of the major languages include:</p>
                    <ul>
                        <li><a href="#">Tagalog</a>: The basis of the national language, Filipino.</li>
                        <li><a href="#">Cebuano</a>: Widely spoken in the Visayas and Mindanao regions.</li>
                        <li><a href="#">Ilocano</a>: Predominantly used in Northern Luzon.</li>
                        <li><a href="#">Hiligaynon</a>: Also known as Ilonggo, spoken in Western Visayas.</li>
                        <li><a href="#">Bicolano</a>: Spoken in the Bicol region.</li>
                    </ul>
                    <p>Each language has its own unique cultural and historical significance.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<style>
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
</style>
