<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="http://localhost/Speedy/CSS/menu.css">
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
    <div class="crearcuenta">
    <nav>
        <a href="http://localhost/Speedy/PHP/CrearCuenta.php" id="crearcuenta">Crear Cuenta<img src="http://localhost/Speedy/IMGS/user.png"></a>
    </nav>
    
</div>
</div>
</header>

<a href="http://localhost/Speedy/PHP/Inicio.php">Inicio</a>
    <a href="http://localhost/Speedy/PHP/Comentarios.php">Comentarios</a>
    <a href="http://localhost/Speedy/PHP/Menu.php">Menu</a>
    <a href="http://localhost/Speedy/PHP/Pedidos.php">Pedidos</a>
    <a href="http://localhost/Speedy/PHP/Contacto.php">Contacto</a>

<!--fin topbar-->
    </div>
    
        <h1> 
            
                <a href="tacos">Tacos</a>
                <a href="platosprincipales">Platos Principales</a>
                <a href="bebidas">Bebidas</a>
                <a href="postres">Postres</a>
            
            
    </h1>
    <div class="container">
        <section id="tacos">
            <h2>Tacos</h2>
            <div class="products" id="tacos">
                <!-- Aquí se listarán los productos de comida -->
                <div class="producto">
                
                </div>
            </div>
        </section>
        <section id="platosprincipales">
            <h2>Platos Principales</h2>
            <div class="products" id="platosprincipales">
                <!-- Aquí se listarán los productos de bebida -->
                <div class="producto">

                <class id="1" img src=""></class>
            </div>
        </section>

        <section id="bebidas">
            <h2>Postres</h2>
            <div class="products" id="bebidas">
                <!-- Aquí se listarán los productos de postre -->
                <div class="producto">

            </div>
        </div>
        </section>

        <section id="postres">
            <h2>Postres</h2>
            <div class="products" id="postres">
                <!-- Aquí se listarán los productos de postre -->
                <div class="producto">

            </div>
        </div>
        </section>
    
        <h2>Carrito de Compras</h2>
        <div id="cart">
            <!-- Aquí se mostrarán los productos añadidos al carrito -->
        </div>
        <button id="confirm-button" onclick="confirmPurchase()">Confirmar Compra</button>
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
    <script src="http://localhost/Speedy/SCRITPS/menu1.js"></script>
</body>
</html>
