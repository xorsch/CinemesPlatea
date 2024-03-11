// Abre el pop-up
function openPopup() {
    alert('hola');
    document.getElementById("buttonCard").style.display = "none";
}

// Cierra el pop-up
function closePopup() {
    document.getElementById("myPopup").style.display = "none";
}

function iniciar(){
    alert('hola');
    // Asigna el evento al botón
document.getElementById("buttonCard").addEventListener("click", openPopup);
}
