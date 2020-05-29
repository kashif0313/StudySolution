
<!--code to connect to database-->
<?php
$servername = "name of server providing database"; 		/*servername of database provider*/
$username="username of database connection";				/*username to connect database */
$password="password of database connection";					/*password to connect database*/
$dbname="name of database created";		/*database name  to connect database*/
$connectdb = mysqli_connect($servername,$username,$password,$dbname);		/*code to connect to database*/


?>