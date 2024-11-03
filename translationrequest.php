<?php
require_once('config/connect.php');
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
<body>

<nav>
      <div class="sidebar">
        <div class="logo">
          <img src="images/FINFINFIN.png" alt="logo">
          <h1></h1>
        </div>
        <ul class="mainmenu">
          <li ><a href="home.php" >
            <i class="fas fa-user"></i>
            <span class="nav-item">Dashboard</span>
          </a>
          </li>
          
          <li><a href="mantrans.php">
                <i class="fas fa-tasks"></i>
                <span class="nav-item">Manage Translation </span>
            </a>
            </li>

          <li class="active"><a href="translationrequest.php">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">Translation Request</span>
          </a>
          </li>
          
          <li><a href="feedbackadmin.php">
            <i class="fas fa-star"></i>
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
            <span> Manage Proposed Translation</span>
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
                      <tr class="tablehead">  
                          <th> Propose Word </th>
                          <th> Propose Translation </th>
                          <th> Translation </th>
                          <th> Language Translation </th>
                          <th> Description </th>
                          <th class="act"> Action </th>  
                          <th></th>  
                      </tr>
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
