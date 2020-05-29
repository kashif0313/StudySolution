
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
			<div class="pastpasersimg" onclick="openpage(this)">CS 101</div>
			<div class="pastpasersimg" onclick="openpage(this)">CS 201</div>
			<div class="pastpasersimg" onclick="openpage(this)">CS 302</div>
			<div class="pastpasersimg" onclick="openpage(this)">ECO 401</div>
		</div><br>
		
		<div class="solved">
			<div class="pastpasersimg" onclick="openpage(this)">ENG 101</div>
			<div class="pastpasersimg" onclick="openpage(this)">ENG 201</div>
			<div class="pastpasersimg" onclick="openpage(this)">MGT 101</div>
			<div class="pastpasersimg" onclick="openpage(this)">MGT 211</div>
		</div>
		
	</div>
	
	
	
	<div class="pagination">
		<a href="Pastpapers.php" class="active">1</a>
		<a href="Pastpapers1.php">2</a>

	</div>
</div>
</body>
</html>
<!--end of html website code-->

<!--including footer files for website-->
<?php
include_once("footer.php");
?>
