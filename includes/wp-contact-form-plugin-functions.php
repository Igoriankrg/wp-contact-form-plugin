<?php

function handle_contact_form()
{
	echo 'Запрос был успешно обработан с помощью плагина';
	wp_die();
}

add_action('wp_ajax_handle_contact_form', 'handle_contact_form');
add_action('wp_ajax_nopriv_handle_contact_form', 'handle_contact_form');