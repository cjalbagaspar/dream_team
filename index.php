<?php

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $password = $_POST['password'];

    if($name === 'ron' && $password === '123'){
     
        header('Location: main.php');
        die();
    }else{
 
        echo 'LOGIN FAILED';

        
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