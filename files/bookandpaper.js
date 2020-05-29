//refresh after popup window closes
 window.onunload = refreshParent;
    function refreshParent() {
        window.opener.location.reload(true);
		
	
	
    }
var closewindow;
//get temporary store variable on user computer passed from another php file
window.onload = function() {
var store = localStorage.getItem("storageName");
//alert(store);
document.getElementById("pastpapers").innerHTML = store;
document.getElementById("handouts").innerHTML = store;
}
function openalert()
{
	//open new window in popup
	closewindow = window.open("popuplogin.php",'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=1076,height=768,directories=no,location=no') 

}
function closepopup()
{
	//closes popup window;
	window.close();
	
}

	function openhandoutsonline()
{
	var subjectname = document.getElementById("handouts").innerHTML;
	switch(subjectname)
	{
		case "string or number":
		{
			window.open( "file path");
			break;
		}

		case "string or number":
		{
			window.open( "file path");
			break;
		}
				
	}
}
function downloadhandouts()
{
	var subjectname = document.getElementById("handouts").innerHTML;
	switch(subjectname)
	{
		case "string or number":
		{
			window.open( "file path");
			break;
		}

		case "string or number":
		{
			window.open( "file path");
			break;
		}
				
	}
}
function downloadpastpapers()
{
var subjectname = document.getElementById("pastpapers").innerHTML;
switch(subjectname)
{
		case "string or number":
		{
			window.open( "file path");
			break;
		}

		case "string or number":
		{
			window.open( "file path");
			break;
		}
}

}
function openpastpapers()
{
	var subjectname = document.getElementById("pastpapers").innerHTML;
	switch(subjectname)
	{
		case "string or number":
		{
			window.open( "file path");
			break;
		}

		case "string or number":
		{
			window.open( "file path");
			break;
		}
				
	}
}
