

<!--including header files for website-->

<?php
include_once("header.php");
?>


<!--html website code-->

<html>
<head><title>StudySolution|Subject Code</title>
<link rel="stylesheet" href="semesterpage.css">
<script type="text/javascript" src="indexpage.js"></script>
</head>
<body>
<div class="container">
<output class="websitenametop" >Subject code</output>
	<div class="websitebody">
		
		
		<div class="courseimg" onclick="openpage(this)" >MTH 101</div>
		<div class="courseimg" onclick="openpage(this)" >MTH 301</div>
		<div class="courseimg" onclick="openpage(this)">MTH 302</div>
		<div class="courseimg" onclick="openpage(this)" >PAK 301</div>
		<!--<div class="courseimg" onclick="openpage(this)" >ETH 201</div>
		<div class="courseimg" onclick="openpage(this)" >MGT 101</div>-->
	</div>
	<div class="pagination">
		<a href="Semesterpage.php" >1</a>
		<a href="Semesterpage2.php"class="active">2</a>
	</div>
</div>
</body>
</html>
<!--end of html website code-->

<!--including footer files for website-->
<?php
include_once("footer.php");
?>