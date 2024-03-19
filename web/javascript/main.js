// MODAL
const btnAbrirModal = document.querySelectorAll(".btn-abrir-modal");
const btnCerrarModal = document.querySelector("#btn-cerrar-modal");
const modal = document.querySelector(".modal");

if ((btnCerrarModal && modal) != null) {
    btnCerrarModal.addEventListener("click", () => { modal.close(); });
}

if (btnAbrirModal.length > 0) {
    btnAbrirModal.forEach((btn) => {
        btn.addEventListener("click", () => { modal.showModal(); });
    });
}

// Botón flotante scrollToTop
document.getElementById("scrolltotop_parent").addEventListener("click", function() {
    window.scrollTo({ top: 0, behavior: "smooth" });
});

// Buttons swiper
let prev = document.getElementById('prev');
let next = document.getElementById('next');

let active = 0;

next.onclick = function(){
	active += 1;
	reloadSlider();
}
function reloadSlider(){
	
}

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
	  nextEl: '#next',
	  prevEl: '#prev'
	},
	spaceBetween: 1
});

// DropDown Menu
let profileDropdownList = document.querySelector(".profile-dropdown-list");
let btn = document.querySelector(".profile-dropdown-btn");

let classList = profileDropdownList.classList;

const toggle = () => classList.toggle("active");

window.addEventListener("click", function (e) {
  if (!btn.contains(e.target)) classList.remove("active");
});