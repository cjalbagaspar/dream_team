<?php

if(isset($_POST['submit'])){

    $name = $_POST['name'];

    echo 'HELLO' .$name;
}

?>

<html>

<head>

<style type="text/css">

*{
	color:red;
}
</style>
</head>
<body>

<form action="" method="post">
Username: <input name="name" type="text"><br>
Password: <input name="password" type="password"><br>
<input type="submit" name="submit">
</form>

</body>
</html>