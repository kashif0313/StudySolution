

<!--starting session if user sucessfully login to website-->
<?php
session_start();
?>

<!--html website code-->

<html>
<head>
<link rel="stylesheet" href="header.css">
<script type="text/javascript" src="loginregister.js"></script>
</head>
<body>

<div class="header">
<span class="websitename" id="webname" >Study Solution</span>
<div class="headercontent">
<button class="open_closepanel" onclick="opensidepanel()"id="openbtn">|||</button>
	<div class="headerlinks"id="headerlinks">
			<button class="close_closepanel"onclick="closesidepanel()"id="closebtn">|||</button>
			<a href="index.php" >Home</a>|
			<a href="Semesterpage.php" >Subject Codes</a>|
			<a href="Pastpapers.php" >Pastpapers</a>|
			<a href="assignments.php" >Assignments</a>
			
			<!--check if user sucessfully login and view hidden header link -->
			
			<?php
				if(isset($_SESSION['loginname']))
				{echo'|<a href="uploadfile.php" >Upload Assignment</a>';}
			?>
			
			<!--check if user sucessfully login and view logout button and hide login/signup button -->
			
			<?php
				if(isset($_SESSION['loginname']))
				{
					//echo("you are logged inn!!!");
					echo'
	<form action="logout.php" method="POST"><div class="loginregistercontainer"><button class="logoutbtn"name="destroy">LogOut</button></div></form>';
	echo"Welcome ";			/*if user log in welcome it with name display on header*/
	echo $_SESSION['loginname'];
				}
				
				/*check if user not  login and hide logout button and view login/signup button */
				
				
				else
				{
					//echo("you are not logged inn!!!");
					echo'
	<div class="loginregistercontainer">
	<button class="loginregisterbtn"onclick="login()" id="loginbtn">Login</button>
	<button class="loginregisterbtn"onclick="register()"id="registerbtn">SignUp</button>
	</div>';
				}
				
			?>
			
		</div>
	</div>

</div>


</body>
</html>

