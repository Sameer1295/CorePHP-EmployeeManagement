<?php 
session_start();
session_unset();
header("Location: user_login.php");
echo "<script>You are logged out!</script>";

?>