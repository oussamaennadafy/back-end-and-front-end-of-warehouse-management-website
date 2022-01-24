const headerEl = document.querySelector(".header");
const buttonEl = document.querySelector(".btn_icons");

buttonEl.addEventListener("click", function () {
  headerEl.classList.toggle("nav_open");
});
