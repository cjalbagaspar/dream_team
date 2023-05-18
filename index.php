<?php
session_start(); 



//this condition checked if username is correct

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
        }
    }
}
?>

<html>
<head>
</head>
<body>



<form action="" method="post">
    Username: <input name="name" type="text"><br>
    Password: <input name="password" type="password"><br>
    <input type="submit" name="submit">
</form>

</body>
</html>
