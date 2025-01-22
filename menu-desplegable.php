<?php
/*
Plugin Name: Menú Desplegable Responsive
Description: Prueba de menú desplegable responsive.
Version: 1.0
*/

function show_custom_menu() {
    wp_enqueue_script('menu-desplegable-bundle-js', plugins_url('dist/bundle.js', __FILE__), array(), null, true);

    return '
    <nav class="menu">
        <ul class="menu__list">
            <img class="menu__logo" src="' . plugins_url('images/logo.png', __FILE__) . '" alt="Logo">
            <li class="menu__item">Formación</li>
            <li class="menu__item">Somos KS</li>
            <li class="menu__item">KS Talent</li>
            <li class="menu__item">Blog</li>
        </ul>
        <ul class="menu__list">
            <li class="menu__item">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                    <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5m1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0M1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5"/>
                </svg>
                <p>Empleo</p>
            </li>
            <li class="menu__item">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                    </svg>
                    <p>Campus</p>
            </li>
            <img class="menu__image" src="' . plugins_url('images/logo_Unir.svg', __FILE__) . '" alt="Logo"></li>
        </ul>
    </nav>
    ';
}
add_shortcode('custom-menu', 'show_custom_menu');
