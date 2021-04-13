// добавление класса active на меню в шапке с возможностью стилизировать активную ссылку
var theThing = $('a[aria-current="page"]');
theThing.addClass('active');

// Меню бургер
const menuToggle = document.querySelector('.mobile-menu-toggle');
//проверка есть ли такой класс, объект
if (menuToggle) {
  const headerNav = document.querySelector('.grand-wrapper');
  menuToggle.addEventListener("click", function(e) {
    menuToggle.classList.toggle('mobile-menu-toggle-withmenu');
    headerNav.classList.toggle('grand-wrapper-withmenu');
  });
}