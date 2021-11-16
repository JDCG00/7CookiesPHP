<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1>Cookies</h1>
    <div>
        <a href="seguir.php">Seguir navegando</a>&nbsp;&nbsp;&nbsp;
        <a href="borrar.php">Borrar cookie</a>
    </div>
</body>
</html>
<?php
    setcookie("usuario", "Juan Diego",time()+60);
    if(isset($_COOKIE['usuario'])){
        echo '<br/>';
        echo $_COOKIE['usuario'];
    }
?>