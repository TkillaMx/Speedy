<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Contacto</title>
    <link rel="stylesheet" href="http://localhost/Speedy/CSS/contacto.css">
</head>
<body>
    <!--Topbar-->
     <!--Topbar-->
     <header>
        <div class="logo">
            <a href="http://localhost/Speedy/PHP/Inicio.php"><img src="http://localhost/Speedy/IMGS/speedylogod.png" alt="Logo"></a>
        </div>
        <div class="textlogo" alt="textlogo">
            <img src="http://localhost/Speedy/IMGS/speedytextlogo.png" alt="Logo">
        </div>
        <div class="crearcuenta">
        <nav>
            <a href="http://localhost/Speedy/PHP/CrearCuenta.php" id="crearcuenta">Crear Cuenta<img src="http://localhost/Speedy/IMGS/user.png"></a>
        </nav>
        
    </div>
    </div>
</header>

<div class="topbar">
<a href="http://localhost/Speedy/PHP/Inicio.php">Inicio</a>
    <a href="http://localhost/Speedy/PHP/Comentarios.php">Comentarios</a>
    <a href="http://localhost/Speedy/PHP/Menu.php">Menu</a>
    <a href="http://localhost/Speedy/PHP/Pedidos.php">Pedidos</a>
    <a href="http://localhost/Speedy/PHP/Contacto.php">Contacto</a>

    <!--fin topbar-->
</div>
<div class="lineablanca"></div>
    <div class="brownbackground">
<div class="contenedor">
    <div class="masizquierda">
        <h1>CONTÁCTANOS</h1>
        <p>Blvd. Cucapah 20100, Amp. Guaycura, 22214 Tijuana, B.C., México <br>


            speedynvia@gmail.com <br>
            
            664-000-0000</p>
    </div>
    <div class="izquierda">
      
<form action="#" method="post">
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="name" required>

    <label for="address">Dirección:</label>
    <input type="text" id="address" name="address" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="phone">Teléfono:</label>
    <input type="text" id="phone" name="phone" required>

    <label for="subject">Asunto:</label>
    <input type="text" id="subject" name="subject" required>

    <label for="message">Mensaje:</label>
    <textarea id="message" name="message" required></textarea>

    <input type="submit" value="Enviar">
</div>
<div class="derecha"></div>
</div>
</div>
</form>
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
</body>
</html>