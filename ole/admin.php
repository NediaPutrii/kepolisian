<?php 

session_start();

if( !isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>INI HALAMAN ADMIN</h1>
</body>
</html>