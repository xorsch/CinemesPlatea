// Botón flotante scrollToTop
let scrolltotop_parent = document.getElementById("scrolltotop_parent");

if (scrolltotop_parent) {
  scrolltotop_parent.addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });

  // TODO: Caldria que al principi tingués la opacitat mínima
  // xorrades.
  scrolltotop_parent.addEventListener("mouseover", mouseOver);
  scrolltotop_parent.addEventListener("mouseout", mouseOut);
}

function mouseOver() {
  if (scrolltotop_parent) {
    // console.log("ratoli fora" );
    scrolltotop_parent.style.opacity = 1;
  }
}

function mouseOut() {
  // console.log("ratoli fora" );
  document.getElementById("scrolltotop_parent").style.opacity = 0;
}

// swiper ruchi
if (scrolltotop_parent) {
  // console.log("ratoli fora" );
  scrolltotop_parent.style.opacity = 0;
}

// Swiper dmon
var swiper = new Swiper(".slide-content-about-us", {
  spaceBetween: 30,
  effect: "fade",
  loop: true,
  autoplay: {
    delay: 1400,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// Swiper ruchi
var swiper = new Swiper(".slide-content", {
  slidesPerView: 1,
  spaceBetween: 15,
  slidesPerGroup: 1,
  loop: false,
  grabCursor: true,
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
const profileDropdownList = document.querySelector(".profile-dropdown-list");
const btn = document.querySelector(".profile-dropdown-btn");

const toggle = (event) => {
  event.stopPropagation();
  profileDropdownList.classList.toggle("active");
};

// Ensure that the dropdown list is only hidden if the click event happens outside of it
const hideListOnOutsideClick = (event) => {
  if (
    !btn.contains(event.target) &&
    profileDropdownList.classList.contains("active")
  ) {
    profileDropdownList.classList.remove("active");
  }
};

// Attach event listeners
btn.addEventListener("click", toggle);
document.addEventListener("click", hideListOnOutsideClick);

//Contacto
// Verifica si el botón existe en la página actual
const btn_Comment = document.querySelector("#comment-btn");
if (btn_Comment) {
  btn_Comment.addEventListener("click", (event) => {
    alert("Comentario enviado con éxito!");
  });
} else {
  console.warn("El botón con id 'comment-btn' no existe en esta página.");
}

// toggle theme (Switcher)

// Cambiar el tema según la selección del usuario
// Toggle Theme Function
const toggleTheme = () => {
  const body = document.body;
  const currentTheme = body.classList.contains("dark-theme") ? "light" : "dark";
  body.classList.remove(currentTheme === "light" ? "dark-theme" : "light-theme");
  body.classList.add(currentTheme === "light" ? "light-theme" : "dark-theme");
  localStorage.setItem("theme", currentTheme);
};

// Initialize Theme
const initializeTheme = () => {
  const storedTheme = localStorage.getItem("theme");
  if (storedTheme) {
    toggleTheme();
  }
};

// Theme Toggle Function
const themeToggle = () => {
  const switchInput = document.querySelector(".switch input");
  switchInput.addEventListener("change", toggleTheme);
};

if (initializeTheme && themeToggle){
  // Inicializar el tema
initializeTheme();
// Configurar el interruptor
themeToggle();
}

// Drag&Drop

const cardEl = document.getElementById('sortable-cards');
if (cardEl) {
    Sortable.create(cardEl);
} else {
    console.log('Element with id "sortable-cards" not found.');
}
