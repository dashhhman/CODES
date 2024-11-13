<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="website icon"type="png" href="images/WEBLOGO.png"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/feedback.css">
    <title>Feedback</title>
</head>
<body>
    <div class="banner">
            <div id="successModal" class="modal" style="display:none;">
                <div class="modal-content">
                    <h4>Submission Successful</h4>
                    <p>Your feedback has been submitted successfully.</p>
                </div>
                <div class="modal-footer">
                <button class="modal-close-btn"><i class='bx bx-x'></i> </button>
                </div>
            </div>
            <div class="navbar">
                    <img src="images/FINAL WEBLINGUA.png" class="logo" href="homepage.php">
                        <ul>
                            <li><a href="homepage.php"><b>Home</b></a></li>
                            <li><a href="index.php"><b>Translator</b></a></li>
                            <li><a href="addtodictionary.php"><b>Add Dictionary</b></a></li>
                            <li><a href="index1.php"><b>Fun Quiz</b></a></li>  
                                  
                        </ul>
                </div>
            <form action="feedadd.php" method="post" class="fd">
            <div class="maincon"> 
                
                <div class="glassmorphism">
                    <h1>Send us your Feedback..</h1>
                    <div class="translator">
                        
                        <div class="box">
                            <h2>Name:</h2>
                            <div class="mess">
                                <textarea maxlength="5000" name="fname"class="textmess" placeholder="Enter Your Name.."></textarea>
                                <!-- Copy icon -->
                            </div>
                        </div>
                        <div class="box2">
                            <h2>Email:</h2>
                            <div class="mess2">  
                                <textarea maxlength="5000" name= "ems"class="textmess2" placeholder="Enter Your Email Address.."></textarea>
                                <div class="icon2">   
                                </div>
                            </div>
                        </div>
                    
                        <div class="contranslated">
                            <h2>Description:</h2>
                            <div class="mess">
                                <textarea name="conc" class="translated" placeholder="Your Concern"></textarea>  
                            
                            </div>
                        </div> 
                        <button type="submit" class="submit-btn" id="transbut" name="transbut"><span></span>Submit</button>                            
                    </div>
                </div>
            </div>
            </form>
   </div>
</body>

</html>