<?php
session_start();
session_destroy(); //Es para borrar todas las sesiones al recargar
//se puede usar unsett
//unset($_SESSION['login']);
if(isset($_SESSION['login'])){
    echo 'Bienvenido session '.$_SESSION['login'];
}
else{
    echo "Sin sesion<br>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form method="post" action="login.php">
        Usuario: <input type="text" name="username"/><br>
        Contraseña: <input type="password" name="password"/><br>
        <input type="submit" name="submit"/><br>
    </form>
</body>
</html>