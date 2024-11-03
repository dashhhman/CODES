<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="website icon" type="png" href="images/WEBLOGO.png"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/addtodictionary.css">
    <title>Add to Dictionary</title>
</head>
<body>
        <div class="banner">
    
                <div class="navbar">
                    <img src="images/FINAL WEBLINGUA.png" class="logo" href="homepage.php">
                        <ul>
                            <li><a href="homepage.php"><b>Home</b></a></li>
                            <li><a href="index.php"><b>Translator</b></a></li>
                            <li><a href="trivia.php"><b>Trivia</b></a></li>         
                        </ul>
                </div>
           
            <form action="addtodicfunction.php" method="post" class="dict">
            <div class="maincon"> 
                
                <div class="glassmorphism">
                    <h1>Add to Dictionary</h1>
                    <div class="translator">
                        <ul class="item">
                            <li>           
                                <select class="select1" name="langwan">
                                    <option value="Tagalog">Tagalog</option>
                                
                                </select>
                            </li>
                        
                            <li>
                                <select class="select2" name="langtu">
                                        <option value="Cebuano">Cebuano</option>
                                        <option value="Bicol">Bicol</option>
                                        <option value="Hiligaynon">Hiligaynon</option>
                                </select>
                            </li>
                        </ul>
                        
                
                        
                        <div class="box">
                            <div class="mess">
                                <textarea maxlength="5000" name="words"class="textmess" placeholder="Write down.."></textarea>
                                
                            </div>
                        </div>
                        <div class="box2">
                            <div class="mess2">
                                <textarea maxlength="5000" name="translated"class="textmess2" placeholder="Write downn.."></textarea>
                                
                            </div>
                        </div>
                    
                        <button type="submit" class="submit-btn" id="transbut" name="transbut"><span></span>Add to Dictionary</button>
                    </div>
                </div>
            </form>                      
        </div>
</body>

</html>
