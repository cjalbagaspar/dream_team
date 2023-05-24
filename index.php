<?php

session_start(); 
//TESTING

if(isset($_GET["logout"])){
	session_destroy();
	die(123);
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
        if ($name !== 'admin') {
            $msg =  'Incorrect username';
        } elseif ($password !== 'admin') {
            $msg =  'Incorrect password';

        }
    }
}
?> 



<html>

<head>

<style type="text/css">
.error{
	color:red;
	font-weight:bold;
}

*{
	color:red;

}
</style>
</head>
<body>

<h1>ADDITION</h1>


<form action="" method="post">
	
    Username: <input name="name" type="text"><br>
    Password: <input name="password" type="password"><br>
    <input type="submit" name="submit">
	<div class="<?php if($msg) echo "error"; ?>"><?php echo $msg; ?></div>
	
</form>

</body>
</html>