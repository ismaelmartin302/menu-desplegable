import '../scss/styles.scss'

var menuToggleButton = document.getElementById('menuToggle');
var menuCloseButton = document.getElementById('menuClose');

menuToggleButton.addEventListener('click', function () {
    menuToggleButton.classList.remove('show')
    menuCloseButton.classList.add('show')
    document.getElementById('mobileMenu').classList.add('open');
});

menuCloseButton.addEventListener('click', function () {
    menuCloseButton.classList.remove('show')
    menuToggleButton.classList.add('show')
    document.getElementById('mobileMenu').classList.remove('open');
});

document.querySelectorAll('.menu__item[data-toggle]').forEach(item => {
    item.addEventListener('click', function () {
        const dropdownId = this.getAttribute('data-toggle');
        let dropdownsMenu = document.querySelector('.menu__dropdowns');
        dropdownsMenu.style.height = 'fit-content'
        if (dropdownId == 'blog') {
            dropdownsMenu.style.height = 0
        }
        document.querySelectorAll('.menu__dropdown').forEach(dropdown => {
            dropdown.classList.remove('active');
        });
        document.getElementById(dropdownId).classList.add('active');
    });
});
