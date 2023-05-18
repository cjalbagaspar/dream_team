<?php
session_start(); 


$msg = "";
//this condition checked if username is correct

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    if ($name === 'admin' && $password === 'admin') {
        $_SESSION['username'] = $name;
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
	color:red;
	font-weight:bold;
}
</style>
</head>
<body>



<form action="" method="post">
	<div class="<?php if($msg) echo "error"; ?>"><?php echo $msg; ?></div>
    Username: <input name="name" type="text"><br>
    Password: <input name="password" type="password"><br>
    <input type="submit" name="submit">
</form>

</body>
</html>
