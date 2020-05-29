function login()
{
	window.location.replace("login.php");
}
function register()
{
	window.location.replace("register.php");
}

function opensidepanel()
{
	document.getElementById("headerlinks").style.display = "block";
	document.getElementById("closebtn").style.display = "flex";
	document.getElementById("openbtn").style.display = "none";
}
function closesidepanel()
{
	document.getElementById("headerlinks").style.display = "none";
	document.getElementById("closebtn").style.display = "none";
	document.getElementById("openbtn").style.display = "flex";
}
