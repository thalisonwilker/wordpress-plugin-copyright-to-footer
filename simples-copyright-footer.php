<?php

/*
Plugin Name: Simples Copyright
Author: Thalison Wilker
Plugin URI: https://github.com/thalisonwilker/wordpress-plugin-copyright-to-footer
Description: Este plugin adiciona uma marcação de 'CORPIRIGHT &copy; SITE NAME' ao final do seu site
Version: 1..0
Author URI: https://instagram.com/sigaobarra
*/

function add_copy_text()
{
    $blogname = get_option('blogname');
    echo '<p style="text-align: center"><em>COPYRIGHT</em> &copy; <strong>'. $blogname .' '. Date('Y') .'</strong> Todos os direitos reservados</p>';
}

add_action('wp_footer', 'add_copy_text');