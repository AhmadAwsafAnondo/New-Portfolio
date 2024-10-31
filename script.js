document.addEventListener("DOMContentLoaded", function() {
  const hamburgerIcon = document.getElementById("hamburger");
  const navMenu = document.getElementById("nav-ul");

  hamburgerIcon.addEventListener("click", function() {
    navMenu.classList.toggle("show");
  });
});