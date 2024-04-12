<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preparate para Pedir Algo!</title>
    <link rel="stylesheet" href="http://localhost/Speedy/CSS/crearcuenta.css">
</head>
<body>
      <!--Topbar-->
      <header>
        <div class="logo">
            <a href="http://localhost/Speedy/PHP/Inicio.php"><img src="http://localhost/Speedy/IMGS/speedylogod.png" alt="Logo"></a>
        </div>
        <div class="textlogo" alt="textlogo">
            <img src="http://localhost/Speedy/IMGS/speedytextlogo.png" alt="Logo">
        </div>
        
    </div>
    
</header>

    <div class="container">
        <h1>Crear Cuenta</h1>
        <form id="signup-form">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
            <label for="phone">Número de Teléfono:</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Crear Cuenta</button>
        </form>
        <p id="message"></p>
    </div>
    <!--Footer-->
<footer>
    <div class="container2">
        <div class="social-media">
            <a href="https://facebook.com"><img src="https://cdn1.iconfinder.com/data/icons/social-media-rounded-corners/512/Rounded_Facebook_svg-128.png" alt="Facebook"></a>
            <a href="https://twitter.com"><img src="https://cdn1.iconfinder.com/data/icons/social-media-rounded-corners/512/Rounded_Twitter5_svg-512.png" alt="Twitter"></a>
            <a href="https://instagram.com"><img src="https://cdn1.iconfinder.com/data/icons/social-media-rounded-corners/512/Rounded_Instagram_svg-512.png" alt="Instagram"></a>
            <a href="https://linkedin.com"><img src="https://cdn1.iconfinder.com/data/icons/social-media-rounded-corners/512/Rounded_Linkedin2_svg-512.png" alt="LinkedIn"></a>
        </div>
        <p>&copy; 2024 Speedy N via</p>
    </div>
</footer>
        
        <script src="http://localhost/Speedy/SCRITPS/crearcuenta.js"></script>
        </body>
        </html>
