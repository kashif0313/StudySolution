<html>
<head>
<link rel="stylesheet" href="footer.css"></head>
<body>
<div class="footer">
	<input class="websitefootertitle" value="Study Solution"readonly>
	<div class="footerbody">
		<div class="box">
		<form method="post">
		<hr><span class="headtitle"id="conntactus">Contact Us</span><hr>
		<input class="contactinput" placeholder="Name" name="name">
		<input class="contactinput" placeholder="Email"name="email">
		<textarea class="contacttextarea" placeholder="Message"  name="message"></textarea>
		<button class="sendmail" name="sendemail" >Send mail</button>
		</form>
		</div>
		<div class="box">
		<hr><span class="headtitle">About Us</span><hr>
		<div class="aboutcontent">This website is made by group of students from Virtual University
		Here you will find all kinds of pastpapers and handouts
		assignments will be uploaded as soon as they are posted from teachers</div>
		
		</div>
		
		<!--box for quick links of tabs in header-->
		
		<div class="box">
		<hr><span class="headtitle">Quicklinks</span><hr>
		<div class="quicklinks">
		<a href="indexpage.php" >Home</a><br>
			<a href="Semesterpage.php" >Subject Codes</a><br>
			<a href="Pastpapers.php" >Pastpapers</a><br>
			<a href="assignments.php" >Assignments</a><br>
			<a href="https://mail.google.com/mail/u/0/#inbox?compose=new">Email us </a>
		</div>
		</div>
		
	</div>
	
	<!--bottom footer of copyright-->
	
<input class="websitefooterbottom" value="Designed By Kashif Imran and group of VU students "readonly><input class="websitefooterbottom" value="Copyright &copy 2020 StudySolution.epizy.com"readonly>

</body>
</html>

<!--code to send  contact information  to email-->

<?php
if(isset($_POST['sendemail']))
{
	
	$Name=$_POST['name'];
	$Email=$_POST['email'];
	$Message=$_POST['message'];
	$Subject = "Email from website";
	$mailTo ="emailadress to which email is send";
	$headers = "From : ".$Email;
	$txt = "you recieved an email from ".$Name.".\n\n".$Message;
	if(empty($Name) ||empty($Email)||empty($Message) )
	{}
	else{
	mail($mailTo ,$Subject , $txt ,$headers);
	}
}
?>