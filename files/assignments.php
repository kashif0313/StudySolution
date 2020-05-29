

<!--including header and connection files for website-->

<?php
include_once("header.php");
include_once("connectdb.php");
?>

<!--html website code-->

<html>
<head><title>StudySolution|Assignments</title>
<link rel="stylesheet" href="semesterpage.css">
<script type="text/javascript" src="indexpage.js"></script>
<script type="text/javascript" src="assignments.js"></script>
		
</head>
<body>
<div class="container" id="contain">

<output class="websitenametop" >Assignments</output>
<div class="assignmentscontainer" id="assignmentscontainer1">

<!--fetching assignments  that are uploaded inside database and displaying it -->
<?php

if(isset($_SESSION['loginname']))
	{
	
$sql = "sql to select data from database  ";

/*connectdb variable used to connect to db which is declared in other file */

		$result = mysqli_query($connectdb,$sql); 
		$rows = mysqli_num_rows($result); 
	
		while($row = mysqli_fetch_assoc($result))
		{
			
			$useremail = $row['email'];
			$Filename = $row['filename'];
			$name2= $row['filesecondname'];
			$dbid= $row['id'];
			$fileext = ['fileextention'];
				  

			/*creating place for assignments to display on website using html and passing values from database using php */
		 echo"
			
			<div class='contentcontainer1' id='dbdiv'>
			<input class='contentheading' value='Handouts'readonly>
			<div class='imgcont' id='pastpapers'name='pastpapers'>$Filename</div><form method='post' >
			<a class='viewonlinebtn1' href='uploadfolder/$name2'>View Online</a>
			<a class='downloadbtn1' href='uploadfolder/$name2'download>Download</a>
			<input class='contentheading1' value='uploaded by'readonly><input class='contentheading1' value='$useremail' readonly >
			</div></form>"
			;	
	  }

	 }
	 
	else
	{
		echo"Login to View and Upload assignments";
		}
	?>
	
	 <!-- check for download button pressed-->
	<?php
if(isset($_POST['downloadbtn1']) )
{
	if(isset($_SESSION['loginname']))
	{
	header("location:assignments.php?login");/*--passing error to URL*/}
	else
	{header("location:assignments.php?logout")/*--passing error to URL*/;}
}

		
?>
	

</div>

</div>
</body>
</html>

<!--end of html website code-->

<!--including footer files for website-->

<?php
include_once("footer.php");
?>





	 
			






