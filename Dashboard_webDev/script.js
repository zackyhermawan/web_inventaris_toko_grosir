const arrow = document.getElementById("arrow-button");
const sidebar = document.getElementById("sidebar");
const profil = document.getElementById("profil");
const popup = document.getElementById("popup");

arrow.addEventListener("click", function () {
  sidebar.classList.toggle("hide");
});

profil.addEventListener("click", function () {
  popup.classList.toggle("open-profil");
});
