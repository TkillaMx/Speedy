// Array para almacenar los artículos comprados
const purchasedItems = [
    { name: 'Producto 1', price: 10 },
    { name: 'Producto 2', price: 20 },
    { name: 'Producto 3', price: 15 }
];

// Calcular el monto total de la compra
const totalAmount = purchasedItems.reduce((total, item) => total + item.price, 0);

// Actualizar los datos en la página
const purchasedItemsList = document.getElementById('purchased-items');
const totalAmountElement = document.getElementById('total-amount');

purchasedItems.forEach(item => {
    const listItem = document.createElement('li');
    listItem.textContent = `${item.name} - $${item.price}`;
    purchasedItemsList.appendChild(listItem);
});

totalAmountElement.textContent = '$' + totalAmount;
