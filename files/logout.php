
<!--simple logout session to destroy session or logout -->
<?php
session_start();
session_unset();
session_destroy();
header("location:index.php");
?>