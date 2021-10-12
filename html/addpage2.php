<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/56e1a6fc52.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <!--Import Other Class-->
    <script src="//code.jquery.com/jquery.min.js"></script>
    <!--Call Admin Nav CSS-->
    <link rel="stylesheet" href="../css/adminnavi.css">
    <!--Call Admin Nav js-->
    <script src="../js/adminnavi.js"></script>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/addpage1.css">

     <!------------------------Call Aunthentication------------------------>
    <script src="../js/userauthentication/login.js"></script>
    <script src="../js/userauthentication/signUp.js"></script>
    <script src="../js/userauthentication/forget.js"></script>
    <link rel="stylesheet" href="../css/userauthentication/login.css">
    <link rel="stylesheet" href="../css/userauthentication/signUp.css">
    <link rel="stylesheet" href="../css/userauthentication/forget.css">
    <!------------------------Call Aunthentication------------------------>
</head>
<body>

<div class="header"><img src="../images/logo.jpg" alt="Asia Top U Logo">
		<h1>&nbsp; Asia University Rankings
		 <!------------------------Call Aunthentication------------------------>
        <button type="submit" class="signupbtn" onclick="openSignUpForm()"><b>Sign Up</b></button>
		<button type="submit" class="loginbtn" onclick="openLoginForm()"><b>Login</b></button>
		<!------------------------Call Aunthentication------------------------>
		</h1>
	</div>
	<div style="height:50px"><div class="threeline" onclick="toggleNav()">
    		<div class="line"></div>
    		<div class="line"></div>
    		<div class="line"></div>	
	</div>
	<div id="navbar">
        </div>
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

<!--<button type="submit" class="universitybtn"><p><i class="fas fa-trophy"></i>&nbsp; University Rankings</p></button>-->
        <div class="universityranking">
            <p><i class="fas fa-trophy"></i><b>&nbsp University Rankings</b></p>
        </div>
        <div class="ranking">
            <p><i class="fas fa-chart-bar"></i><b>&nbsp Rankings Indicator</b></p>
        </div><br><br><br><br>

<button type="submit" class="addbtn"><b>Add&nbsp;  </b><i class="fas fa-plus-circle"></i></button>
<button type="submit" class="editbtn">Edit&nbsp; <i class="fas fa-pencil-alt"></i></button>
<button type="submit" class="updatebtn">Update&nbsp; <i class="fas fa-sync"></i></button>
<button type="submit" class="deletebtn">Delete&nbsp; <i class="fas fa-trash-alt"></i></button>
</div>

<!--	<div class="select" >-->
<!--	<select class="year" name="year" >-->
<!--  <option value="2021">2021&nbsp;  </option>-->
<!--  <option value="2020">2020&nbsp;  </option>-->
<!--  <option value="2019">2019&nbsp;  </option>-->
<!--</select>-->
<!--	<form class="search"  style="margin:auto;">-->
<!--  <input type="text" placeholder="Search...." name="search">-->
<!--  <button type="submit" class="searchbtn"><i class="fa fa-search"></i></button>-->

<!--  <select class="country" name="country" style="width: 150px;" >-->
<!--  <option value="Bangladesh">Bangladesh&nbsp;  </option>-->
<!--  <option value="Brunei">Brunei&nbsp;  </option>-->
<!--  <option value="China(Mainland)">China(Mainland)&nbsp;  </option>-->
<!--  <option value="Hong KongSAR">Hong KongSAR&nbsp;  </option>-->
<!--  <option value="India">India&nbsp;  </option>-->
<!--  <option value="Indonesia">Indonesia&nbsp;  </option>-->
<!--  <option value="Japan">Japan&nbsp;  </option>-->
<!--  <option value="MacauSAR">MacauSAR&nbsp;  </option>-->
<!--  <option value="Malaysia">Malaysia&nbsp;  </option>-->
<!--  <option value="Mongolia">Mongolia&nbsp;  </option>-->
<!--  <option value="Pakistan">Pakistan&nbsp;  </option>-->
<!--  <option value="Philippines">Philippines&nbsp;  </option>-->
<!--  <option value="Singapore">Singapore&nbsp;  </option>-->
<!--  <option value="South Korea">South Korea&nbsp;  </option>-->
<!--  <option value="Sri Lanka">Sri Lanka&nbsp;  </option>-->
<!--  <option value="Taiwan">Taiwan&nbsp;  </option>-->
<!--  <option value="Thailand">Thailand&nbsp;  </option>-->
<!--  <option value="Vietnam">Vietnam&nbsp;  </option>-->
<!--</select>-->
		
<!--</form>-->
</div>	
	<!------------------------Call Aunthentication------------------------>
	<div id="bgmodalLogin"></div>
	<div id="bgmodalSignUp"></div>
	<div id="bgmodalForget"></div>
	<!------------------------Call Aunthentication------------------------>


</body>
</html>