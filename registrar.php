<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Proyecto v1</title> 
    <link rel="stylesheet" type="text/css" href="css/RegistroE.css"> 
</head>
<body>
    
    <header class="header">
        <a href="Index.html" class="mylogo"><span>Proyecto v1</span></a> 
        <nav class="navbar"> 
            <a href="Index.html">INICIO</a>
            <a href="Products.html">PRODUCTOS</a>
            <a href="WhatsSm.html">QUIÉNES SOMOS?</a>
            <a href="Contact.html">CONTACTO</a>
            <a href="Usuario.html" class="icon-link"><img src="img/usuario.png" alt="User" class="nav-icon"></a> <!-- Enlace al perfil de usuario con ícono -->
            <a href="Carrito.html" class="icon-link"><img src="img/carrito-de-compras.png" alt="Cart" class="nav-icon"></a> <!-- Enlace al carrito de compras con ícono -->
        </nav>
    </header>
    
    <!-- Mensaje de usuario registrado exitosamente -->
    <h3 class="RegisteExitoso">
        USUARIO REGISTRADO EXITOSAMENTE!!! <br>
        <a href="Usuario.html" style="color: blue;">Regresa a la página de inicio de sesión</a>
    </h3>

<?php
include 'con_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $apellidop = isset($_POST['apellidop']) ? $_POST['apellidop'] : '';
    $apellidom = isset($_POST['apellidom']) ? $_POST['apellidom'] : '';
    $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
    $numerot = isset($_POST['numerot']) ? $_POST['numerot'] : '';
    $contraseña = isset($_POST['contraseña']) ? $_POST['contraseña'] : '';
    $fechaR = date("Y-m-d");

    // Encriptar la contraseña antes de almacenarla
    $contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);

    // Preparar la consulta usando prepared statements
    $stmt = $conexion->prepare("INSERT INTO `datos` (`nombre`, `apellidop`, `apellidom`, `correo`, `numerot`, `contraseña`, `fechar`) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $nombre, $apellidop, $apellidom, $correo, $numerot, $contraseña_hash, $fechaR);

    

    $stmt->close();
} else {
    echo '<h3 class="bad">Por favor complete los campos!</h3>';
}

$conexion->close();
?>
    
    
</body>
</html>
