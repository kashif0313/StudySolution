
<!--including  connection files for website-->

<?php
include_once("connectdb.php");
?>

<!--html website code-->
<html>
<head>
<link rel="stylesheet" href="popuplogin.css">
<script type="text/javascript" src="loginregister.js"></script>
<script type="text/javascript" src="bookandpaper.js"></script>
</head>
<body>
<div class="container">
<form  method="POST">
<div class="login_box">
<p class="titleLogin">Login</p>
<div class="inputfields">

<input class="inputarea" type="email" name="email"placeholder="Email/Username">
<input class="inputarea" type="password" name="password" placeholder="Password"></div>
<div class="buttonscontainer">
<button class="login_signup"name="loginbtn"onclick="login()">LogIn</button>
<button class="login_signup" name="register">SignUP</button>
<button class="forgotpassword">Forgot password???</button>
</div>

<!--php error handling to view custom message for error placed inside URL -->

<?php 
	if(isset($_GET['emptyfields']))
	{
		echo"<p class='errormsg'>Field / Fields empty</p>";	
	}
	if(isset($_GET['wrongpassword']))
	{
		echo"<p class='errormsg'>Password not correct</p>";	
	}
	if(isset($_GET['nouser']))
	{
		echo"<p class='errormsg'>No User Exist</p>";	
		echo"<p class='errormsg'>Register first</p>";	
				exit();	
	}	
	
?></div>
</form>
</div>

</body>
</html>

<!--end of html website code-->

<!--check for login button press-->

<?php
if(isset($_POST['loginbtn']))
{
$Email = $_POST['email'];
$Password = $_POST['password'];
if(empty($Email) || empty($Password))
{
	header("location:popuplogin.php?emptyfields");
		exit();
}
else
{	
	$Password = md5($Password);  /*--passing encrypted password to database*/
	
	/*--passing data to database*/
	
	$sql = "query to select email from database";
		$result = mysqli_query($connectdb,$sql);
		if($row = mysqli_fetch_assoc($result))
		{
			$dbpassword = $row['password'];
			if($Password== $dbpassword)
			{
				
				session_start();
				$_SESSION['loginemail']= $row['email'];
				$_SESSION['loginname']= $row['name'];
				$_SESSION['id']= $row['id'];
				echo '<script type="text/javascript">closepopup();</script>'; 
				exit();
			}
			else
			{
				header("location:popuplogin.php?wrongpassword");		/*--passing error to URL*/
			exit();
			}
		}
		else
		{
			header("location:popuplogin.php?nouser");	/*--passing error to URL*/
			exit();
		}
		
}}
if(isset($_POST['register']))
{header("location:popupregister.php");
			exit();}

?>