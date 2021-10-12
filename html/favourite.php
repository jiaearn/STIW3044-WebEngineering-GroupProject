<?php
session_start();
error_reporting(0);
include("dbconnect.php");
$email = $_SESSION['email'];
if (isset($_POST['remove_favourite'])){
    $universityID = $_POST['universityID'];
    $sqldelfav="DELETE FROM `tbl_favourite` WHERE universityID = '$universityID' AND email = '$email'";
    if(mysqli_query($conn, $sqldelfav)){
        
        echo "<script type='text/javascript'>alert('Success!');window.location.assign('favourite.php');</script>'";
        
    }else{
        
        echo "<script type='text/javascript'>alert('Failed!!');window.location.assign('favourite.php');</script>'";
        
    }
}


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>favourite</title>
	<link rel="stylesheet" href="../css/header.css">
	<!--Import Icon-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!--Import Other Class-->
    <script src="//code.jquery.com/jquery.min.js"></script>
	<!--Call User Nav CSS-->

    <script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-pie.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            packages: ['corechart']
        });
    </script>
    <!--------------------------Data Table--------------------------------->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
	<!--------------------------Data Table--------------------------------->
    
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
	
	<script language="javascript">
		$(document).ready(function() {
    	$('#exampleTable').DataTable( {
        "paging": false,
        "searching": false,
        "info":false
    	} );
		} );
	</script>
	
	
	
	<style>
    .tblheader{
	background-color:gold;
    }
    
    .card {
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
    }
    
    #containerpie {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    }
    
    #containerbar {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
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
	
	<div><span class=" discover">Discover it FOR YOU</span></div><br><br><br>
	<div class="card" style="background-color:white; width:80%; height:450px;">
	    <div class="card" style="margin-left: 10px;margin-top: 10px; background-color: gold; height: 50px; width:250px;position: relative float:left">
	    <i class="material-icons" style="float: left;margin-top: 5px;margin-left: 5px; font-size: 40px">favorite</i>
	    <span class="discover" style="margin-left: 10px;margin-top: 13px">Favourite</span></div>	
	    
	<br>
	<div class="graphic" style=" height:250px;width:250px;float:left;margin-top:130px;margin-left:80px">
           <img src="../images/favourite.png" alt="Comparebg" style="width:100%; height:100%;z-index:-1">   
	    
	</div>
	<div class="card" style="width:50%;height=450px; margin-left: 50px; margin-top:50px;float:left">
	    
	    
	<table id="exampleTable" class="display" style="width:100%">
	<thead class="tblheader">
		<tr>
		<th>Ranking</th>
		<th>University Name</th>
		<th>Action</th>
		</tr>
	</thead>
	<tbody>
	    <?php
	    session_start();
        error_reporting(0);
        include("dbconnect.php");
        $email = $_SESSION['email'];
        
	    $sqlloadfavourite = "SELECT tbl_favourite.universityID, tbl_favourite.email,tbl_university.rank, tbl_university.university FROM tbl_favourite INNER JOIN tbl_university ON tbl_favourite.universityID=tbl_university.universityID WHERE email='$email'";
	    
	    $result = $conn->query($sqlloadfavourite);
	    if ($result->num_rows > 0){
	        while ($row = $result -> fetch_assoc()){
	            extract($row);
	            ?>
	            <tr>
		        <td><?php echo $rank ?></td>
		        <td><?php echo $university ?></td>
		        <td>
		        <form method="post" >
		            <input type="hidden" class="" name='universityID' value="<?php echo $universityID ?>">
                    <button type="submit" class="" name='remove_favourite'><i class="material-icons" >favorite</i></button>
                </form>
                </td>
		        </tr>
		        <?php
	        }
	    }
	        
	        
	    
	    ?>
	
	</tbody>
	</table>
	</div>
	
    <div style="background-color:black; height:250px;width:350px; float:left; margin-top:130px;margin-left:10px">
            <img src="../images/university.jpg" alt="Comparebg" style="width:100%; height:100%;z-index:-1">
	    
	</div>
	</div>
	<br>


		<div style="height:300px;width:80%; background-color:black;position:relative;float:left;margin-top:30px">
	    <a href="favourite.php">
	    <div class="feature" style="width:300px;height:250px;background-color:white;position:absolute;margin-top:10px;margin-left:310px;border-radius: 25px;float:left;text-align:center">
	        <img src="../images/favourite.png" style="width:85%;height:80%;border-radius: 25px" alt="Asia Top U Logo">
	        <span style="font-size:30px">Favourite</span>
	    </div>
	     </a>
	     <a href="compare.php">
	    <div class="feature" style="width:300px;height:250px;background-color:white;position:absolute;margin-top:10px;margin-left:810px;border-radius: 25px;float:left;text-align:center">
	        <img src="../images/compareu.png" style="width:85%;height:80%" alt="Asia Top U Logo">
	        <span style="font-size:30px">Compare</span>
	    </div>
	    </a>
	</div>
	
	<!------------------------Call Aunthentication------------------------>
	<div id="bgmodalLogin"></div>
	<div id="bgmodalSignUp"></div>
	<div id="bgmodalForget"></div>
	<!------------------------Call Aunthentication------------------------>
</body>
</html>