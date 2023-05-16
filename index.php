<?php
session_start();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    if ($name === 'ron' && $password === '123') {
        $_SESSION['username'] = $name;
        header('Location: main.php');
        exit();
    } else {
        $error = 'LOGIN FAILED';
    }
}
?>

<html>
<head>
</head>
<body>

<?php if (isset($error)) { ?>
    <p><?php echo $error; ?></p>
<?php } ?>

<form action="" method="post">
    Username: <input name="name" type="text"><br>
    Password: <input name="password" type="password"><br>
    <input type="submit" name="submit">
</form>

</body>
</html>
