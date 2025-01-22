<?php
/*
Plugin Name: Menú Desplegable Responsive
Description: Prueba de menú desplegable responsive.
Version: 1.0
*/

function show_custom_menu() {
    wp_enqueue_script('menu-desplegable-js', plugins_url('js/main.js', __FILE__), array('jquery'), null, true);

    return '
    <nav class="menu">
        <ul class="menu__list">
            <li class="menu__item">Formación</li>
            <li class="menu__item">Somos KS</li>
            <li class="menu__item">KS Talent</li>
            <li class="menu__item">Blog</li>
        </ul>
    </nav>
    ';
}
add_shortcode('custom-menu', 'show_custom_menu');
