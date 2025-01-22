<?php
/*
Plugin Name: Menú Desplegable Responsive
Description: Prueba de menú desplegable responsive.
Version: 1.0
*/
function register_custom_block() {
    wp_register_script(
        'custom-block',
        plugins_url( 'block.js', __FILE__ ),
        array( 'wp-blocks', 'wp-element', 'wp-block-editor' ),
        true
    );

    register_block_type('custom/menu', array(
        'editor_script' => 'custom-block',
    ));
}
add_action('init', 'register_custom_block');

function show_custom_menu() {
    wp_enqueue_script('menu-desplegable-bundle-js', plugins_url('dist/bundle.js', __FILE__), array(), null, true);

    return '
    <nav class="menu">
        <div class="menu__group">
            <img class="menu__logo" src="' . plugins_url('images/logo.png', __FILE__) . '" alt="Logo"></li>
            <ul class="menu__list">
                <li class="menu__item" data-toggle="formacion">Formación</li>
                <li class="menu__item" data-toggle="somos-ks">Somos KS</li>
                <li class="menu__item" data-toggle="ks-talent">KS Talent</li>
                <li class="menu__item" data-toggle="blog">Blog</li>
            </ul>
            <button class="menu__toggle show" id="menuToggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                </svg>
            </button>
            <button class="menu__close" id="menuClose">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                </svg>
            </button>
        </div>
        
        <ul class="menu__list menu__mobile" id="mobileMenu">
            <details class="menu__submenu">
                <summary >Formación</summary>
                <li>Digital Marketing School</li>
                <li>Tech School</li>
                <li>Business School</li>
                <li>Sports School</li>
                <li>Education School</li>
            </details>
            <details class="menu__submenu">
                <summary>Somos KS</summary>
                <li>Conócenos</li>
                <li>Nuestros profesores</li>
            </details>
            <details class="menu__submenu">
                <summary>KS Talent</summary>
                <li>Network</li>
                <li>Eventos</li>
                <li>Empleo</li>
            </details>
            <li class="menu__item">Blog</li>
            <img class="menu__image" src="' . plugins_url('images/logo_Unir.svg', __FILE__) . '" alt="Logo"></li>
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

        <!-- Submenús en pantallas grandes -->
        <div class="menu__dropdowns">
            <div class="menu__dropdown" id="formacion">
                <button>Digital Marketing School</button>
                <button>Tech School</button>
                <button>Business School</button>
                <button>Sports School</button>
                <button>Education School</button>
            </div>
            <div class="menu__dropdown" id="somos-ks">
                <button>Conócenos</button>
                <button>Nuestros profesores</button>
            </div>
            <div class="menu__dropdown" id="ks-talent">
                <button>Network</button>
                <button>Eventos</button>
                <button>Empleo</button>
            </div>
        </div>
    </nav>
    ';
}
add_shortcode('custom-menu', 'show_custom_menu');
