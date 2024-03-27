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

// MODAL other 
const btnAbrirModal2 = document.querySelectorAll(".btn-abrir-modal2");
const btnCerrarModal2 = document.querySelector("#btn-cerrar-modal2");
const modal2 = document.querySelector(".modal2");

if ((btnCerrarModal2 && modal) != null) {
    btnCerrarModal2.addEventListener("click", () => { modal2.close(); });
}

if (btnAbrirModal2.length > 0) {
    btnAbrirModal2.forEach((btn) => {
        btn.addEventListener("click", () => { modal2.showModal(); });
    });
}

// Botón flotante scrollToTop
document.getElementById("scrolltotop_parent").addEventListener("click", function() {
    window.scrollTo({ top: 0, behavior: "smooth" });
});

// TODO: Caldria que al principi tingués la opacitat mínima
// xorrades. 
document.getElementById("scrolltotop_parent").addEventListener("mouseover", mouseOver);
document.getElementById("scrolltotop_parent").addEventListener("mouseout", mouseOut);

function mouseOver() {
	// console.log("ratoli fora" );
	document.getElementById("scrolltotop_parent").style.opacity = 0,8;
}

function mouseOut() {
	// console.log("ratoli fora" );
	document.getElementById("scrolltotop_parent").style.opacity = 0,2;
}


// Cards carrusel Swiper
var swiper = new Swiper('.swiper', {
	effect:"coverflow",
	grabCursor: true,
	centeredSlides: true,
	slidesPerView: 1,
	loop: true,
	coverflowEffect:{
		depth: 500,
		modifer:0,
		slidesShadows: true,
		rotate:0,
		stretch:0
	},
	grid: {
	  cols: 3,
	},
	navigation: {
	  nextEl: '#next',
	  prevEl: '#prev'
	}
});


// DropDown Menu
let profileDropdownList = document.querySelector(".profile-dropdown-list");
let btn = document.querySelector(".profile-dropdown-btn");

let classList = profileDropdownList.classList;

const toggle = () => classList.toggle("active");

window.addEventListener("click", function (e) {
  if (!btn.contains(e.target)) classList.remove("active");
});