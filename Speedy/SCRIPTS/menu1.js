// Ejemplo de productos (normalmente estos datos se cargarían desde una base de datos o API)
const tacos = [
    { id: 1, name: "Taco de Asada", price: 28, image: "../IMGS/tacoasada.PNG" },
    { id: 2, name: "Taco de Carnitas", price: 28,  image: "../IMGS/tacocarnitas.PNG" },
    { id: 3, name: 'Taco de Birria ', price: 30, image: "../IMGS/tacobirria.PNG" },
    { id: 4, name: 'Taco de Adobada ', price: 28, image: "../IMGS/tacoadobada.PNG" },
    { id: 5, name: 'Taco de Barbacoa ', price: 32, image: "../IMGS/tacobarbacoa.PNG" },
    { id: 6, name: 'Taco de Pescado', price: 30, image: "../IMGS/tacopescado.PNG" }
    
];

const platosprincipales = [
    { id: 7, name: 'Tamales', price: 30, image: "../IMGS/tacoasada.PNG" },
    { id: 8, name: 'Enchiladas Rojas', price: 35, image: "../IMGS/tacoasada.PNG" },
    { id: 9, name: 'Enchiladas Verdes', price: 35, image: "../IMGS/tacoasada.PNG" },
    { id: 10, name: 'Sope', price: 22, image: "../IMGS/tacoasada.PNG" },
];

const bebidas = [
    { id: 11, name: 'Refrescos', price: 20, image: "../IMGS/tacoasada.PNG" },
    { id: 12, name: 'Aguan Natural', price: 18, image: "../IMGS/tacoasada.PNG" },
    { id: 13, name: 'Aguas Fresca', price: 28, image: "../IMGS/tacoasada.PNG" },
    { id: 14, name: 'Agua Carbonatada', price: 20, image: "../IMGS/tacoasada.PNG" },
];

const postres = [
    { id: 15, name: 'Flan Napolitano', price: 45, image: "../IMGS/tacoasada.PNG" },
    { id: 16, name: 'Pan de Elote', price: 30, image: "../IMGS/tacoasada.PNG" },
    { id: 17, name: 'Arroz con Leche', price: 45, image: "../IMGS/tacoasada.PNG" },
    { id: 18, name: 'Platano Frito', price: 25, image: "../IMGS/tacoasada.PNG" },
    { id: 19, name: 'Pay de Limon', price: 45, image: "../IMGS/tacoasada.PNG" },
];


// Función para mostrar productos
function showProducts(products, containerId) {
    const container = document.getElementById(containerId);
    container.innerHTML = '';
    products.forEach(product => {
        const productElement = document.createElement('div');
        productElement.classList.add('product');
        productElement.innerHTML = `
            <p>${product.name} - $${product.price}</p>
            <button onclick="addToCart(${product.id})">Añadir al Carrito</button>
        `;
        container.appendChild(productElement);
    });
}

// Función para añadir productos al carrito
function addToCart(productId) {
    const product = findProduct(productId);
    if (product) {
        const cart = document.getElementById('cart');
        const cartItem = document.createElement('div');
        cartItem.classList.add('cart-item');
        cartItem.innerHTML = `
            <p>${product.name} - $${product.price}</p>
            <button onclick="removeFromCart(${product.id})">Eliminar</button>
        `;
        cart.appendChild(cartItem);
    }
}

// Función para eliminar productos del carrito
function removeFromCart(productId) {
    const cartItem = document.querySelector(`.cart-item:nth-child(${productId})`);
    if (cartItem) {
        cartItem.remove();
    }
}

// Función para encontrar un producto por su ID
function findProduct(productId) {
    const allProducts = [...tacos, ...platosprincipales, ...bebidas,...postres];
    return allProducts.find(product => product.id === productId);
}

// Mostrar productos al cargar la página
window.onload = function() {
    showProducts(tacos, 'tacos');
    showProducts(platosprincipales, 'platosprincipales');
    showProducts(bebidas, 'bebidas');
    showProducts(postres, 'postres');
};

// Función para confirmar la compra
function confirmPurchase() {
    if (cartItems.length === 0) {
        alert('El carrito está vacío. Por favor, añade productos antes de confirmar la compra.');
        return;
    }
    // Aquí puedes agregar lógica adicional para procesar la compra, como enviar los productos al backend para realizar el pago.
    alert('Compra confirmada. Gracias por su compra.');
    cartItems = [];
    updateCart();
}

/*CarritoDesplegable*/
const cartLink = document.getElementById('cart-link');
const cartOverlay = document.getElementById('cart-overlay');
const cartItemsList = document.getElementById('cart-items');
const confirmPurchaseBtn = document.getElementById('confirm-purchase');

// Variable para almacenar los artículos agregados al carrito
let cartItems = [];

// Función para mostrar el carrito de compras
function showCart() {
    updateCart();
    cartOverlay.style.display = 'block';
}

// Función para ocultar el carrito de compras
function hideCart() {
    cartOverlay.style.display = 'none';
}

// Función para añadir productos al carrito
function addToCart(product) {
    cartItems.push(product);
    updateCart();
}

// Función para eliminar productos del carrito
function removeFromCart(index) {
    cartItems.splice(index, 1);
    updateCart();
}

// Función para actualizar el contenido del carrito
function updateCart() {
    cartItemsList.innerHTML = '';
    cartItems.forEach((item, index) => {
        const listItem = document.createElement('li');
        listItem.textContent = `${item.name} - $${item.price}`;
        const deleteButton = document.createElement('button');
        deleteButton.textContent = 'Eliminar';
        deleteButton.addEventListener('click', () => removeFromCart(index));
        listItem.appendChild(deleteButton);
        cartItemsList.appendChild(listItem);
    });
}

// Función para confirmar la compra
function confirmPurchase() {
    // Aquí puedes agregar la lógica para procesar la compra
    // Por ahora, simplemente mostraremos una alerta con los artículos comprados
    const itemsBought = cartItems.map(item => item.name).join(', ');
    alert(`¡Compra confirmada! Artículos comprados: ${itemsBought}`);
    cartItems = [];
    updateCart();
    hideCart();
}

// Agregar evento de clic al enlace del carrito
cartLink.addEventListener('click', showCart);

// Agregar evento de clic al botón de confirmar compra
confirmPurchaseBtn.addEventListener('click', confirmPurchase);
