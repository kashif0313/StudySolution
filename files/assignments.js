

function openalert()
{
	//alert("called from php");
	closewindow = window.open("popuplogin.php",'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=1076,height=768,directories=no,location=no') 

}

function clickedonline()
{
	var btn = document.getElementsByClassName("viewonlinebtn");
	var btn2 = btn.innerHTML;
	alert(btn2);
}