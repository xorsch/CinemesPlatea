const btnAbrirModal = document.querySelector(".btn-abrir-modal");
const btnCerrarModal = document.querySelector("#btn-cerrar-modal");
const modal = document.querySelector("#modal");

alert(btnAbrirModal);
alert(modal);

if ((btnAbrirModal && modal) != null) {
btnAbrirModal.addEventListener("click", () => { modal.showModal(); });
btnCerrarModal.addEventListener("click", () => { modal.close(); });
}

// Botón flotante scrollToTop
document.getElementById("scrolltotop_parent").addEventListener("click", function() {
    window.scrollTo({ top: 0, behavior: "smooth" });
});

// Cards carrusel Swiper
var swiper = new Swiper('.swiper', {
	effect:"coverflow",
	grabCursor: true,
	centeredSlides: true,
	slidesPerView: "auto",
	loop: true,
	coverflowEffect:{
		depth: 500,
		modifer:1,
		slidesShadows: true,
		rotate:0,
		stretch:0
	},
	navigation: {
	  nextEl: '.swiper-button-next',
	  prevEl: '.swiper-button-prev'
	},
	spaceBetween: 1,
});