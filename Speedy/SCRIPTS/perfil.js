function editProfile() {
    const username = prompt('Ingrese su nuevo nombre de usuario:');
    const email = prompt('Ingrese su nuevo correo electrónico:');
    const phone = prompt('Ingrese su nuevo número de teléfono:');
    
    if (username && email && phone) {
        document.getElementById('username').textContent = username;
        document.getElementById('email').textContent = email;
        document.getElementById('phone').textContent = phone;
    } else {
        alert('Debe ingresar todos los datos para editar su perfil.');
    }
}
