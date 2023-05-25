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
    .error {
        color: red;
        font-weight: bold;
    }

    .pad {
        border: 6px solid black;
        background-color: pink;
        text-align: center;
        margin: auto;
        height: 120px;
        width: 160px;
        padding: 50px;

    }

    .button {
        background-color: grey;
        /* Green */
        color: black;
        padding: 3px 3px;
        border: solid black 2px;
        margin-top: 20px;
        margin-left: -110px;
    }

    .align_text {
        margin-top: 130px;
        text-align: center;
    }
    input {
        color: red;
        background-color: white;
    }
    </style>
</head>

<body>

    <div class="align_text">

        <h2>ENTER YOUR CREDENTIALS</h2>

        <h2>User:ron <br> pass:123</h2>

    </div>

    <div class="pad">
        <form action="" method="post">
            Username: <input name="name" type="text"><br>
            Password: <input name="password" type="password"><br>
            <input type="submit" class="button" name="submit">
        </form>
    </div>
</body>

</html>