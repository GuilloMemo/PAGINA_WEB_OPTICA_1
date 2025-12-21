// Funcionalidad básica para el formulario de contacto
document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('contactForm');
  if (form) {
    form.addEventListener('submit', function(event) {
      event.preventDefault();
      const formData = new FormData(form);
      fetch('contacto.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.text())
      .then(data => {
        document.getElementById('form-msg').textContent = data;
        form.reset();
      })
      .catch(error => {
        document.getElementById('form-msg').textContent = 'Hubo un error. Intenta nuevamente.';
      });
    });
  }
});

