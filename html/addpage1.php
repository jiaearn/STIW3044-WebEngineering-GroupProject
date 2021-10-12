<?php
  session_start();
  error_reporting(0);
  include("dbconnect.php");
  
  if (isset($_POST['adddetails'])) {
    $year = $_POST["year"];
    $rank = $_POST["rank"];
    $university = $_POST["university"];
    $country = $_POST["country"];
    $score = $_POST["score"];
    $ratio = $_POST["ratio"];
    $internationalS = $_POST["internationalS"];
    $internationalF = $_POST["internationalF"];
    $ar = $_POST["ar"];
    $er = $_POST["er"];
 
    $query = "INSERT INTO `tbl_university`(`year`,`rank`,`university`,`country`,`score`,`ratio`,`internationalS`,`internationalF`,`ar`,`er`) VALUES('$year','$rank','$university','$country','$score','$ratio','$internationalS','$internationalF','$ar','$er')";
    if(mysqli_query($conn, $query))
    {
    echo "<script type='text/javascript'>alert('Success!');</script>";
    }else{
    echo "<script type='text/javascript'>alert('Failed!');</script>";
    }
  } 
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/56e1a6fc52.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--Import Other Class-->
    <script src="//code.jquery.com/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/addpage1.css">
    
      <!------------------------Call Nav------------------------>
    <link rel="stylesheet" href="../css/adminnavi.css">
    <script src="../js/adminnavi.js"></script>
    <!------------------------Call Nav------------------------>
    <script language="javascript">
	    // JavaScript Document
        function logOut(){
         window.location.assign("../html/userauthentication/logout.php?");
         alert("Successfully Log Out.");
         window.location.assign("dashboard.php");
        }
	</script>
    <style>
        .card {
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width:80%;
        height:350px;
        margin-right:auto;
        margin-left:auto;
        padding-top:20px;
        border-radius:10px;
        
    }
    </style>
</head>
<body>
	
    <div class="header"><img src="../images/logo.jpg" alt="Asia Top U Logo">
        <h1>&nbsp Asia University Rankings
        <!------------------------Call Aunthentication------------------------>
		<button type="submit" class="logoutbtn" onclick="logOut()"><b>Log Out</b></button>
		<!------------------------Call Aunthentication------------------------>
        </h1>
    </div>
    <div style="height:50px">
        <div id="threeline">
        </div>
        <!------------------------Check Position------------------------>
		<div id="adminnavbar"></div>
		<!------------------------Check Position------------------------>
    
        <div style="padding-left: 80px">
            <span class="asia">Asia</span>
            <span class="topu">TOP U</span>
        </div>
    </div>

    <div>
        <span class=" discover">Discover it FOR YOU</span>
    </div><br><br><br>

<div class="container">
<div class="manage">
<p><i class="fas fa-pen"></i><b>&nbsp; Manage Ranking Data</b></p>
</div><br><br><br><br>

<div class="university"><p><i class="fas fa-trophy"></i><b>&nbsp; University Information</b></p></div>
 <!--<div class="rankingsindicator">-->
 <!--           <p><i class="fas fa-chart-bar"></i><b>&nbsp; Rankings Indicator</b></p>-->
 <!--       </div>-->
 <br><br><br><br>
        <!--<button type="submit" class="rankingbtn"><i class="fas fa-chart-bar width:70%;height:70%;"></i>
            &nbsp Rankings Indicator</button><br><br>-->

<button type="submit" class="addbtn"><b>Add&nbsp;  </b><i class="fas fa-plus-circle"></i></button>
<a href="editpage1.php"><button type="submit" class="editbtn">Edit&nbsp; <i class="fas fa-pencil-alt"></i></button></a>
<a href="deletepage.php"><button type="submit" class="deletebtn">Delete&nbsp; <i class="fas fa-trash-alt"></i></button></a>
	
<form method="post">
	<p><span class="space"></span><span class="bigger"><b>&nbsp; Add New:</b> </span></p>
	<div class="card">
	    <center><span style="font-size:30px">University Details</span></center>
	    <br><br>
    	<span class="space"></span>
    	<label for="name">&nbsp;Year: <span class="s"></span> </label><input type="number" name="year" id="year" class="input" style="border-radius:5px" required>&nbsp;<br><br>
    	<span class="space"></span>
        <label for="name">Rank:	<span class="s"></span> </label><input type="number" name="rank" id="rank" class="input" style="border-radius:5px" required>&nbsp; 
        <label for="name">University:<span class="spa"></span>  </label><input type="text" name="university" id="university" class="input" style="border-radius:5px" required>&nbsp;
    	<label for="name">Country:<span class="spac"></span>   </label><input type="text" name="country" id="country" class="input" style="border-radius:5px" required>&nbsp;  <br><br>
    	<span class="space"></span>
        <label for="name">Overall Score: <span class="sp"></span> </label><input type="number" name="score" id="score" class="input" style="border-radius:5px" required>&nbsp;
        <label for="name">Faculty Student Ratio:&nbsp; </label><input type="number" name="ratio" id="ratio" class="input" style="border-radius:5px" required>&nbsp;
        <label for="name">International Students:&nbsp; </label><input type="number" name="internationalS" id="internationalS" class="input" style="border-radius:5px" required>&nbsp;<br><br>
        <span class="space"></span>
        <label for="name">International Faculty:&nbsp; </label><input type="number" name="internationalF" id="internationalF" class="input" style="border-radius:5px" required>&nbsp;
        <label for="name">Academic Reputation:&nbsp; </label><input type="number" name="ar" id="ar" class="input" style="border-radius:5px" required>&nbsp;
        <label for="name">Employer Reputation:&nbsp;&nbsp; </label><input type="number" name="er" id="er" class="input" style="border-radius:5px" required>&nbsp;
        <br><br>
    	<button type="submit" name="adddetails" style="margin-left:950px; background-color:gold;height:40px;width:100px; cursor:pointer; border:0; border-radius:10px"><b>Add&nbsp; </b></button>
    	<br>
        <br>
	    
	</div>
</form>	
<br>
<br>

</body>
</html>