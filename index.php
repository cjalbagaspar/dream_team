<?php

session_start(); 


if(isset($_GET["logout"])){
	session_destroy();
	die();
}

if(isset($_SESSION['username'])){
	
	
	header('Location: main.php');
	die();
}

$msg = "";
//this condition checked if username is correct

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    if ($name === 'admin' && $password === 'admin') {
		
		
        $_SESSION['username'] = $name;
		$_SESSION['login'] = 1;
		
        header('Location: main.php');
        exit();
		
    } else {
        if ($name !== 'ron') {
            $msg =  'Incorrect username';
        } elseif ($password !== '123') {
            $msg =  'Incorrect password';
        }
    }
}
?> 



<html>
<head>
<style type="text/css">
.error{
	color:blue;
	font-weight:bold;
}
</style>
</head>
<body>




<form action="" method="post">
	
    Username: <input name="name" type="text"><br>
    Password: <input name="password" type="password"><br>
    <input type="submit" name="submit">
	<div class="<?php if($msg) echo "error"; ?>"><?php echo $msg; ?></div>
	
</form>

</body>
</html>
