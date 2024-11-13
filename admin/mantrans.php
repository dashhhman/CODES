<?php
require('../config/config.php');
$sql = "select * from translation where Status='Accepted'";
$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="website icon" type="png" href="images/WEBLOGO.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/feed.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <title>Manage Translation</title>
</head>
<body>

<nav>
      <div class="sidebar">
        <div class="logo">
          <img src="../images/FINFINFIN.png" alt="logo">
          <h1></h1>
        </div>
        <ul class="mainmenu">
          <li ><a href="home.php" >
            <i class="fas fa-user"></i>
            <span class="nav-item">Dashboard</span>
          </a>
          </li>
          
          <li class="active"><a href="mantrans.php">
                <i class="fas fa-tasks"></i>
                <span class="nav-item">Manage Translation </span>
            </a>
          </li>

          <li><a href="translationrequest.php">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">Translation Request</span>
          </a>
          </li>
          <li ><a href="adminlanguage.php">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">Languages</span>
          </a>
          </li>
          <li ><a href="feedbackadmin.php">
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
        <h1 class="maintitle"> Manage Translation</h1>
        </div>
        
    </div>

    <div class="container">
        <div class="row">
            <div class="card">
                <div class="headcard">
                  <h2 class="dbtitle">Translation</h2>
                  <button type="submit" class="adds" id="addict" name="addict"><a href="addadmin.php">Add to Dictionary</a> </button>
                </div>

                <div class="tablehey">
                
                  <table class="column">
                      <thead class="tablehead">  
                          <th> Word </th>
                          <th> Language </th>
                          <th> Translated </th>
                          <th> Language </th>  
                          <th> Description </th>
                          <th> Action </th>
                          <th>  </th>      
                      </thead>
                      <tbody class="tablehey scrollable-table">
                      <tr>
                          <?php
                              while($row = mysqli_fetch_assoc($result)) {   
                          ?>
                              <td><?php echo $row['Word'];?></td>
                              <td><?php echo $row['Language1'];?></td>
                              <td><?php echo $row['Translated'];?></td>
                              <td><?php echo $row['Language2'];?></td>
                              <td><?php echo $row['Descriptions'];?></td>
                              <td><a href="#" onclick="document.getElementById('editModal').style.display='block'" class="but">Edit</a></td>
                              <td><a href="#" onclick="confirmDelete('<?php echo $row['Word']; ?>', '<?php echo $row['Status']; ?>')" class="but">Delete</a></td>
                            </tr>
                          <?php
                            }
                          ?>
                      </tbody>
                  </table>
                </div>
            </div>
                    
            


            
        </div>
<script>
          function confirmDelete(word, status) {
    if (confirm("Are you sure you want to delete this entry?")) {
        window.location.href = "delete.php?Word=" + word + "&Status=" + status;
    }
}


// Get the modal
var modal = document.getElementById("editModal");

// Get the button that opens the modal
var btn = document.getElementById("editModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var span = document.getElementsByClassName("close")[0];

span.onclick = function() {
    modal.style.display = "none";
}
</script>
</body>
