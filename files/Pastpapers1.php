
<!--including header  files for website-->

<?php
include_once("header.php");
?>

<!--html website code-->

<html>
<head><title>StudySolution|Pastpapers</title>
<link rel="stylesheet" href="semesterpage.css">
<script type="text/javascript" src="indexpage.js"></script>
</head>
<body>
<div class="container">
<span class="websitenametop" >Past Papers</span>
	<div class="websitebody">
		<div class="solved">
			
			<div class="pastpasersimg" onclick="openpage(this)">MTH 101</div>
			<div class="pastpasersimg" onclick="openpage(this)">MTH 301</div>
			<div class="pastpasersimg" onclick="openpage(this)">MTH 302</div>
			<div class="pastpasersimg" onclick="openpage(this)">PAK 301</div>
		</div><br>
		
		
		
	</div>
	
	
	
	<div class="pagination">
		<a href="Pastpapers.php">1</a>
		<a href="Pastpapers1.php" class="active">2</a>

	</div>
</div>
</body>
</html>
<!--end of html website code-->

<!--including footer files for website-->
<?php
include_once("footer.php");
?>
