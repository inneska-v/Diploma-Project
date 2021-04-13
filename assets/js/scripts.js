// вызов мобильного меню
let menuToggle = $('.header-menu-toggle');
menuToggle.on('click', function (event) {
  event.preventDefault();
  $('.header-nav').slideToggle(200);
})