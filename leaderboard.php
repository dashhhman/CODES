<?php 
require('config/config.php');

if (isset($_GET['category'])) {
    $category = $_GET['category'];

    if ($category == 'all') {
        $sql = "SELECT `username`, `score`, `category`, `date_play` FROM (
                    SELECT `username`, `score`, `category`, `date_play`,
                           ROW_NUMBER() OVER (PARTITION BY `category` ORDER BY `score` DESC) as rank
                    FROM `tbl_leaderboard`
                ) as ranked
                WHERE rank = 1
                ORDER BY `category`, `score` DESC";
    } else {
        $sql = "SELECT `username`, `score`, `category`, `date_play` FROM `tbl_leaderboard` WHERE `category` = ? ORDER BY `score` DESC LIMIT 8";
    }

    $stmt = $conn->prepare($sql);
    if ($category != 'all') {
        $stmt->bind_param("s", $category);
    }
    $stmt->execute();
    $result = $stmt->get_result();

    $output = "";
    $currentCategory = "";
    $rank = 1;

    if ($result->num_rows > 0) {
        $categoryRanks = []; // Array to keep track of ranks per category

        while ($row = $result->fetch_assoc()) {
            if (!isset($categoryRanks[$row["category"]])) {
                $categoryRanks[$row["category"]] = 1; // Initialize rank for new category
            }

            if ($categoryRanks[$row["category"]] <= 8) { // Limit to top 8
                $output .= "<tr>";
                $output .= "<td>" . $categoryRanks[$row["category"]] . "</td>";
                $output .= "<td>" . htmlspecialchars($row["username"]) . "</td>";
                $output .= "<td>" . htmlspecialchars($row["score"]) . "</td>";
                $output .= "<td>" . htmlspecialchars($row["category"]) . "</td>";
                $output .= "<td>" . htmlspecialchars($row["date_play"]) . "</td>";
                $output .= "</tr>";

                $categoryRanks[$row["category"]]++; // Increment rank for category
            }
        }
    } else {
        $output .= "<tr><td colspan='5'>No scores available for this category.</td></tr>";
    }

    echo $output; 
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="images/WEBLOGO.png" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/leaderboard.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
</head>
<body>
   <div class="banner">
        <div class="navbar">
            <img src="images/FINAL WEBLINGUA.png" class="logo" alt="Logo">
            <span class="toggle-menu" id="toggle-menu"><i class='bx bx-menu'></i></span>
            <ul id="nav-links">
                <li><a href="homepage.php"><b>Home</b></a></li>
                <li><a href="index.php"><b>Translator</b></a></li>
                <li><a href="addtodictionary.php"><b>Add to Dictionary</b></a></li>
                <li><a href="index1.php"><b>Fun Quiz</b></a></li>
                <span class="close-menu" id="close-menu"><i class='bx bx-x'></i></span>
            </ul>
        </div>

        
        <div class="category-container"> 
            <label for="select_category">Category:</label>
            <select id="select_category" name="category" required>
                <option value="all"> All Rank #1</option> 
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
                <option value="Chabacano">Chabacano</option>   
                <option value="Ybanag">Ybanag</option>
                <option value="Ivatan">Ivatan</option>
                <option value="Surigaonon">Surigaonon</option>
                <option value="Sambal">Sambal</option>
                <option value="Aklanon">Aklanon</option>
            </select>
        </div>

        <table id="leaderboard_table">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Username</th>
                    <th>Score</th>
                    <th>Language</th>
                    <th>Date Played</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
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
        $(document).ready(function() {
        function loadLeaderboard(category) {
            $.ajax({
                url: 'leaderboard.php',
                type: 'GET',
                data: { category: category },
                success: function(response) {
                    $('#leaderboard_table tbody').html(response);
                    applyFadeIn(); // Apply fade-in animation after loading data
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("AJAX Error: ", textStatus, errorThrown);
                }
            });
        }

        function applyFadeIn() {
            $('#leaderboard_table tbody tr').addClass('fade-in');
        }

        loadLeaderboard('all'); 

        $('#select_category').on('change', function() {
            var selectedCategory = $(this).val();
            loadLeaderboard(selectedCategory); 
        });
    });
</script>

</body>
</html>
