const profil = document.getElementById("profil");
const popup = document.getElementById("popup");
const hamburgerMenu = document.getElementById("hamburger-menu");
const arrow = document.getElementById("arrow-button");
const sidebar = document.getElementById("sidebar");

arrow.addEventListener("click", function () {
  sidebar.classList.toggle("hide");
  arrow.classList.toggle("rotate-180");
});

profil.addEventListener("click", function () {
  popup.classList.toggle("open-profil");
});

hamburgerMenu.addEventListener("click", function () {
  sidebar.classList.toggle("open-navigation");
});

document.addEventListener("click", function (event) {
  if (!sidebar.contains(event.target) && event.target !== hamburgerMenu) {
    sidebar.classList.remove("open-navigation");
  }
});
