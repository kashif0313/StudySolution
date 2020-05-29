
<!--including header and connection files for website-->
<?php
include_once("header.php");
include_once("connectdb.php");
?>

<!--html website code-->
<html>
<head><title>StudySolution|Login</title>
<link rel="stylesheet" href="loginregister.css">
<script type="text/javascript" src="loginregister.js"></script>
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
<button class="login_signup" onclick="register()" name="register">SignUP</button>
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
		echo"<p class='errormsg'>Wrong Password </p>";	
	}
	if(isset($_GET['nouser']))
	{
		echo"<p class='errormsg'>No User Exist</p>";	
	}	if(isset($_GET['EmailExist']))
	
?>
</div>
</form>
</div>

</body>
</html>
<!--end of html website code-->

<!--including footer files for website-->
<?php
include_once("footer.php");
?>

<!--check for login button press-->
<?php
if(isset($_POST['loginbtn']))
{
$Email = $_POST['email'];
$Password = $_POST['password'];
if(empty($Email) || empty($Password))
{
	header("location:login.php?emptyfields");
		exit();
}
else
{	
	$Password = md5($Password);            /*--passing encrypted password to database*/
	
	/*--passing data to database*/
	
	$sql = "query to select email from database";
		$result = mysqli_query($connectdb,$sql);
		if($row = mysqli_fetch_assoc($result))
		{
			$dbpassword = $row['password'];
			if($Password== $dbpassword)
			{
				header("location:index.php");
				session_start();
				$_SESSION['loginemail']= $row['email'];
				$_SESSION['loginname']= $row['name'];
				$_SESSION['id']= $row['id'];
				exit();	
			}
			else
			{
				header("location:login.php?wrongpassword");   /*--passing error to URL*/
			exit();
			}
		}
		else
		{
			header("location:login.php?nouser");   /*--passing error to URL*/
			exit();
		}
		
}}

/*check for login button press*/

if(isset($_POST['register']))
{header("location:register.php");
			exit();}
?>