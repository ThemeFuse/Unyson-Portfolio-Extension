<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$manifest = array();

$manifest['name']        = __( 'Portfolio', 'fw' );
$manifest['description'] = __( "Adds a sliders module to your website from where you'll be able to create different built in jQuery sliders for your homepage and rest of the pages.", 'fw' );
$manifest['version'] = '1.0.0';
$manifest['display'] = true;
$manifest['standalone'] = true;