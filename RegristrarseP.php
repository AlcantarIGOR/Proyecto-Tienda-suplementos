<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto v1 - Registrarse</title>
    <link rel="stylesheet" type="text/css" href="css/registrarse.css">
</head>
<body>
    <header class="header">
        <a href="Index.html" class="mylogo"><span>Proyecto v1</span></a>
        <nav class="navbar">
            <a href="Index.html">INICIO</a>
            <a href="Products.html">PRODUCTOS</a>
            <a href="WhatsSm.html">QUIEN SOMOS?</a>
            <a href="Contact.html">CONTACT</a>
            <a href="Usuario.html" class="icon-link"><img src="img/usuario.png" alt="User" class="nav-icon"></a>
            <a href="Carrito.html" class="icon-link"><img src="img/carrito-de-compras.png" alt="Cart" class="nav-icon"></a>
        </nav>
    </header>

    <div class="registration-form">
        <h2>Registro</h2>
        <form action="registrar.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="apellidop">Apellido Paterno:</label>
                <input type="text" id="apellidop" name="apellidop" required>
            </div>
            <div class="form-group">
                <label for="apellidom">Apellido Materno:</label>
                <input type="text" id="apellidom" name="apellidom" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="correo" required>
            </div>
            <div class="form-group">
                <label for="numerot">Número de Teléfono:</label>
                <input type="tel" id="numerot" name="numerot" required>
            </div>
            <div class="form-group">
                <label for="contraseña">Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" required>
            </div>
            <button type="submit">Registrarse</button>
        </form>
    </div>

    <footer>
        <div class="social-icons">
            <a href="https://www.facebook.com/profile.php?id=100066919782190"><img src="img/facebook.png" alt="Facebook"></a>
            <a href="https://twitter.com/Alc_Juan164"><img src="img/gorjeo.png" alt="Twitter"></a>
            <a href="https://www.instagram.com/its.alc4ntar_/"><img src="img/instagram.png" alt="Instagram"></a>
        </div>
    </footer>
</body>
</html>
