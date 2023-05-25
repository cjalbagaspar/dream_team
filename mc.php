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
        border: 6px solid green;
        background-color: pink;
        text-align: center;
        width: 300px;
        height: 100px;
        margin: auto;
        width: 20%;
        height: 20%;
        padding: 20px;


    }

    .button {
        background-color: grey;
        /* Green */
        border: none;
        color: blue;
        padding: 10px 10px;
        text-decoration: none;
        display: inline-block;
        margin: 0;

    }

    .align_text {
        text-align: center;
    }
    </style>
</head>

<body>

    <div class="align_text">

        <h2>ENTER YOUR CREDENTIALS</h2>

        <h2>User:ron <br> pass:123</h2>

        <h3>testing!</h3>

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