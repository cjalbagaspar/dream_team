<html>

<head>

    <style>
    .button {
        background-color: black;
        /* Green */
        border: none;
        color: white;
        padding: 10px 10px;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }
/* Padding background */
    .pad {
        border: 6px solid black;
        background-color: red;
        padding-top: 50px;
        padding-right: 50px;
        padding-bottom: 50px;
        padding-left: 50px;
        text-align: center;
        width: 300px;
        height: 100px;
        

    }
    </style>
</head>

<body>

    <div class="pad">
        <form action="" method="post">
            Username: <input name="name" type="text"><br>
            Password: <input name="password" type="password"><br>
            <input type="submit" class="button" name="submit">
        </form>
    </div>

    <?php


session_start(); 


<<<<<<< HEAD
if(isset($_GET["logout"])){
	session_destroy();
	die();
}
 
if(isset($_SESSION['username'])){
	
	
	header('Location: main.php');
	die();
=======
    echo $name;
>>>>>>> design2
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



<<<<<<< HEAD
<html>
<head>
<style type="text/css">
.error{
	color:pink;
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
=======
</body>

</html>
>>>>>>> design2
