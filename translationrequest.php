<?php
require_once('config/config.php');
$sql = "select * from translation where Status='Pending'";
$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" type="png" href="images/WEBLOGO.png"/>
    <link rel="stylesheet" href="css/feed.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <title>Home</title>
</head>
<style>
  
  body{
            background-image: radial-gradient(circle, #0b0c10, #121419, #171b21, #1b212a, #1f2833) ;
        }
        /* Sidebar styling */
        .sidebar {
        position: sticky;
        top: 0;
        left: 0;
        bottom: 0;
        width: 100px;
        height: 100vh;
        padding: 0 1.7rem;
        color: #66fcf1;
        overflow: hidden;
        transition: all 0.5s linear;
        background-image: radial-gradient(circle, #0b0c10, #121419, #171b21, #1b212a, #1f2833);
    }

    .sidebar:hover {
        width: 350px;
        transition: 0.5s;
    }
    .glassmorphism2 {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    box-shadow: 5px 5px 12px #00000035;
    border-top: 1px solid #ffffff75;
    border-left: 1.2px solid #ffffff75;
    backdrop-filter: blur(1px);
    border-radius: 20px;
    padding: 10px 2rem;
    margin-bottom: 1rem;
}

.headertitle {
    color: #66fcf1;
    font-size: 20px;
}
.glassmorphism {
    padding: 2rem;
    box-shadow: 5px 5px 12px #00000035;
    border-top: 1px solid #ffffff75;
    border-left: 1.2px solid #ffffff75;
    backdrop-filter: blur(1px);
    border-radius: 10px;
    width: 100%;
    height: auto; /* Allows container height to adjust to content */
    overflow: auto; /* Enables scrolling if content overflows */
}

.maincontent {
    background: rgb(11, 12, 16);
    background: radial-gradient(circle, rgba(11, 12, 16, 1) 0%, rgba(69, 162, 158, 1) 0%, rgba(31, 40, 51, 1) 78%, rgba(31, 40, 51, 1) 96%);
    position: relative;
    width: 100%;
    padding: 1rem;
}

        .logout {
            color: #ff6b6b;
        }

        /* Table and button styling */
        main {
            margin-left: px;
            padding: 20px;
        }
        h2 {
            color: white;
        }
        .add-button {
            display: inline-block;
            margin-bottom: 15px;
            padding: 10px 20px;
            background-color: #001E1E;
            color: white;
            text-decoration: none;
            left: 10px;
            border-radius: 15px;
            transition: background-color 0.3s;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border: 0.5px solid white;
        }
        .add-button:hover {
            background-color: brown;
        }
        table {
        width: 100%;
        border-collapse: collapse;
        background-color: rgba(249, 249, 249, 0.848);;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        max-height: 500px; /* Optional: limits table height */
        overflow-y: auto; /* Optional: scrolls table if it exceeds max height */
        font-weight: bold;
        }
        
    .dbtitle {
        background:  #001E1E;
        color: #fff;
        padding: 15px 15px;
        text-align: center;
        border: 2px solid white;
        border-radius: 5px;
        }

        table thead {
            background-color:#001E1E;
            color: white;
            border: 0.5px solid white;
        }
        table th, table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        table th {
            font-weight: bold;
        }
        table tbody tr:hover {
            background-color: #f1f1f1;
        }
        table tbody tr:last-child td {
            border-bottom: none;
        }
        .no-data {
            text-align: center;
            padding: 15px;
            color: #888;
        }

        /* Modal styling */
        .modal {
            display: none; /* Hidden by default */
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .modal-content {
            background-color: white;
            margin: 10% auto;
            padding: 20px;
            border-radius: 8px;
            width: 80%;
            max-width: 500px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
        .close:hover {
            color: #000;
        }
        .form-container input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-container button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
<body>
  

<nav>
      <div class="sidebar">
        <div class="logo">
          <img src="images/FINFINFIN.png" alt="logo">
          <h1></h1>
        </div>
        <ul class="mainmenu">
          <li ><a href="dashboard.php" >
            <i class="fas fa-user"></i>
            <span class="nav-item">Dashboard</span>
          </a>
          </li>
          
          <li class="active"><a href="translationrequest.php">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">Translation Request</span>
          </a>
          </li>
          <li><a href="manage_questioner.php   ">
                <i class="fas fa-star"></i>
                <span class="nav-item">Manage Questionnaire</span>
            </a>
            </li>
          <li><a href="feedbackadmin.php">
            <i class="fas fa-comments"></i>
            <span class="nav-item">Feedback</span>
          </a>
          </li>

          <li><a href="index.php" class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Logout</span>
          </a>
          </li>
        </ul>
      </div>
    </nav>

<div class="maincontent">
    <div class="header">
        <div class="headertitle">
            <span> Manage Proposed Translation Request</span>
        </div>
        <div class="userinfo">

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="card">
                <div class="headcard">
                  <h2 class="dbtitle">Translation Proposal</h2>
                </div>

                <div class="tablehey">
                  <table class="column">
                  <thead>
                        <tr>
                          <th> Propose Word </th>
                          <th> Propose Translation </th>
                          <th> Translation </th>
                          <th> Language Translation </th>
                          <th> Description </th>
                          <th class="act"> Action </th>  
                          <th></th>  
                        </tr>
                    </thead>
                      <tr>
                          <?php
                              while($row = mysqli_fetch_assoc($result)) {   
                          ?>
                              <td><?php echo $row['Word'];?></td>
                              <td><?php echo $row['Language1'];?></td>
                              <td><?php echo $row['Translated'];?></td>
                              <td><?php echo $row['Language2'];?></td>
                              <td><?php echo $row['Descriptions'];?></td>
                              <td class="acts"><a href="update.php?Word=<?php echo urlencode($row['Word']); 
                              ?>&Translated=<?php echo urlencode($row['Translated']); 
                              ?>" class="buts">Accept</a>
                              <td><a href="#" onclick="confirmDelete('<?php echo $row['Word']; ?>', '<?php echo $row['Status']; ?>')" class="but">Delete</a></td>
                      </tr>
                          <?php
                            }
                          ?>
                      
                  </table>
                </div>
            </div>
        </div>
    </div>
    
</div>
  <script>
      
    
          function confirmDelete(word, status) {
    if (confirm("Are you sure you want to delete this entry?")) {
        window.location.href = "deletereq.php?Word=" + word + "&Status=" + status;
    }
}


              document.querySelectorAll('.buts').forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault(); // Prevent the default link behavior
                    const url = this.href; // Get the href attribute of the clicked link

                    fetch(url)
                    .then(response => {
                        if(response.ok) {
                            return response.json(); // Assuming the server responds with JSON
                        }
                        throw new Error('Network response was not ok.');
                    })
                    .then(json => {
                        this.textContent = 'Accepted'; // Change button text to Accepted
                        this.style.backgroundColor = "#4CAF50"; // Change background color to green
                        this.classList.remove('buts'); // Optionally remove the class if no further changes are allowed
                    })
                    .catch(error => console.error('Error:', error));
                });
            });
  </script>
</body>
