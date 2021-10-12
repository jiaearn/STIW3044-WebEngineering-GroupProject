<?php
session_start();
error_reporting(0);
include("dbconnect.php");
$email = $_SESSION['email'];
    if (isset($_POST['submitfeedback'])) {
    $subject = $_POST["subject"];
    $feedback = $_POST["feedback"];
    $sqlfeedback = "INSERT INTO `tbl_feedback`(`email`,`subject`,`feedback`) VALUES('$email','$subject','$feedback')";
    if(mysqli_query($conn, $sqlfeedback))
    {
    echo "<script type='text/javascript'>alert('Feedback success!');window.location.assign('feedback.php?');</script>";
    }else{
    echo "<script type='text/javascript'>alert('Feedback Failed');</script>";
    }
  } 
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>feedback</title>
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
    
    <!--Call User Nav js-->
	<script src="../js/usernavi.js"></script>
	
	<style>
    #bg {
            position: fixed; 
            top: -25%; 
            left: -22.8%; 
            width="460px";
             height="345px";
            z-index:-1;
          }
          #bg img {
            position: static; 
            top: 0; 
            left: 0; 
            right: 0; 
            bottom: 0; 
            margin: auto; 
            min-width: 40%;
            min-height: 40%;
             /*width="460px";*/
             /*height="345px";*/
          }
          
        .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 40%;
}

</style>
</head>

<body style="background-color: white;margin: 0;padding: 0;width:500%;max-width:1920px;min-width:480px;margin-left:auto;margin-right:auto;height:100%; overflow-y: auto; overflow-x: hidden;">
    <div id="bg">
        <img src="../images/feedbackbg.png">
    </div>
    
	<div class="header" style="position:relative"><img src="../images/logo.jpg" alt="Asia Top U Logo">
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
                    while ($row = $result -> fetch_assoc()){
                        extract ($row);
                    if(isset($pic)){
                        ?>
                        <img src="data:image/jpeg;charset=utf8;base64,<?php echo base64_encode($pic); ?>" style= "height: 30px;width: 30px; border-radius:50%;position:absolute;right:20%;top:40%"> 
                <?php
                    }else{
                        ?>
                        <img style= "height: 30px;width: 30px; border-radius:50%;position:absolute;right:20%;top:40%" src="../images/user.png" alt="profileimg">
                    <?php
                    }
                
                    }
	            ?>    
                <span style="position:absolute; right:15%;top:50%;font-size:12px"><?php echo $lname?></span>
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
	<div style="padding-left: 70px">
		<span class="asia">Asia</span>
		<span class="topu" >TOP U</span>
	
	</div>
	
		
	</div>
	<div style="height: 40px">
		<span class=" discover">Discover it FOR YOU</span>
	</div>
	
	<div class="card" style="margin-left: 10px;margin-top: 10px; background-color: gold; height: 50px; width:250px;position: relative float:left;">
		<img src="../images/feedback_48px.png" alt="usericon" style="height: 40px;width: 40px;float: left;margin-top: 5px;margin-left: 5px">
		<span class="discover" style="margin-left: 10px;margin-top: 13px">Feedback</span>
	</div>
	<form method="POST" name="submitfeedback" action="../html/contactusemail.php">
	<div style="width:40%;height:100%; display: flex">
		<div class="card" style="background-color: #F8F8F8; float: left; height: 310px;width: 80%; margin-top: 40px;border-radius: 10px 10px 10px 10px;">
    		<div style="background-color: gold; padding-bottom: 10px; padding-top: 10px;padding-left:10px;border-radius: 10px 10px 0px 0px;">
    			<span class="discover" style="color:black; float: none; font-weight: normal; margin-left:0;font-size:14px">New Message</span>
    		</div>
    		<div style="background-color: #F8F8F8;border-top: 1px solid black; border-bottom: 1px solid black; padding-bottom: 10px; padding-top: 10px;padding-left:10px">
    			<span class="discover" style="color:black; float: none; font-weight: normal;margin-left:0;font-size:14px">To: Admin</span>
    		</div>
    		<div style="background-color: #F8F8F8; border-bottom: 1px solid black;  padding-bottom: 10px; padding-top: 10px">
    			<span class="discover" style="color:black; float: none; font-weight: normal;margin-left:0;padding-left:10px;font-size:14px">Subject:</span>
    			<input type="text" style="font-size: 18px ;width:80%; border:none; background: transparent; outline: 0" name="subject"  required>
    		</div>
		    <textarea rows="8" cols="82" name="feedback" placeholder="Enter feedback here..." style="border:none;background-color: #F8F8F8" required></textarea>
			<div style="float: right">
                        <input type="hidden" value="<?php echo $email ?>">
				<button type="submit" class="cancelbtn"><b>Cancel</b></button>
				<button style="margin-right: 10px" type="submit" class="savebtn" name="submitfeedback"><b>Send</b></button>
			</div>
		</div>
	</div>
	
	</form>
	<!------------------------Call Aunthentication------------------------>
	<div id="bgmodalLogin"></div>
	<div id="bgmodalSignUp"></div>
	<div id="bgmodalForget"></div>
	<!------------------------Call Aunthentication------------------------>
	
	
</body>
</html>