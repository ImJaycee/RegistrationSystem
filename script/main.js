const navlinks = document.querySelectorAll('.nav-link');
    
navlinks.forEach(navlink => {
  navlink.addEventListener('click', () => {
    document.querySelector('.active').classList.remove('active');
    navlink.classList.add('active');
  });
});