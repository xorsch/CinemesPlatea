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

// Cards carrousel

const carousel = document.querySelector('.carousel');
    const carouselItems = document.querySelectorAll('.carousel-item');
    let currentIndex = 0;

    function showNextItem() {
      carouselItems[currentIndex].classList.remove('active');
      currentIndex = (currentIndex + 1) % carouselItems.length;
      carouselItems[currentIndex].classList.add('active');
    }

    document.querySelector('.carousel-control-next').addEventListener('click', () => {
      showNextItem();
    });

    // Llama a esta función para mostrar la primera tarjeta al cargar la página
    showNextItem();
