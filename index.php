<?php
session_start(); 





if(isset($_GET["logout"])){
	session_destroy();
	die(123);
}
 
if(isset($_SESSION['username'])){
	
	
	header('Location: main.php');
	die();
}


$msg = "";


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    if ($name === 'ron' && $password === '123') {
        $_SESSION['username'] = $name;
        header('Location: main.php');
        exit();
    } else {


        if ($name !== 'ron') {
            echo 'Incorrect username';
        } elseif ($password !== '123') {
            echo 'Incorrect password';



        if ($name !== 'admin') {
            $msg =  'Incorrect username';
        } elseif ($password !== 'admin') {
            $msg =  'Incorrect password';


        }
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
        padding-right: 50px;z
        padding-bottom: 50px;
        padding-left: 50px;
        text-align: center;
        width: 300px;
        height: 100px;
        

    }
</style>
</head>
<body>

<h1>ADDITION</h1>

<h2>ENTER YOUR CREDENTIALS</h2>




<form action="" method="post">
    Username: <input name="name" type="text"><br>
    Password: <input name="password" type="password"><br>
    <input type="submit" name="submit">
</form>

</body>
</html>
