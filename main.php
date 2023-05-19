<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> welcome_user
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
<<<<<<< HEAD
=======
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
        border: 6px solid green;
        background-color: red;
        padding-top: 50px;
        padding-right: 50px;
        padding-bottom: 50px;
        padding-left: 50px;
    
        

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


if(isset($_POST['submit'])){

    $name = $_POST['name'];

    echo $name;
}

?>

</body>

>>>>>>> ec91246eff8f3256fbea6ac6a56ccdb696544855
=======
>>>>>>> welcome_user
</html>