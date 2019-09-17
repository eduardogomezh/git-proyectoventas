<?php

$usuario_correcto = "cliente";
$palabra_secreta_correcta = "123";
$usuario_correcto2 = "admin";
$palabra_secreta_correcta2 = "456";


$usuario = $_POST["usuario"];
$palabra_secreta = $_POST["palabra_secreta"];
$usuario2 = $_POST["usuario"];
$palabra_secreta2 = $_POST["palabra_secreta"];


if ($usuario === $usuario_correcto && $palabra_secreta === $palabra_secreta_correcta) {
    
    $_SESSION["usuario"] = $usuario;
 
    header("Location: cliente.html");
} elseif ($usuario2 === $usuario_correcto2 && $palabra_secreta2 === $palabra_secreta_correcta2) {
    
    session_start();
    
    $_SESSION["usuario"] = $usuario2;

    header("Location: administrador.html");
}else {
    
    echo "El usuario o la contraseña son incorrectos";
}

