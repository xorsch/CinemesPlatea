// Boton Modal
const btnAbrirModal =
document.querySelector("#btn-abrir-modal");
const btnCerrarModal =
document.querySelector("#btn-cerrar-modal");
const modal = 
document.querySelector("#modal");

btnAbrirModal.addEventListener("click",()=>{modal.showModal();})

btnCerrarModal.addEventListener("click",()=>{modal.close();})

// Botón flotante scrollToTop
document.getElementById("scrolltotop_parent").addEventListener("click", function() {
    window.scrollTo({ top: 0, behavior: "smooth" });
});
