document.getElementById('signup-form').addEventListener('submit', function(event) {
  event.preventDefault();

  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const phone = document.getElementById('phone').value;
  const password = document.getElementById('password').value;

  // Aquí podrías agregar lógica para enviar la información al backend para procesar el registro.
  // Por ahora, simplemente mostraremos un mensaje de éxito.
  document.getElementById('message').textContent = 'Cuenta creada con éxito. ¡Bienvenido, ' + name + '!';
});