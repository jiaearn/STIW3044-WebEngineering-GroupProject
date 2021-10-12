<?php
    session_start();
    error_reporting(0);
    include("dbconnect.php");
    $universityID = $_POST['universityID'];
    $email = $_SESSION['email'];
    
if (isset($_POST['addfav'])){
    
    if(empty($email)){
            echo "<script type='text/javascript'>alert('Please login to perform this function!');window.location.assign('uniRanking.php');</script>'";
    } else{
        $sqlsearch = "SELECT * FROM `tbl_favourite` WHERE email = '$email' &&  `universityID`='$universityID'";
        $result = $conn->query($sqlsearch);
        
        if ($result->num_rows > 0) {
            echo "<script type='text/javascript'>alert('This record already add into favourite list!');window.location.assign('uniRanking.php');</script>'";
        }else{
            $addFavourite = "INSERT INTO `tbl_favourite`(`universityID`, `email`) VALUES('$universityID','$email')";
            if(mysqli_query($conn, $addFavourite)){
            echo  "<script type='text/javascript'>alert('Success!');window.location.assign('uniRanking.php');</script>'";
            }
            else{
                echo "<script type='text/javascript'>alert('Failed!!');window.location.assign('uniRanking.php');</script>'";
            }
        }
    }
}
    // if(isset($_POST['addfav'])){
    //   // $query = "INSERT INTO `tbl_favourite`(universityID,email)VALUES($universityID,$email)";
    //     $query = "INSERT INTO `tbl_favourite`(`universityID`, `email`) VALUES('$universityID','$email')";
    //     if(mysqli_query($conn, $query))
    //     {
    //       echo "<script type='text/javascript'>alert('Success!');window.location.assign('uniRanking.php');</script>'";
    //     }else{
    //      echo "<script type='text/javascript'>alert('Failed!!');window.location.assign('uniRanking.php');</script>'";
    //     }
    // }

?>

<?php
    session_start();
    error_reporting(0);
    include("dbconnect.php");
    $universityID = $_POST['uniID'];
    $email = $_SESSION['email'];
    
if (isset($_POST['addcompare'])){
    if(empty($email)){
            echo "<script type='text/javascript'>alert('Please login to perform this function!');window.location.assign('uniRanking.php');</script>'";
    } else{
        $sqlsearch = "SELECT * FROM `tbl_compare` WHERE email = '$email' &&  `universityID`='$universityID'";
        $result = $conn->query($sqlsearch);
        
        if ($result->num_rows > 0) {
            echo "<script type='text/javascript'>alert('This record already add into compare list!');window.location.assign('uniRanking.php');</script>'";
        }else{
            $sqlcompare = "SELECT * FROM `tbl_compare` WHERE email = '$email'";
            $result = $conn->query($sqlcompare);
            if ($result->num_rows >= 2){
                echo  "<script type='text/javascript'>alert('You can only add maximum 2 universities in the compare list');window.location.assign('uniRanking.php');</script>'";
            }else{
                $addCompare = "INSERT INTO `tbl_compare`(`universityID`, `email`) VALUES('$universityID','$email')";
                if(mysqli_query($conn, $addCompare)){
                echo  "<script type='text/javascript'>alert('Success!');window.location.assign('uniRanking.php');</script>'";
                }
                else{
                echo "<script type='text/javascript'>alert('Failed!!');window.location.assign('uniRanking.php');</script>'";
                }
            }
                
            
        }
    }
}

?>

<!DOCTYPE html>
<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/56e1a6fc52.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!--Import Other Class-->
    <script src="//code.jquery.com/jquery.min.js"></script>
    <!------------------------Call Nav------------------------>
    <link rel="stylesheet" href="../css/adminnavi.css">
    <link rel="stylesheet" href="../css/usernavi.css">
    <script src="../js/adminnavi.js"></script>
    <script src="../js/usernavi.js"></script>
    <!------------------------Call Nav------------------------>
	<link rel="stylesheet" href="../css/header.css">
	<link rel="stylesheet" href="../css/homepage.css">
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
	
	<title>University Ranking</title>
	
	
		<script language="javascript">
	    // JavaScript Document
          $(document).ready(function() {
            $('#example').DataTable( {
                "pagingType": "full_numbers"
            } );
          } );
	    </script>
	
	
    <!------------------------Call Aunthentication------------------------>
    <script src="../js/userauthentication/login.js"></script>
    <script src="../js/userauthentication/signUp.js"></script>
    <script src="../js/userauthentication/forget.js"></script>
    <script src="../js/userauthentication/logout.js"></script>
    <link rel="stylesheet" href="../css/userauthentication/login.css">
    <link rel="stylesheet" href="../css/userauthentication/signUp.css">
    <link rel="stylesheet" href="../css/userauthentication/forget.css">
    <!------------------------Call Aunthentication------------------------>
</head>
<body>

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
        <div id="threeline">
        </div>
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
            <span class="topu">TOP U</span>
        </div>
    </div>

    <div>
        <span class=" discover">Discover it FOR YOU</span>
    </div><br><br>

	
	<div class="container">
	
	<div class="w3-content w3-section">
  <img class="mySlides" src="../images/sHKUbanner.png" style="width:100%">
  <img class="mySlides" src="../images/sNUSbanner.png" style="width:100%">
</div><br>
	
	<div class="university">
            <p><i class="fas fa-trophy"></i><b>&nbsp; University Rankings</b></p>
        </div>
        <a href="rankIndicators.php"><div class="rankingsindicator">
            <p><i class="fas fa-chart-bar"></i><b>&nbsp; Rankings Indicator</b></p>
        </div></a><br><br><br><br>

    

<div class="select" >
    <?php
        session_start();
        error_reporting(0);
        include("dbconnect.php");
        $email = $_SESSION['email'];
        $year =$_POST['year'];
        $country=$_POST['country'];
        if(isset($_POST['sortyear'])){
            if($country=='All Country'){
                $sqlloaduni = "SELECT * FROM tbl_university WHERE year ='$year'";
            }else{
            $sqlloaduni = "SELECT * FROM tbl_university WHERE year ='$year' AND country = '$country'";
            }
        }else{
            $sqlloaduni = "SELECT * FROM tbl_university WHERE year ='2021'";
            $year=2021;
        }
    ?>

	<form method="post">
	    <select class="year" name="year" >
          <option value="2021"<?php if($year=='2021'){echo "selected='selected'";} ?>>2021&nbsp  </option>
          <option value="2020"<?php if($year=='2020'){echo "selected='selected'";} ?>>2020&nbsp  </option>
          <option value="2019"<?php if($year=='2019'){echo "selected='selected'";} ?>>2019&nbsp  </option>
        </select>
        <select class="country" name="country" style="width: 165px;" >
          <option value="All Country"<?php if($country=='All Country'){echo "selected='selected'";} ?>>All Country&nbsp  </option>
          <option value="China (Mainland)"<?php if($country=='China (Mainland)'){echo "selected='selected'";} ?>>China (Mainland)&nbsp  </option>
          <option value="Hong Kong"<?php if($country=='Hong Kong'){echo "selected='selected'";} ?>>Hong Kong&nbsp  </option>
          <option value="Japan"<?php if($country=='Japan'){echo "selected='selected'";} ?>>Japan&nbsp  </option>
          <option value="Malaysia"<?php if($country=='Malaysia'){echo "selected='selected'";} ?>>Malaysia&nbsp  </option>
          <option value="Singapore"<?php if($country=='Singapore'){echo "selected='selected'";} ?>>Singapore&nbsp  </option>
          <option value="South Korea"<?php if($country=='South Korea'){echo "selected='selected'";} ?>>South Korea&nbsp  </option>
          <option value="Taiwan"<?php if($country=='Taiwan'){echo "selected='selected'";} ?>>Taiwan&nbsp  </option>
        </select>
    <input type="submit" class="sortbtn" value="Filter" name="sortyear">
	</form>

</div><br><br><br>
	
	
	<div class="container2">
	
	<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Rank</th>
                <th>University</th>
                <th>Country</th>
                <th>Overall Score</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
	    $result = $conn->query($sqlloaduni);
	    if ($result->num_rows > 0){
	        while ($row = $result -> fetch_assoc()){
	            extract($row);
	   ?>
	   <tr>
	       
                <td><?php echo $rank ?></td>
                <td><?php echo $university ?></td>
                <td><?php echo $country ?></td>
                <td><?php echo $score ?></td>
                <td><a href="<?php echo $universityLink ?>"><button class="btn"><i class="fa fa-commenting"></i> View More Info</button></a>
                <form  method="POST" style="float: left">
                    <input type="hidden" name="uniID" value="<?php echo $universityID ?>">
                    <button type="submit" name="addcompare" class="btn2"><i class="fa fa-plus-square-o"></i></button>
                </form>
                <form  method="POST" style="float: left">
                        <input type="hidden" name="universityID" value="<?php echo $universityID ?>">
                    <button type="submit" name="addfav" class="btn2"><i class="fa fa-heart-o"></i></button>
                </form></td>   
            </tr>
            <?php
	        }
	    }
          ?>  
        </tbody>
        <tfoot>
            <tr>
                <th>Rank</th>
                <th>University</th>
                <th>Country</th>
                <th>Overall Score</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
    

    </div>
	
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
	
	</div>
    <!------------------------Call Aunthentication------------------------>
	<div id="bgmodalLogin"></div>
	<div id="bgmodalSignUp"></div>
	<div id="bgmodalForget"></div>
	<!------------------------Call Aunthentication------------------------>


</body>
</html>