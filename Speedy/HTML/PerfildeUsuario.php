<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
    <link rel="stylesheet" href="http://localhost/Speedy/CSS/perfil.css">
</head>
<body>
  
    <!--Topbar-->
    <header>
        <div class="logo">
            <a href="../HTML/Inicio.html"><img src="../IMGS/speedylogod.png" alt="Logo"></a>
        </div>
        <div class="textlogo" alt="textlogo">
            <img src="../IMGS/speedytextlogo.png" alt="Logo">
        </div>
        <div class="miperfil">
        <nav>
            <a href="PerfildeUsuario.html" id="miperfil">Mi perfil<img src="../IMGS/user.png"></a>
        </nav>
        
    </div>
    


<div class="topbar">
    <a href="../HTML/Inicio.html">Inicio</a>
    <a href="../HTML/Comentarios.html">Comentarios</a>
    <a href="../HTML/Menu.html">Menu</a>
    <a href="../HTML/Pedidos.html">Pedidos</a>
    <a href="../HTML/Contacto.html">Contacto</a>

    <!--fin topbar-->
</div>
    
</header>
    <div class="container">
        <h1>Mi Perfil</h1>
        <div id="profile-info">
            <p img src="../IMGS/user.png"></p>
            <p><strong>Nombre de Usuario:</strong> <span id="username">Usuario123</span></p>
            <p><strong>Correo Electrónico:</strong> <span id="email">usuario123@example.com</span></p>
            <p><strong>Número de Teléfono:</strong> <span id="phone">1234567890</span></p>
        </div>
        <button onclick="editProfile()">Editar Perfil</button>
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
    <script src="perfil.js"></script>
</body>
</html>
