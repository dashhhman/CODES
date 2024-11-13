<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="website icon" type="png" href="images/WEBLOGO.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminstyle.css">
    <title>Log in</title>
</head>
<body>

    <div class="glassmorphism">
        <div class="logos">
            <img src="images/FINAL WEBLINGUA.PNG" alt="logo" width="300">
        </div>

        <div class="con">
            <form action="userlog.php" onsubmit="return invalid()" method="POST">
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