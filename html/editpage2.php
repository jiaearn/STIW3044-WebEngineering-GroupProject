<?php
session_start();
error_reporting(0);
include("dbconnect.php");
  
    if (isset($_POST['updateeditform2'])){
      
        $universityID= $_POST["universityID"];
        $university= $_POST["university"];
        $facultystudentratio= $_POST["facultystudentratio"];
        $internationalstudentsratio = $_POST["internationalstudentsratio"];
        $internationalfacultyratio = $_POST["internationalfacultyratio"];
        $academicreputation = $_POST["academicreputation"];
        $employerreputation = $_POST["employerreputation"];
        
        $query = "UPDATE `tbl_university` SET ratio = '$facultystudentratio', internationalS = '$internationalstudentsratio', internationalF = '$internationalfacultyratio', ar = '$academicreputation', er = '$employerreputation' WHERE universityID = '$universityID' ";
        if(mysqli_query($conn, $query))
        {
          echo "<script type='text/javascript'>alert('Success!');window.location.assign('editpage2.php');</script>'";
        }else{
          echo "<script type='text/javascript'>alert('Failed!!');window.location.assign('editpage2.php');</script>'";
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
    <link rel="stylesheet" href="../css/editpage2.css">
    <!--Call Table js-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <!------------------------Call Nav------------------------>
    <link rel="stylesheet" href="../css/adminnavi.css">
    <script src="../js/adminnavi.js"></script>
    <!------------------------Call Nav------------------------>
    <!------------------------Call Edit Form------------------------>
    <script src="../js/editform2.js"></script>
    <link rel="stylesheet" href="../css/editform2.css">
    <!------------------------Call Edit Form------------------------>
    <script language="javascript">
	    // JavaScript Document
        $(document).ready(function() {
            $('#example').DataTable( {
                "pagingType": "full_numbers"
            } );
        } );
        function logOut(){
        window.location.assign("../html/userauthentication/logout.php?");
        alert("Successfully Log Out.");
        window.location.assign("dashboard.php");
        }    
	</script>
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
            <p><i class="fas fa-pen"></i><b>&nbsp Manage Ranking Data</b></p>
        </div><br><br><br><br>

         <a href="editpage1.php"><div class="university">
            <p><i class="fas fa-trophy"></i><b>&nbsp University Rankings</b></p>
        </div></a>
         <div class="rankingsindicator">
            <p><i class="fas fa-chart-bar"></i><b>&nbsp Rankings Indicator</b></p>
        </div><br><br><br><br>
        <!--<button type="submit" class="rankingbtn"><i class="fas fa-chart-bar width:70%;height:70%;"></i>
            &nbsp Rankings Indicator</button><br><br>-->

        <a href="addpage1.php"><button type="submit" class="addbtn"><b>Add&nbsp </b><i class="fas fa-plus-circle"></i></button></a>
        <button type="submit" class="editbtn">Edit&nbsp <i class="fas fa-pencil-alt"></i></button>
        <a href="deletepage.php"><button type="submit" class="deletebtn">Delete&nbsp <i class="fas fa-trash-alt"></i></button></a>

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
    <input type="submit" class="sortbtn" value="Sort" name="sortyear">
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
				<th>Faculty Student Ratio</th>
				<th>International Students</th>
				<th>International Faculty</th>
				<th>Academic Reputation</th>
				<th>Employer Reputation</th>
                <th> </th>
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
                <td><?php echo $ratio ?></td>
                <td><?php echo $internationalS ?></td>
                <td><?php echo $internationalF ?></td>
                <td><?php echo $ar ?></td>
                <td><?php echo $er ?></td>
                <td><button class="btn2" onclick="openEditForm2('<?php echo $universityID ?>','<?php echo $university ?>','<?php echo $ratio ?>','<?php echo $internationalS ?>','<?php echo $internationalF ?>','<?php echo $ar ?>','<?php echo $er ?>')"><i class="fa fa-edit"></i></button></td>
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
				<th>Faculty Student Ratio</th>
				<th>International Students</th>
				<th>International Faculty</th>
				<th>Academic Reputation</th>
				<th>Employer Reputation</th>
                <th> </th>
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
	<!------------------------Call Edit Form------------------------>
    <div id="editform2"></div>
    <!------------------------Call Edit Form------------------------>

</body>

</html>