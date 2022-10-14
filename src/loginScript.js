//* Declarar boton y salida de error
const buttonLogin = document.getElementById("ingresar");

//* Evento cuando se le da al boton de iniciar sesión
buttonLogin.addEventListener('click', (e) =>{
    e.preventDefault();
    window.location.href = "./administracion.php";
})

//* Limpiar variables cuando cargue toda la pagina
$(document).ready(() => {
});