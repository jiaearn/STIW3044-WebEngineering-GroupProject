<?php
    session_start();
    error_reporting(0);
    include("dbconnect.php");
    $universityID = $_POST['universityID'];
    
    if(isset($_POST['deleteuni'])){
        $query = "DELETE FROM `tbl_university` WHERE universityID = '$universityID' ";
        if(mysqli_query($conn, $query))
        {
          echo "<script type='text/javascript'>alert('Success!');window.location.assign('deletepage.php');</script>'";
        }else{
          echo "<script type='text/javascript'>alert('Failed!!');window.location.assign('deletepage.php');</script>'";
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
        <!--Call Table js-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    
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
	    // JavaScript Document
        $(document).ready(function() {
            $('#example').DataTable( {
                "pagingType": "full_numbers"
            } );
        } );
        function logOut(){
        window.location.assign("../html/userauthentication/logout.php?");
        alert("Successfully Log Out.");
        window.location.assign("uniRanking.php");
        }    
         function openDeleteForm(universityID) {
			document.querySelector(".bgmodaldelete").style.display = "flex";
			document.getElementById('universityID').value=universityID;
        }

		/*Close Delete Form*/
        function closeDeleteForm() {
            document.querySelector(".bgmodaldelete").style.display = "none";
        }
	</script>
    
    <style>
    .bgmodaldelete{
			width:100%;
			height: 100%;
			background-color: rgba(0,0,0,0);
			position: absolute;
			top: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			display: none;
}

.modal-contentdelete{
			width: 300px;
            height: 200px;
			background-color: white;
			opacity: 1;
			border-radius: 10px;
			padding: 20px;
			border: 2px solid;
			position: relative;
}
.closeIconDelete{
			position: absolute;
			top: 10px;
			right: 10px;
			cursor: pointer;
}
.submitDelete {
            width: 200px;
            height: 35px;
            font-weight: bold;
            border-width: 0 0 1px;
            border-radius: 5px;
            background: #2296F3;
            cursor: pointer;
            color: #ffffff;
}

        /*Login Button Hover*/
 .submitDelete:hover {
            box-shadow: 0 0 10px 10px hsla(198, 100%, 50%, 0.5);
            color: #ffffff;
            background: #2296F3;
            border: 0;
}
.btn3{
  border: none;
  color: grey;
  padding: 8px 16px;
  cursor: pointer;
  margin: 2px 0px 2px 115px;
}

.btn3:hover {
color: black;
background-color: gold;
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
		<!------------------------Call Position------------------------>
        <!--<div id="navbar"></div>-->
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
 
 <br><br><br><br>
     

<a href="addpage1.php"><button type="submit" class="addbtnn"><b>Add&nbsp;  </b><i class="fas fa-plus-circle"></i></button></a>
<a href="editpage1.php"><button type="submit" class="editbtn">Edit&nbsp; <i class="fas fa-pencil-alt"></i></button></a>
<!--<button type="submit" class="updatebtn">Update&nbsp; <i class="fas fa-sync"></i></button>-->
<button type="submit" class="deletebtnn">Delete&nbsp; <i class="fas fa-trash-alt"></i></button>
	

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
                <td><button class="btn2" onclick="openDeleteForm('<?php echo $universityID ?>')"><i class="fa fa-trash" ></i></button></td>
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
                <th> </th>
            </tr>
        </tfoot>
    </table>
    
    </div>
 
 </div>   
<div class ="bgmodaldelete">
		<div class="modal-contentdelete">
			<div class="closeIconDelete" ><span class="material-icons" onclick="closeDeleteForm()">close</span></div>
			<form name="deleteform" method="POST">
                <!--Hearder-->
                <h4 align="center">DELETE UNIVERSITY</h4>
                <div class="text">
                    &nbsp
                    &nbsp
                    &nbsp
                <p style="text-align:center">Are you sure?</p>
                </div>
                <!--Button-->
                <input type="hidden" class="submitDelete" name="universityID" id="universityID">
                         <button type="submit" name="deleteuni" class="btn3" data-dismiss="modal">Delete</button>
          <!--<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>-->
                <!--<div class="rowdelete" align="center">-->
                <!--    <input type="submit" class="submitDelete" name="delete" value="Delete">-->
                <!--</div>-->
			</form>
			
		</div>
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
    
	<!------------------------Call Aunthentication------------------------>
	<div id="bgmodalLogin"></div>
	<div id="bgmodalSignUp"></div>
	<div id="bgmodalForget"></div>
	<!------------------------Call Aunthentication------------------------>


</body>
</html>