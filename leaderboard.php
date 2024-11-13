<?php 
require('config/config.php');

if (isset($_GET['category'])) {
    $category = $_GET['category'];

    if ($category == 'all') {
        $sql = "SELECT `username`, `score` FROM `tbl_leaderboard` ORDER BY `score` DESC LIMIT 8"; // Limit to top 8
    } else {
        $sql = "SELECT `username`, `score` FROM `tbl_leaderboard` WHERE `category` = ? ORDER BY `score` DESC LIMIT 8"; // Limit to top 5 for specific category
    }

    $stmt = $conn->prepare($sql);
    if ($category != 'all') {
        $stmt->bind_param("s", $category);
    }
    $stmt->execute();
    $result = $stmt->get_result();

    $rank = 1; 
    $output = "";

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $output .= "<tr>";
            $output .= "<td>" . $rank . "</td>";
            $output .= "<td>" . htmlspecialchars($row["username"]) . "</td>";
            $output .= "<td>" . htmlspecialchars($row["score"]) . "</td>";
            $output .= "</tr>";
            $rank++; 
        }
    } else {
        $output .= "<tr><td colspan='3'>No scores available for this category.</td></tr>";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    <style>
    * {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif, sans-serif;
}
    table {
      width: 100%;
      max-width: 1250px;
      margin: 5px auto;
      border-collapse: collapse;
      background-color: #ffffff;
      border-radius: 15px;
      font-size: 15px;
      font-weight: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            word-wrap: break-word;
        }
        th {
            background-color:brown;
            color: white;
        }
        td {
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        label {
            color: white;
            font-weight: 700;
        }
    @media (max-width: 600px) {
      th, td {
        padding: 10px;
        font-size: 0.9em;
        font-weight: 20px;
      }
      .nav {
        flex-direction: column;
        gap: 10px;
      }
    }
    .category-container { 
      display: flex; /* Use flexbox for better alignment */
      justify-content: center; /* Center the content horizontally */
      align-items: center; /* Center the content vertically*/
      margin-top: -10px;
    }

    /* Style the select element */
    .category-container select {
      padding: 5px;
      border: none; 
      border-radius: 15px;
      font-size: px;
      margin-left: 10px;
      width: 80px;    
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
</head>
<body>
<div class="banner">
    <div class="navbar">
      <img src="images/FINAL WEBLINGUA.png" class="logo" href="homepage.php">
      <ul>
        <li><a href="homepage.php"><b>Home</b></a></li>
        <li><a href="addtodictionary.php"><b>Add to Dictionary</b></a></li>
        <li><a href="index1.php"><b>Trivia</b></a></li>
      </ul>
    </div>
    
    <div class="category-container"> 
      <label for="edit_category">Category:</label>
      <select id="select_category" name="category" required>
        <option value="all">All</option> 
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
        <option value="Chavacano">Chavacano</option>   
        <option value="Ybanag">Ybanag</option>
        <option value="Ivatan">Ivatan</option>
      </select>
    </div>

    <table id="leaderboard_table">
      <thead>
        <tr>
          <th>Rank</th>
          <th>Username</th>
          <th>Score</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
</div>
<script>
$(document).ready(function() {
    function loadLeaderboard(category) {
        $.ajax({
            url: '',
            type: 'GET',
            data: { category: category },
            success: function(response) {
                $('#leaderboard_table tbody').html(response);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("AJAX Error: ", textStatus, errorThrown);
            }
        });
    }

    loadLeaderboard('all'); 

    $('#edit_category').on('change', function() {
        var selectedCategory = $(this).val();
        loadLeaderboard(selectedCategory); 
    });
});
</script>

</body>
</html>
