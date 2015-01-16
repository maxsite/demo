<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

global $VAR;

// дефолтные опции компонента
$def_options = array(
	'menu' => '',
	'ul_class' => 'menu',
	'selected' => 'selected',
);

// объединяем с переданными
$OPTIONS = array_merge($def_options, $OPTIONS);

if ($OPTIONS['menu']) // если есть пункты меню
{
	require_once('functions.php'); // файл с функцией mso_menu_build()
	
	$menu = mso_menu_build($OPTIONS['menu'], $OPTIONS['selected']);
	
	if ($VAR['remove_protocol']) $menu = mso_remove_protocol($menu);
	
	echo '<ul class="' . $OPTIONS['ul_class'] . '">' 
		. $menu
		. '</ul>';
}

# end of file