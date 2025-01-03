<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="website icon" type="png" href="images/WEBLOGO.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminstyle.css">
    <title>Log in</title>
    <style>
        /* Add this to your existing CSS or create a new <style> tag */
        .upper-left-button {
            position: absolute;
            top: 20px; /* Adjust as needed */
            left: 20px; /* Adjust as needed */
            z-index: 10; /* Ensure the button is on top */
            padding: 7px 6px; 
            background-color: #001E1E;/* Green */
            font-size: 13px;
            color: white;
            border: none;
            border-radius: 15px; 
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border: 0.5px solid white;

        }

        .upper-left-button:hover {
            background-color: #45a049; /* Darker green on hover */
        }
    </style>
</head>
<body>

    <a href="homepage.php" class="upper-left-button">Back</a> 

    <div class="glassmorphism">
        <div class="logos">
            <img src="images/FINAL WEBLINGUA.PNG" alt="logo" width="300">
        </div>

        <div class="con">
            <form action="alog.php" onsubmit="return invalid()" method="POST">
                <div class="tbox">
                    <input type="text" name="user" id="user" placeholder="Username">
                </div>
                <div class="tbox">
                    <input type="password" name="pass" id="pass" placeholder="Password" required>
                </div>

                <button type="submit" id="submit" name="submit" class="but">Log in</button>
            </form>
        </div>
    </div>

</body>
</html>