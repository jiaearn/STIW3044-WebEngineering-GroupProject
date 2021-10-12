<?php
    session_start();
    error_reporting(0);
    include("dbconnect.php");
    $email = $_POST['email'];
    
    
    if(isset($_POST['deleteuser'])){
        $query = "DELETE FROM `tbl_user` WHERE email = '$email' ";
        if(mysqli_query($conn, $query))
        {
          echo "<script type='text/javascript'>alert('Success!');window.location.assign('manageUsers.php');</script>'";
        }else{
          echo "<script type='text/javascript'>alert('Failed!!');window.location.assign('manageUsers.php');</script>'";
        }
    }

?>

<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">



<script src="https://kit.fontawesome.com/56e1a6fc52.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!--Import Other Class-->
    <script src="//code.jquery.com/jquery.min.js"></script>
	 <!------------------------Call Nav------------------------>
    <link rel="stylesheet" href="../css/adminnavi.css">
    <script src="../js/adminnavi.js"></script>
    <!------------------------Call Nav------------------------>
	<link rel="stylesheet" href="../css/header.css">
	<link rel="stylesheet" href="../css/manageUsers.css">
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <title>Manage Users</title>
    
    <script language="javascript">
	    // JavaScript Document
          $(document).ready(function() {
            $('#example').DataTable( {
                "pagingType": "full_numbers"
            } );
          } );
          
          /*Open Delete Form*/
        function openDeleteForm(email) {
			document.querySelector(".bgmodaldelete").style.display = "flex";
			document.getElementById('email').value=email;
        }

		/*Close Delete Form*/
        function closeDeleteForm() {
            document.querySelector(".bgmodaldelete").style.display = "none";
        }
        
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
        <div class="view">
        <p><i class="fa fa-users"></i><b>&nbsp Manage Users</b></p>
        </div><br><br><br><br>

    	<div class="container2">

        	<table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                	    session_start();
                	    error_reporting(0);
                	    include("dbconnect.php");
                	    
                	    $sqlloadusers = "SELECT * FROM tbl_user WHERE email <>'asiatopu@gmail.com'";
                	    
                	    $result = $conn->query($sqlloadusers);
                	    if ($result->num_rows > 0){
                	        while ($row = $result -> fetch_assoc()){
                	            extract($row);
        	        ?>
        	        <tr>
                        <td><?php echo $fname ?></td>
                        <td><?php echo $lname ?></td>
                        <td><?php echo $email ?></td>
                        <td><button type="submit" class="btn" onclick="openDeleteForm('<?php echo $email ?>')"><i class="fa fa-trash"></i> Delete User</button></td>
                        <!--<td><button class="btn" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash"></i> Delete User</button></td>-->
                    </tr>
<?php
        	        }
        	    }
            ?>  
                </tbody>
                    <tfoot>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
        
        </div>
        
        <!-- Modal -->
  <!--<div class="modal fade" id="myModal" role="dialog">-->
  <!--  <div class="modal-dialog modal-sm">-->
  <!--    <div class="modal-content">-->
  <!--      <div class="modal-header">-->
  <!--        <button type="button" class="close" data-dismiss="modal">&times;</button>-->
  <!--        <h4 class="modal-title">DELETE USER</h4>-->
  <!--      </div>-->
  <!--      <div class="modal-body">-->
  <!--        <p>Are you sure?</p>-->
  <!--      </div>-->
  <!--      <div class="modal-footer">-->
  <!--        <button type="button" class="btn btn-default" data-dismiss="modal">Delete</button>-->
  <!--        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->
  
  <div class ="bgmodaldelete">
		<div class="modal-contentdelete">
			<div class="closeIconDelete" ><span class="material-icons" onclick="closeDeleteForm()">close</span></div>
			<form name="deleteform" method="POST">
                <!--Hearder-->
                <h4 align="center">DELETE USER</h4>
                <div class="text">
                    &nbsp
                    &nbsp
                    &nbsp
                <p style="text-align:center">Are you sure?</p>
                </div>
                <!--Button-->
                <input type="hidden" class="submitDelete" name="email" id="email">
                         <button type="submit" name="deleteuser" class="btn2" data-dismiss="modal">Delete</button>
          <!--<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>-->
                <!--<div class="rowdelete" align="center">-->
                <!--    <input type="submit" class="submitDelete" name="delete" value="Delete">-->
                <!--</div>-->
			</form>
			
		</div>
	</div>
	
    </div>
	
</body>
</html>
