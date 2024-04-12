<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión con Google</title>
    <link rel="stylesheet" href="http://localhost/Speedy/CSS/iniciarsesion.css">
</head>
<body>
    <header>
        <div class="container3">
            <div class="logo">
                <img src="http://localhost/Speedy/IMGS/logo.png" alt="Logo">
            </div>
        </header>
    <div class="container">
        <h1>Iniciar Sesión</h1>
        <form id="login-form">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Iniciar Sesión</button>
        </form>
        </div>
        <div class="container2">
        <p id="message"></p>
        <button id="google-login">Iniciar Sesión con Google</button>
    </div>

    <script src="http://localhost/Speedy/SCRITPS/iniciarsesion.js"></script>
</body>
</html>
