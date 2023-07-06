// Select all elements with the "dropdown" class
const dropdowns = document.querySelectorAll('.dropdown');

// Loop through each dropdown element
dropdowns.forEach((dropdown) => {
  const dropdownMenu = dropdown.querySelector('.dropdown-menu');

  // Show the dropdown menu on mouse enter
  dropdown.addEventListener('mouseenter', () => {
    dropdownMenu.style.display = 'block';
  });

  // Hide the dropdown menu on mouse leave
  dropdown.addEventListener('mouseleave', () => {
    dropdownMenu.style.display = 'none';
  });
});
