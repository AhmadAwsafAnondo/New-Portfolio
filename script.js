// Selecting the hamburger icon and navigation menu
const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('nav-ul');

// Adding click event to toggle the 'show' class for sliding effect
hamburger.addEventListener('click', () => {
    navMenu.classList.toggle('show');
});
