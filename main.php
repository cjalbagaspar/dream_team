<?php
session_start();

if(isset($_GET['logout'])){
	
	header('Location: index.php');
	session_destroy();
	exit();
	
}
?>

<html>
<head>
<style type="text/css">

h1{
	font-size: 100px;
	text-align: center;
}
</style>
</head>
<body>

<h1>WELCOME HABADUDI</h1>

<form action="" method="get">

<button type="submit" name="logout">logout</button>
</form>
</input>
</body>
</html>