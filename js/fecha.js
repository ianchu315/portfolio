const hoy = new Date();


const opciones = { year: 'numeric' };
const fechaFormateada = hoy.toLocaleDateString('es-ES', opciones);

document.getElementById('fecha').textContent = fechaFormateada;   