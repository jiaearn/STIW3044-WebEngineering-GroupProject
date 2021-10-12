<?php
    session_start();
    error_reporting(0);
    include("dbconnect.php");
    $email = $_SESSION['email'];
    //$email="yiqingtan9991@gmail.com";
    $universityID = $_POST["universityID"];
    if (isset($_POST['deletecompare1'])){
      $sqldelcompare = "DELETE FROM tbl_compare WHERE email='$email' AND universityID='$universityID'";
      if(mysqli_query($conn, $sqldelcompare)){
        
        echo "<script type='text/javascript'y>alert('Success!');window.location.assign('compare.php');</script>'";
        
        }else{
        
        echo "<script type='text/javascript'>alert('Failed!!');window.location.assign('compare.php');</script>'";
        
        }
    } 
    if (isset($_POST['deletecompare2'])){
        $sqldelcompare = "DELETE FROM tbl_compare WHERE email='$email' AND universityID='$universityID'";
        if(mysqli_query($conn, $sqldelcompare)){
        
        echo "<script type='text/javascript'>alert('Success!');window.location.assign('compare.php');</script>'";
        
        }else{
        
        echo "<script type='text/javascript'>alert('Failed!!');window.location.assign('compare.php');</script>'";
        
        }
    }
    
    
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>compare</title>
	<!--Link css-->
	<link rel="stylesheet" href="../css/header.css"
	<!--Import Icon-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!--Link js-->
    <script src="//code.jquery.com/jquery.min.js"></script>
    
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
	
	<script language="javascript">
		$(document).ready(function() {
    	$('#exampleTable').DataTable( {
        "paging": false,
        "searching": false,
        "info":false,
        "order": [],
        "aoColumnDefs": [
        { "bSortable": false, "aTargets": [ 0, 1, 2, 3 ] }, 
        { "bSearchable": false, "aTargets": [ 0, 1, 2, 3 ] }
    ]
    	} );
		} );
	</script>
	<script language="javascript">
		$(document).ready(function() {
    	$('#exampleTable1').DataTable( {
        "paging": false,
        "searching": false,
        "info":false,
        "order": [],
        "aoColumnDefs": [
        { "bSortable": false, "aTargets": [ 0, 1, 2, 3 ] }, 
        { "bSearchable": false, "aTargets": [ 0, 1, 2, 3 ] }
    ]
    	} );
		} );
	</script>
	<script language="javascript">
		$(document).ready(function() {
    	$('#exampleTable2').DataTable( {
        "paging": false,
        "searching": false,
        "info":false,
        "order": [],
        "aoColumnDefs": [
        { "bSortable": false, "aTargets": [ 0, 1, 2, 3 ] }, 
        { "bSearchable": false, "aTargets": [ 0, 1, 2, 3 ] }
    ]
    	} );
		} );
	</script>
	
	<script language="javascript">
	    function Remove(){
	        alert("Hello");
	    }
	</script>
	
	
	
	<style>
	    .tblheader{
    	background-color:gold;
    	}
    	
    	.tablesize{
    	    height:18px;
    	    width:256px;
    	}
	    
	    .container {
	    z-index: -1000;
	    margin-top:50px;
        border: 1px solid #DDDDDD;
        width: 80%;
        height: 450px;
        position: relative;
        text-align: center;
        }
        
        .tag {
        margin-left:5px;
        margin-top:60px;    
        width:99.4%;
        height:350px;
        float: left;
        position: absolute;
        left: 0px;
        top: 0px;
        z-index: 0;
        background-color: transparent;
        /*padding: 5px;*/
        color: #FFFFFF;
        font-weight: bold;
        }
        
        .detail {
        position:static;
        height:350px;
        width:290px;
        background-color:black;
        float:left;
        margin-right:10px;
        z-index: 0;
        opacity:0.7;
        margin: 5px 5px 5px 5px;
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
	</style>
	
	
</head>

<body style="background-color: white;margin: 0;padding: 0;width:500%;max-width:1920px;min-width:480px;margin-left:auto;margin-right:auto;height:100%; overflow-y: auto; overflow-x: hidden;">
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
	<div>
        <span class=" discover">Discover it FOR YOU</span>
    </div><br><br><br>
    <div class="card" style="background-color:white; width:80%; height:450px;">
        
        <div class="card" style="margin-left: 10px;margin-top: 10px; background-color: gold; height: 50px; width:250px;position: relative float:left">
	    <i class="material-icons" style="float: left;margin-top: 5px;margin-left: 5px; font-size: 40px">bar_chart</i>
	    <span class="discover" style="margin-left: 10px;margin-top: 13px">Compare</span></div>	
	    
	<br>
	<div class="graphic" style=" height:250px;width:250px;float:left;margin-top:130px;margin-left:80px">
           <img src="../images/compareu.png" alt="Comparebg" style="width:100%; height:100%;z-index:-1">   
	    
	</div>
	<div class="card" style="width:16.66%;height=450px; margin-left: 50px; margin-top:50px;float:left">
	<table id="exampleTable" class="display" style="width:100%">
	<thead class="tblheader">
		<tr>
		<th class="tablesize">Criteria</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="tablesize">Country</td>
			
		</tr>
		<tr>
			<td class="tablesize">Overall Score</td>
		
		</tr>
		<tr>
			<td class="tablesize">Faculty Student Ratio</td>
		
		</tr>
		<tr>
			<td class="tablesize">International Students</td>
		
		</tr>
		<tr>
			<td class="tablesize">International Faculty</td>
		
		</tr>
		<tr>
			<td class="tablesize">Academic Reputation</td>
	
		</tr>
		<tr>
			<td class="tablesize">Employer Reputation</td>
	
		</tr>
	</tbody>
	</table>
	</div>
	
	<div class="card" style="width:16.66%;height=450px; margin-left: 0px; margin-top:50px;float:left">
	<table id="exampleTable1" class="display" style="width:100%">
	
	<?php
	    session_start();
        error_reporting(0);
        include("dbconnect.php");
        $email = $_SESSION['email'];
        //$email="yiqingtan9991@gmail.com";
	    $sqlloadfavourite = "SELECT * FROM tbl_compare INNER JOIN tbl_university ON tbl_compare.universityID=tbl_university.universityID WHERE email='$email' AND tbl_university.universityID = (SELECT min(universityID) FROM tbl_compare WHERE email='$email')";
	    $result = $conn->query($sqlloadfavourite);
	    if ($result->num_rows > 0){
	        while ($row = $result -> fetch_assoc()){
	            extract($row);
	            ?>
	    <thead class="tblheader">
		<tr>
		<th style="position:relative" class="tablesize"><?php echo $university = substrwords($university,30);  ?>
		<form method="post">
		    <input type="hidden" name='universityID' value="<?php echo $universityID ?>">
		    <input type="hidden" name='email' value="<?php  echo "$email" ?>">
		    
		    <button type="submit" name="deletecompare1" style="border-style:none;background-color: transparent;left:88%;bottom:30%;position: absolute; cursor:pointer"><i  class="material-icons">close</i> 
	    	</button>
		</form>    
		
		</th>
		</tr>
	    </thead>
	    <tbody>
		<tr>
			<td class="tablesize"><?php echo $country ?></td>
			
		</tr>
		<tr>
			<td class="tablesize"><?php echo $ratio ?></td>
		</tr>
		<tr>
			<td class="tablesize"><?php echo $internationalS ?></td>
	
		</tr>
		<tr>
			<td class="tablesize"><?php echo $internationalF ?></td>
		
		</tr>
		<tr>
			<td class="tablesize"><?php echo $ar ?></td>
		
		</tr>
		<tr>
			<td class="tablesize"><?php echo $er ?></td>
		
		</tr>
		
		
		
		<tr>
			<td class="tablesize"><?php echo $score?></td>
	
		</tr>
		<?php
	        }
	    }
	        
	        
	    
	    ?>
	</tbody>
	</table>
	</div>
	
	<div class="card" style="width:16.66%;height=450px; margin-left: 0px; margin-top:50px;float:left">
	<table id="exampleTable2" class="display" style="width:100%">
	
	<?php
	    session_start();
        error_reporting(0);
        include("dbconnect.php");
        $email = $_SESSION['email'];
        
	    $sqlloadfavourite = "SELECT * FROM tbl_compare INNER JOIN tbl_university ON tbl_compare.universityID=tbl_university.universityID WHERE email='$email' AND tbl_university.universityID = (SELECT max(universityID) FROM tbl_compare WHERE email='$email')";
	    $result = $conn->query($sqlloadfavourite);
	    if ($result->num_rows > 0){
	        while ($row = $result -> fetch_assoc()){
	            extract($row);
            
            $sqlloadcompare = "SELECT * FROM tbl_compare WHERE email='$email'";
            $result1 = mysqli_query($conn,$sqlloadcompare);
            if ($result1->num_rows == 2){
		       ?>
	            <thead class="tblheader">
            		    <tr>
            		<th style="position:relative" class="tablesize"><?php echo $university = substrwords($university,30);  ?> 
            		<form method="post">
            		    <input type="hidden" name='universityID' value="<?php echo $universityID ?>">
            		    <input type="hidden" name='email' value="<?php  echo "$email" ?>">
            		    
            		    <button type="submit" name="deletecompare2" style="border-style:none;background-color: transparent;left:88%;bottom:30%;position: absolute; cursor:pointer"><i  class="material-icons">close</i> 
            	    	</button>
            		</form>  
            		</th>
            		</tr>
            	    </thead>
            	    <tbody>
            		<tr>
            			<td class="tablesize"><?php echo $country ?></td>
            			
            		</tr>
            		<tr>
            			<td class="tablesize"><?php echo $ratio ?></td>
            		</tr>
            		<tr>
            			<td class="tablesize"><?php echo $internationalS ?></td>
            	
            		</tr>
            		<tr>
            			<td class="tablesize"><?php echo $internationalF ?></td>
            		
            		</tr>
            		<tr>
            			<td class="tablesize"><?php echo $ar ?></td>
            		
            		</tr>
            		<tr>
            			<td class="tablesize"><?php echo $er ?></td>
            		</tr>
            		
            		
            		
            		<tr>
            			<td class="tablesize"><?php echo $score?></td>
            	
            		</tr>
            <?php
		    }else{
		        ?>
	            <thead class="tblheader">
            		    <tr>
            		<th style="position:relative;height:19px;width:256px" > 
            		<form method="post">
            		    <input type="hidden" name='universityID' value="<?php echo $universityID ?>">
            		    <input type="hidden" name='email' value="<?php  echo "$email" ?>">
            		    
            		    <button type="submit" name="deletecompare2" style="border-style:none;background-color: transparent;left:88%;bottom:30%;position: absolute; cursor:pointer"><i  class="material-icons">close</i> 
            	    	</button>
            		</form>  
            		</th>
            		</tr>
            	    </thead>
            	    <tbody>
            		<tr>
            			<td class="tablesize"></td>
            			
            		</tr>
            		<tr>
            			<td class="tablesize"></td>
            		</tr>
            		<tr>
            			<td class="tablesize"></td>
            	
            		</tr>
            		<tr>
            			<td class="tablesize"></td>
            		
            		</tr>
            		<tr>
            			<td class="tablesize"></td>
            		
            		</tr>
            		<tr>
            			<td class="tablesize"></td>
            		</tr>
            		
            		
            		
            		<tr>
            			<td class="tablesize"></td>
            	
            		</tr>
            		<?php
		        
		    }
		
	        }
	    }
	    
	    function substrwords($text, $maxchar, $end='...') {
    if (strlen($text) > $maxchar || $text == '') {
        $words = preg_split('/\s/', $text);      
        $output = '';
        $i      = 0;
        while (1) {
            $length = strlen($output)+strlen($words[$i]);
            if ($length > $maxchar) {
                break;
            } 
            else {
                $output .= " " . $words[$i];
                ++$i;
            }
        }
        $output .= $end;
    } 
    else {
        $output = $text;
    }
    return $output;
}    
	        
	    
	    ?>
	</tbody>
	</table>
	</div>
	
	
    <div style="background-color:black; height:350px;width:350px; float:left; margin-top:20px;margin-left:10px">
            <img src="../images/university.png" alt="Comparebg" style="width:100%; height:100%;z-index:-1">
	    
	</div>
        
    </div>
	
	
	<div class="container">
	    <div class="tag">
	        <div class="detail" style="text-align:justify">
               <span style="font-color:white; display:inline-block;font-size:25px; padding:5px 5px 5px 5px">
                   Academic Reputation
               </span>
               <span style="font-color:white; display:inline-block; padding:5px 5px 5px 5px">
                   The highest weighting of any metric is allotted to an institution’s Academic Reputation score. Based on our Academic Survey, it collates the expert opinions of over 130,000 individuals in the higher education space regarding teaching and research quality at the world’s universities. In doing so, it has grown to become the world’s largest survey of academic opinion, and, in terms of size and scope, is an unparalleled means of measuring sentiment in the academic community.
               </span>
           </div>
            <div class="detail" style="text-align:justify">
               <span style="font-color:white; display:inline-block;font-size:25px; padding:5px 5px 5px 5px">
                   Employer Reputation
               </span>
               <span style="font-color:white; display:inline-block; padding:5px 5px 5px 5px">
                   Students will continue to perceive a university education as a means by which they can receive valuable preparation for the employment market. It follows that assessing how successful institutions are at providing that preparation is essential for a ranking whose primary audience is the global student community.Our Employer Reputation metric is based on over 75,000 responses to our QS Employer Survey, and asks employers to identify those institutions from which they source the most competent, innovative, effective graduates. The QS Employer Survey is also the world’s largest of its kind.
               </span>
           </div>
           <div class="detail" style="text-align:justify">
               <span style="font-color:white; display:inline-block;font-size:25px; padding:5px 5px 5px 5px">
                   Faculty Student Ratio
               </span>
               <span style="font-color:white; display:inline-block; padding:5px 5px 5px 5px">
                   Teaching quality is typically cited by students as the metric of highest importance to them when comparing institutions using a ranking. It is notoriously difficult to measure, but we have determined that measuring teacher/student ratios is the most effective proxy metric for teaching quality. It assesses the extent to which institutions are able to provide students with meaningful access to lecturers and tutors, and recognizes that a high number of faculty members per student will reduce the teaching burden on each individual academic.
               </span>
           </div>
           <div class="detail" style="text-align:justify">
               <span style="font-color:white; display:inline-block;font-size:25px; padding:5px 5px 5px 5px">
                   International Students
               </span>
               <span style="font-color:white; display:inline-block; padding:5px 5px 5px 5px">
                   Similar in nature to the International Faculty Index, the International Students Index is based on the proportion of students that are international. This measure has attracted some comment – that perhaps it is not a valid measure of quality – and if we were looking at a much larger catchment of universities that may be accurate, there are certainly institutions beyond the scope of this study for which their international student proportion may indicate a lack of quality. 
               </span>
           </div>
           <div class="detail" style="text-align:justify">
               <span style="font-color:white; display:inline-block;font-size:25px; padding:5px 5px 5px 5px">
                   International Faculty
               </span>
               <span style="font-color:white; display:inline-block; padding:5px 5px 5px 5px">
                   The International Faculty Index is simply based on the proportion of faculty members that are international. Universities based in locations known for attracting high proportions of expatriates perform well here such as those in Hong Kong, Switzerland and UAE.
               </span>
           </div>
	        
	    </div>
	    <img src="../images/compare.png" alt="Comparebg" style="width:100%; height:450px;z-index:-1">     
	</div>
	<br>
	<div style="height:300px;width:80%; background-color:black;position:relative">
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
