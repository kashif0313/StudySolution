
<!--including header  files for website-->

<?php
include_once("header.php");
?>

<!--html website code-->

<html>
<head><title>StudySolution|View/Download</title>
<link rel="stylesheet" href="semesterpage.css">
<script type="text/javascript" src="bookandpaper.js"></script>

</head>
<body>
<div class="container">
	<div class="websitebodyweb">
	<form method="POST">
	
		<div class="contentcontainer">
			<input class="contentheading" value="Pastpapers"readonly>
			<div class="imgcont" id="pastpapers"></div>
			<button  class="downloadbtn"  name="downloadbtn" >Download</button>
			
			<!--fetching links of files to make them able to download -->
			
			<?php if(isset($_GET['login']))
				{echo'<a href="" id="linkdownloade" class="downloadbtn"  download onclick="downloadpastpapers()" >Download Link</a>';}?>
			
			<button class="viewonlinebtn"onClick="openpastpapers()">View Online</button>
			</div>
			
		
		<div class="contentcontainer">
			<input class="contentheading" value="Handouts"readonly>
			<div class="imgcont" id="handouts"></div>
			
			
			 <!--fetching links of files to make them able to download -->
			 
			<button class="downloadbtn" name="downloadbtn1"  >Download</button>
			<?php if(isset($_GET['login']))
				{echo'<a href="" id="downbtn1" class="downloadbtn" name="downloadbtn1" download onclick="downloadhandouts()" >Download Link</a>';}?>
			 
			<button class="viewonlinebtn"onClick="openhandoutsonline()">View Online</button>
			
		</div>
		
		<!--check if user is login to make downloadlink   avaliable to download file  -->
		<?php
				if(isset($_GET['logout']))
				{
					echo"<a class='error1'onClick='openalert();' href='#'>Login</a>";
					echo"<span class='error'> first to download</span>";
					
					/*echo '<script type="text/javascript">openalert();</script>'; */
				}
			?>
		
		</form>
	</div>
</div>
</body>
</html>

<!--end of html website code-->

<!--including footer files for website-->

<?php
include_once("footer.php");
?>

<!--check for download button press-->

<?php
if(isset($_POST['downloadbtn']) )
{
	
	/*check if user is login if download button is press*/
	
	if(isset($_SESSION['loginname'])) 
	{
	header("location:bookandpaper.php?login");}
	else
	{header("location:bookandpaper.php?logout");}
}
if(isset($_POST['downloadbtn1']) )
{
	if(isset($_SESSION['loginname']))
	{
	header("location:bookandpaper.php?login");}
	else
	{header("location:bookandpaper.php?logout");}
}

		
?>