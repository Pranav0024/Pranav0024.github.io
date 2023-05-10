// Wait for the DOM to load
document.addEventListener('DOMContentLoaded', function() {
  const menuIcon = document.querySelector('.menu-icon');
  const menu = document.querySelector('.menu');

  // Toggle the active class on the menu when the menu icon is clicked
  menuIcon.addEventListener('click', function() {
    menu.classList.toggle('active');
  });
});
