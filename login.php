<?php
//Uso se session
$user="fernan";
$pass="1234";
//Iniciar la sesión
session_start();
if($_POST['username']==$user && $_POST['password']==$pass){
    $_SESSION['login']='administrador';
    echo "Sesión Creada";
}
else{
    echo "Usuario o contraseña invalida";
}







?>
