<!--including header and connection files for website-->

<?php
include_once("header.php");
?>

<!--html website code-->

<html>
<head><title>StudySolution</title>
<link rel="stylesheet" href="index.css">
<script type="text/javascript" src="indexpage.js"></script>
</head>
<body>
<div class="container">
<output class="websitenametop" >Study Soluition</output>
	<div class="maindisplay">
		Here you can find all kinds of handouts and pastpapers
		of all subjects
	</div>
	<div class="websitebody">
		<div class="imgcontainer">
			<div class="headingimg" >Solved Pastpapers</div>
			<img class="imgofpage" src="papers.jpg" onclick="solvedpapers()">
		</div>
		<div class="imgcontainer">
			<div class="headingimg" >UnSolved Pastpapers</div>
			<img class="imgofpage" src="finals.jpg"onclick="solvedpapers()">
		</div>
		<div class="imgcontainer">
			<div class="headingimg">Assignments</div>
			<img class="imgofpage" src="assignments.jpg"onclick="assignments()">
		</div>
		<div class="imgcontainer">
			<div class="headingimg">Handouts</div>
			<img class="imgofpage" src="handout.jpg"onclick="handouts()">
		</div>
	</div>
</div>
</body>
</html>

<!--end of html website code-->

<!--including footer files for website-->


<?php
include_once("footer.php");
?>