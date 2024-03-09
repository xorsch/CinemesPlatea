// Abre el pop-up
function openPopup() {
    document.getElementById("myPopup").style.display = "block";
}

// Cierra el pop-up
function closePopup() {
    document.getElementById("myPopup").style.display = "none";
}

// Asigna el evento al botón
document.getElementById("buttonCard").addEventListener("click", openPopup);
