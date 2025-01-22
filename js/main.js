import '../scss/styles.scss'

document.getElementById('menuToggle').addEventListener('click', function () {
    document.getElementById('mobileMenu').classList.toggle('open');
});

document.getElementById('menuClose').addEventListener('click', function () {
    document.getElementById('mobileMenu').classList.remove('open');
});

document.querySelectorAll('.menu__item[data-toggle]').forEach(item => {
    item.addEventListener('click', function () {
        const dropdownId = this.getAttribute('data-toggle');
        document.querySelectorAll('.menu__dropdown').forEach(dropdown => {
            dropdown.classList.remove('active');
        });
        document.getElementById(dropdownId).classList.add('active');
    });
});
