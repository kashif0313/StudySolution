
<!--including  connection files for website-->

<?php
include_once("connectdb.php");
?>

<html>
<head>
<link rel="stylesheet" href="registerpopup.css">
<script type="text/javascript" src="loginregister.js"></script>
<script type="text/javascript" src="bookandpaper.js"></script>
</head>
<body>
<div class="container">
<form  method="POST">
<div class="register_box">
<p class="titleLogin">Register</p>
<div class="inputfields">
<input class="inputarea" name="username" type="name"placeholder="Name/Username">
<input class="inputarea" name="UserEmail" type="email"  placeholder="Email" >
<input class="inputarea" name="Vuid" maxlength="11" placeholder="Vu ID">
<input class="inputarea" name="Passkey" type="password" placeholder="Password">
<input class="inputarea" name="Rpassword" type="password"  placeholder="Retype Password"></div>
<div class="buttonscontainer">
<button class="register_signup" name="Loginbtn"  onclick="login()">LogIn</button>
<button class="register_signup" name="Registerbtn" onclick="setregister()">SignUP</button></div>

<!--php error handling to view custom message for error placed inside URL -->

<?php 
	if(isset($_GET['emptyfields']))
	{
		echo"<p class='errormsg'>Field / Fields empty</p>";	
	}
	if(isset($_GET['passwordmismatch']))
	{
		echo"<p class='errormsg'>Password not Matched</p>";	
	}
	if(isset($_GET['UsernameExist']))
	{
		echo"<p class='errormsg'>Username already Exist</p>";	
	}	if(isset($_GET['EmailExist']))
	{
		echo"<p class='errormsg'>Email aleready registered </p>";	
	}
	
	
?>
</form>
</div>

</div>
</body>
</html>
<!--end of html website code-->

<!--check for register button press-->

<?php
if(isset($_POST['Registerbtn']))
{
$Name = $_POST['username'];
$Email = $_POST['UserEmail'];
$Vuide = $_POST['Vuid'];
$Password = $_POST['Passkey'];
$RepeatPassword = $_POST['Rpassword'];

/*--check for any empty fields inside register form before submitting to database*/\

if(empty($Name) || empty($Email) || empty($Vuide) || empty($Password)|| empty($RepeatPassword))
{
	header("location:popupregister.php?emptyfields&username=".$Name."&UserEmail=".$Email."&Vuid=".$Vuid);
		exit();
}

/*--check that password and retypassword matches  before submitting to database*/

if($Password !== $RepeatPassword)
{
	header("location:popupregister.php?passwordmismatch&username=".$Name."&UserEmail=".$Email."&Vuid=".$Vuide);
		exit();
}

else
	
/*--check that username entered already exists inside  database*/

{			$useravalibility = "query to check that name arready exist or not";
			 $result = mysqli_query($connectdb,$useravalibility);
			if($row = mysqli_fetch_assoc($result))
		{
				header("location:popupregister.php?UsernameExist");
				;
			exit();
		}
		
		
		/*--check that email entered already exists inside  database*/
		
		
		$useravalibility = "query to check that email arready exist or not";
			 $result = mysqli_query($connectdb,$useravalibility);
			if($row = mysqli_fetch_assoc($result))
		{
				header("location:popupregister.php?EmailExist");
				exit();
		}
		else
		{
			
			/*--passing data to database*/
			
			$sql="query to pass data from input fields into database ";
			mysqli_query($connectdb,$sql);
			header("location:register.php?success");
			
				echo '<script type="text/javascript">closepopup();</script>'; 
					
			exit();
		}
	
}

}

/*check for login button press*/

if(isset($_POST['Loginbtn']))
{header("location:popuplogin.php");
			exit();}

?>