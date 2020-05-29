
<!--including header and connection files for website-->

<?php
include_once("header.php");
include_once("connectdb.php");
?>

<!--html website code-->

<html>
<head><title>StudySolution|Upload</title>
<link rel="stylesheet" href="upload.css">
</head>
<body>
<div class="container">
	<div class="content_box">
		<form method="post" enctype="multipart/form-data">
		<p class="titleUpload">Upload Assignment</p>
			<input class="inputfilename" placeholder="Email" name="email" ><br>
			<input class="inputfilename" placeholder="Filename" name="filename" ><br>
			<input type="file" name="filenames" class="choosefile"><br>
			<p class="supportfile">Support file type .PDF and .DOCX</p>
			<button type="submit" name="Submit" class="submitbtn">Upload</button>
			
<!--error handling to display custom message -->

			<?php 
			
	if(isset($_GET['UploadSuccess']))
	{
		echo"<p class='errormsg'>Successfully Uploaded</p>";	
	}
	if(isset($_GET['UploadUnsuccess']))
	{
		echo"<p class='errormsg'>Filetype not Supported</p>";	
	}
	if(isset($_GET['noname']))
	{
		echo"<p class='errormsg'>Enter file name </p>";	
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

<!--check for submit button press-->


<?php
if(isset($_POST['Submit']))
{
	$nameoffile = $_POST['filename'];
	$Email = $_POST['email'];
	$id = $_SESSION['id'];
	
	/*check input fields are empty or not*/
	
	if(empty($nameoffile))
	{header("location:uploadfile.php?noname");		/*sending error to URL*/
			exit();}
	else if(empty($Email))
	{header("location:uploadfile.php?noname");
			exit();}
			
		/*sending input data and file to database */
			
else{
	$files = $_FILES['filenames'];
	$filename = $_FILES['filenames']['name'];
	$fileextract =explode('.',$filename);
	$fileactualextract = strtolower(end($fileextract));
	$filetempname = $_FILES['filenames']['tmp_name'];
		
		
		/*check for specfic file extention in order to upload specific files */
		
	if($fileactualextract == "pdf" || $fileactualextract == "docx")
	{
		
		$filenewname = "assignment".$id.".".$fileactualextract;
		$fileDest = 'uploadfolder/'.$filenewname;
		move_uploaded_file($filetempname , $fileDest);
		echo"<p class='errormsg'>$filenewname </p>";
		
		/*sql query changed for safety of my website */
		
		$sql = "code to insert valus get from input fields and upload to database"
		
			mysqli_query($connectdb,$sql);
		header("location:uploadfile.php?UploadSuccess"); 	/*sending error to URL*/
		
			exit();
		
	}
	else
	{
		header("location:uploadfile.php?UploadUnsuccess");		/*sending error to URL*/
			exit();
	}
}
}
?>