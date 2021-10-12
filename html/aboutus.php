<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About Us</title>
	<link rel="stylesheet" href="../css/header.css">
	<link rel="stylesheet" href="../css/form.css">
	<!--Import Icon-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!--Import Other Class-->
    <script src="//code.jquery.com/jquery.min.js"></script>

    <!------------------------Call Nav------------------------>
    <link rel="stylesheet" href="../css/adminnavi.css">
    <link rel="stylesheet" href="../css/usernavi.css">
    <script src="../js/adminnavi.js"></script>
    <script src="../js/usernavi.js"></script>
    <!------------------------Call Nav------------------------>
    
    <!------------------------Call Aunthentication------------------------>
    <script src="../js/userauthentication/login.js"></script>
    <script src="../js/userauthentication/signUp.js"></script>
    <script src="../js/userauthentication/forget.js"></script>
    <script src="../js/userauthentication/logout.js"></script>
    <link rel="stylesheet" href="../css/userauthentication/login.css">
    <link rel="stylesheet" href="../css/userauthentication/signUp.css">
    <link rel="stylesheet" href="../css/userauthentication/forget.css">
    <!------------------------Call Aunthentication------------------------>
    <style>
    .card {
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
    }
    
    .container {
        width:80%;
        height:550px;
        position: relative;
    }

    .image {
        display: block;
        width: 100%;
        height: 100%;
        object-fit:cover;
    }
    
    .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
        width: 100%;
        opacity: 0;
        transition: .5s ease;
        background: linear-gradient(to bottom, #000000 0%, #000066 50%);
    }
    
    .container:hover .overlay {
        opacity: 1;
    }
    
    .text {
        color: white;
        /*font-size: 20px;*/
        float:left;
        /*position: absolute;*/
        margin-top: 250px;
        margin-left:350px;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
    }
    
    .feature {
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        }
        
    .feature:hover{
            transform:scale(1.1);
    }
    
    
    </style>
</head>

<body style="background-color: white;margin: 0;padding: 0;width:500%;max-width:1920px;min-width:480px;margin-left:auto;margin-right:auto;height:100%; overflow-y: auto; overflow-x: hidden;">
	<div class="header"><img src="../images/logo.jpg" alt="Asia Top U Logo">
		<h1>&nbsp Asia University Rankings
		<!------------------------Call Aunthentication------------------------>
		<?php
		    session_start();
            error_reporting(0);
            include("dbconnect.php");
            $email = $_SESSION['email'];
            $password = $_SESSION['password'];
            $position = $_SESSION['position'];
            if (isset($_SESSION["email"])){
             $sqlloaduser = "SELECT * FROM tbl_user WHERE email = '$email' AND password = '$password' ";
                $result = $conn->query($sqlloaduser);
                if ($result->num_rows > 0 && $position == "User") {
                ?>
                <button type="submit" class="logoutbtn" onclick="logOut()"><b>Log Out</b></button>
                <?php
                }
                else if($position == "Admin" && $email=="asiatopu@gmail.com" && $password=="7af2d10b73ab7cd8f603937f7697cb5fe432c7ff"){
                ?>
                <button type="submit" class="logoutbtn" onclick="logOut()"><b>Log Out</b></button>
                <?php    
                }
                else{
                  ?>
                <button type="submit" class="signupbtn" onclick="openSignUpForm()"><b>Sign Up</b></button>
		        <button type="submit" class="loginbtn" onclick="openLoginForm()"><b>Login</b></button>
            <?php  
                }
                ?>
		  
            <?php
            }else{
            ?>
             <button type="submit" class="signupbtn" onclick="openSignUpForm()"><b>Sign Up</b></button>
		<button type="submit" class="loginbtn" onclick="openLoginForm()"><b>Login</b></button>
            <?php
            }
		?>
		<!------------------------Call Aunthentication------------------------>
		</h1>
	</div>
	<div style="height:50px; width:80%">
		<div id="threeline"></div>
    	<!------------------------Check Position------------------------>
		<?php
		    session_start();
            error_reporting(0);
            include("dbconnect.php");
            $email = $_SESSION['email'];
            $password = $_SESSION['password'];
            $position = $_SESSION['position'];
            if (isset($_SESSION["email"])){
             $sqlloaduser = "SELECT * FROM tbl_user WHERE email = '$email' AND password = '$password' ";
                $result = $conn->query($sqlloaduser);
                if ($result->num_rows > 0 && $position == "User") {
                ?>
                <div id="usernavbar"></div>
                <?php
                }
                else if($position == "Admin" && $email=="asiatopu@gmail.com" && $password=="7af2d10b73ab7cd8f603937f7697cb5fe432c7ff"){
                ?>
                <div id="adminnavbar"></div>
                <?php    
                }
                else{
                  ?>
                 <div id="usernavbar2"></div>
            <?php  
                }
                ?>
		  
            <?php
            }else{
            ?>
             <div id="usernavbar2"></div>
            <?php
            }
		?>
	<!------------------------Call Position------------------------>
	    <div style="padding-left: 80px">
		    <span class="asia">Asia</span>
		    <span class="topu" >TOP U</span>
		</div>
		
	</div>
	
	<div><span class="discover">Discover it FOR YOU</span></div><br><br><br>
	<div class="container">
	    <img src="../images/aboutusbg.png" alt="Asia Top U Logo" class="image">
    	    <div class="overlay">
                <div class="text">
                    <img src="../images/Asia Top u.png" alt="Asia Top U Logo" style="float:left;margin-top:150px">
                    <span style="font-family: Tahoma, sans-serif; font-weight:bold;font-size:60px;float:left;margin-top:240px">Asia Top U</span>
                    <br>
                    <span style="font-family: Tahoma, sans-serif; font-weight:bold;font-size:30px;float:left">Discover it for you</span>
                    <div style="position:absolute;margin-left:800px;margin-top:50px;float:left;width:600px; text-align:justify;font-size:20px;font-family: Tahoma, sans-serif">
                        <span>Asia Top U  is the Asia's leading provider of information and analysis regarding the universities.</span><br><br>
                        <span>Our mission is to enable motivated people anywhere in the Asia to meet their potential through educational achievement.</span><br><br>
                        <span>We provide the Asia's university ranking in terms of overall score, faculty student ratio, international students, international faculty, acedemic reputation and employer reputation.</span><br><br>
                        <span>The overall changes and improvement from year to year have been presented in our website to give a clear insight about the current situation of every university in Asia.</span><br><br>
                        <span>The ranking indicators that can be found in Asia Top U will be a good reference for students since it provided a complete information of the universities.</span><br><br>
                        <span>The students can navigate into the official websites of every university through our websites.</span><br>
                
                    </div>
                    <div style="border-left: 3px solid white; height: 500px;margin-left:700px;margin-top:28px;width:10px"></div>
                </div>
            </div>
	    </div>
	</div>
	<br>
	<br>
	<div style="text-align:center;width:80%;font-size:60px; font-family: Tahoma, sans-serif">
	    About the team
	</div>
	<br>
	<div style="width:80%">
    	<div class="feature" style="height:400px;width:200px; margin-left:85px;text-align:center;float:left">
    	    <img src="../images/Pic.png" alt="Asia Top U Logo" style="float:left;height:230px;width:200px">
    	    <span style="font-size:20px">Tan Yi Qing 270607</span>
    	    <br>
    	    <br>
    	    <span style="font-size:20px">22 Years Old</span>
    	    <br>
    	    <br>
    	    <span style="font-size:20px">Software Engineering</span>
    	    <br>
    	    <br>
    	    <span style="font-size:16px">University Utara Malaysia</span>
    	</div>   
    	<div class="feature" style="height:400px;width:200px; margin-left:85px;text-align:center;float:left">
    	    <img src="../images/WFM.jpg" alt="Asia Top U Logo" style="float:left;height:230px;width:200px">
    	    <span style="font-size:20px">Wong Fang Man 271221</span>
    	    <br>
    	    <br>
    	    <span style="font-size:20px">22 Years Old</span>
    	    <br>
    	    <br>
    	    <span style="font-size:20px">Software Engineering</span>
    	    <br>
    	    <br>
    	    <span style="font-size:16px">University Utara Malaysia</span>
    	</div>  
    	<div class="feature" style="height:400px;width:200px; margin-left:85px;text-align:center;float:left">
    	    <img src="../images/TJE.jpg" alt="Asia Top U Logo" style="float:left;height:230px;width:200px">
    	    <span style="font-size:20px">Tan Jia Earn 269509</span>
    	    <br>
    	    <br>
    	    <span style="font-size:20px">22 Years Old</span>
    	    <br>
    	    <br>
    	    <span style="font-size:20px">Software Engineering</span>
    	    <br>
    	    <br>
    	    <span style="font-size:16px">University Utara Malaysia</span>
    	</div>
    	<div class="feature" style="height:400px;width:200px; margin-left:85px;text-align:center;float:left">
    	    <img src="../images/YSM.jpg" alt="Asia Top U Logo" style="float:left;height:230px;width:200px">
    	    <span style="font-size:20px">Yeoh Suan Ming 271490</span>
    	    <br>
    	    <br>
    	    <span style="font-size:20px">22 Years Old</span>
    	    <br>
    	    <br>
    	    <span style="font-size:20px">Software Engineering</span>
    	    <br>
    	    <br>
    	    <span style="font-size:16px">University Utara Malaysia</span>
    	</div> 
    	<div class="feature" style="height:400px;width:200px; margin-left:85px;text-align:center;float:left">
    	    <img src="../images/LXN.png" alt="Asia Top U Logo" style="float:left;height:230px;width:200px">
    	    <span style="font-size:20px">Lee Xiu Niang 272033</span>
    	    <br>
    	    <br>
    	    <span style="font-size:20px">22 Years Old</span>
    	    <br>
    	    <br>
    	    <span style="font-size:20px">Software Engineering</span>
    	    <br>
    	    <br>
    	    <span style="font-size:16px">University Utara Malaysia</span>
    	</div> 
	</div>
	<div style="height:250px"></div>
    <div style="height:300px"></div>
	
	
	<!------------------------Call Aunthentication------------------------>
	<div id="bgmodalLogin"></div>
	<div id="bgmodalSignUp"></div>
	<div id="bgmodalForget"></div>
	<!------------------------Call Aunthentication------------------------>
	
	
</body>
</html>
