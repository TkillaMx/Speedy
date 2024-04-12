<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Compra</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/Speedy/CSS/checkout.css">
</head>
<body>
    
    <div class="container">
        <h1>¡Compra Exitosa!</h1>
        <p>Se ha realizado la compra correctamente.</p>
        <p>Artículos comprados:</p>
        <ul id="purchased-items">
            <!-- Los artículos comprados se agregarán aquí dinámicamente -->
        </ul>
        <p>Monto total de la compra: <span id="total-amount">$0</span></p>
        <p>Monto restante en su cuenta: <span id="remaining-amount">$200</span></p>
        <p>Tiempo estimado de llegada del producto: <span id="estimated-time">3-5 días laborables</span></p>
    </div>

    <script src="http://localhost/Speedy/SCRITPS/checkout.js"></script>
</body>
</html>
