document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Aquí podrías agregar lógica para enviar la información al backend para procesar el inicio de sesión.
    // Por ahora, simplemente mostraremos un mensaje de éxito.
    document.getElementById('message').textContent = 'Inicio de sesión exitoso para: ' + email;
});


/*iniciar sesion google*/

document.getElementById('google-login').addEventListener('click', function() {
    // Redirigir al usuario al flujo de inicio de sesión de Google
    window.location.href = 'https://accounts.google.com/o/oauth2/v2/auth?client_id=YOUR_CLIENT_ID&redirect_uri=YOUR_REDIRECT_URI&response_type=code&scope=email%20profile&access_type=offline';
    // Reemplaza YOUR_CLIENT_ID y YOUR_REDIRECT_URI con los valores proporcionados por Google en la configuración de tu proyecto
});
