<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>contactus</title>
	<link rel="stylesheet" href="../css/header.css">
	<!--Import Icon-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src='https://kit.fontawesome.com/56e1a6fc52.js' crossorigin='anonymous'></script>
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
    .tblheader{
	    background-color:gold;
    }
    
    .card {
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
    }
    
    .feature {
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
    }
    
    .feature:hover{
        transform:scale(1.1);
    }
    
    .graphic {
        transition: 0.3s;
    }
        
    .graphic:hover{
        transform:scale(1.1);
    }
    
    .contactbgcenter {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
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
	<div style="height:50px">
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
                 <div id="usernavbar"></div>
            <?php  
                }
                ?>
		  
            <?php
            }else{
            ?>
             <div id="usernavbar"></div>
            <?php
            }
		?>
	<!------------------------Call Position------------------------>
	<div style="padding-left: 70px">
		<span class="asia">Asia</span>
		<span class="topu" >TOP U</span>
	</div>
	</div>
	
	<div><span class=" discover">Discover it FOR YOU</span></div><br><br><br>

	<div class="contactus" style="margin:0; padding:0; width:80%;">
	    <h1 style="text-align:center;">Contact Us</h1>
	    <p style="text-align:center;">Any question or remarks? Just write us a message!</p>
	</div>    
	
	<div class="contactuscontainer" style="width:80%; height:500px; margin:0px;">
	    <div class="card" style="background-color:white; width:900px; height:450px; margin:0 auto;">
	        <div class="contactinfo" style="background-color:black; height:450px; width:450px; float:left;">
	            <div style="margin:0px 50px;"><br><br>
	            <h2 style="color:gold;">Contact Information</h2>
	            <p style="color:white;">Fill up the form and our Team will get back to you within 24 hours.</p>
	            <p style="color:white;"><i class="fa fa-envelope"></i><b>&nbsp; AsiaTopUmailbox@gmail.com</b></p><br>
	            <img src="../images/contact_us.png" alt="Contactbg" class="contactbgcenter" style="width:200px; height:200px; z-index:-1;">
                </div>
            </div>
            <form name="contactusform" action="../html/contactusemail.php" method="POST">
	        <div class="contactform" style="width:450px; height:450px; margin-left:450px;">
	            <div style="margin:0px 50px;"><br><br>
	            <p style="color:grey;">Full Name</p>
	            <input style="width:350px; height:20px;" type="text" id="fullname" name="fullname" placeholder="Your Full Name." required><br>
	            <p style="color:grey;">Email</p>
	            <input style="width:350px; height:20px;" type="text" id="email" name="email" placeholder="Your Email." required><br><br><br>
	            <p style="color:grey;">Message</p>
	            <input style="width:350px; height:50px;" type="text" id="message" name="message" placeholder="Write Your Message." required><br><br><br>
	            <input style="width:100px; height:30px; float:right; cursor: pointer; background-color:black; border:none; color:white;" type="submit" name="contactus" value="Submit" textarea cols='20' rows='5'>
	            </div>
	        </div>
	        </form>
	    </div>
    </div>
	
	<!------------------------Call Aunthentication------------------------>
	<div id="bgmodalLogin"></div>
	<div id="bgmodalSignUp"></div>
	<div id="bgmodalForget"></div>
	<!------------------------Call Aunthentication------------------------>
</body>
</html>