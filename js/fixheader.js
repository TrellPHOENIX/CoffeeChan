  //fixsed header
  document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementById('navbar_top').classList.add('fixed-top', 'px-3');
        navbar_height = document.querySelector('.header').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar_top').classList.remove('fixed-top', 'px-3');
        document.body.style.paddingTop = '0';
      }
    });
  });