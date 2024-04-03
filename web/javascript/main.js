// Función para manejar la apertura del modal
function abrirModal(modal) {
    modal.showModal();
}

// Función para manejar el cierre del modal
function cerrarModal(modal) {
    modal.close();
}

// Obtener los elementos del DOM
const btnAbrirModal = document.querySelectorAll(".btn-abrir-modal");
const btnCerrarModal = document.querySelector("#btn-cerrar-modal");
const modal = document.querySelector(".modal");

const btnAbrirModal2 = document.querySelectorAll(".btn-abrir-modal2");
const btnCerrarModal2 = document.querySelector("#btn-cerrar-modal2");
const modal2 = document.querySelector(".modal2");

// Agregar eventos a los botones
if (btnCerrarModal && modal) {
    btnCerrarModal.addEventListener("click", () => cerrarModal(modal));
}

if (btnAbrirModal.length > 0) {
    btnAbrirModal.forEach((btn) => {
        btn.addEventListener("click", () => abrirModal(modal));
    });
}

if (btnCerrarModal2 && modal2) {
    btnCerrarModal2.addEventListener("click", () => cerrarModal(modal2));
}

if (btnAbrirModal2.length > 0) {
    btnAbrirModal2.forEach((btn) => {
        btn.addEventListener("click", () => abrirModal(modal2));
    });
}

// Agregar evento para cerrar el modal al hacer clic en el backdrop
document.addEventListener("click", (event) => {
    if (event.target === modal || event.target === modal2) {
        cerrarModal(modal);
        cerrarModal(modal2);
    }
});

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
	document.getElementById("scrolltotop_parent").style.opacity = 1;
}

function mouseOut() {
	// console.log("ratoli fora" );
	document.getElementById("scrolltotop_parent").style.opacity = 0;
}


// swiper ruchi
var swiper = new Swiper(".slide-content", {
    slidesPerView: 1,
    spaceBetween: 15,
    slidesPerGroup: 1,
    loop: false,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

// DropDown Menu
let profileDropdownList = document.querySelector(".profile-dropdown-list");
let btn = document.querySelector(".profile-dropdown-btn");

let classList = profileDropdownList.classList;

const toggle = () => classList.toggle("active");

window.addEventListener("click", function (e) {
  if (!btn.contains(e.target)) classList.remove("active");  
}); 
