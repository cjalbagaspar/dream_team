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

    .pad {
        border: 6px solid black;
        background-color: red;
        padding-top: 50px;
        padding-right: 50px;
        padding-bottom: 50px;
        padding-left: 50px;
        text-align: center;
        width: 170;
        height: 100px;
        align

        

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

</html>