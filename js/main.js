import '../scss/styles.scss'

document.addEventListener('DOMContentLoaded', function () {
    const menuButton = document.querySelector('.menu__button');
    const menuList = document.querySelector('.menu__list');

    menuButton.addEventListener('click', function () {
        menuList.classList.toggle('menu--mobile');
    });
});
