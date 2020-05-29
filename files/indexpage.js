
function solvedpapers()
{
	//open new php file 
	window.location.replace("Pastpapers.php");
}

function assignments()
{
	//open new php file 
	window.location.replace("assignments.php");
}
function handouts()
{
	//open new php file 
	window.location.replace("Semesterpage.php");
}
function openpage(id)
{
	//temporary store variable on user computer 
	var courseid = id.innerHTML;
	//alert(courseid);
	localStorage.setItem("storageName",courseid);
	window.open("bookandpaper.php");
}




