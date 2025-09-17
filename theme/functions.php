<?php
namespace Rocket;
if ( ! defined( 'WP_DEVELOPMENT_MODE' ) ) {
    define( 'WP_DEVELOPMENT_MODE', 'all' );
}

require_once __DIR__ . '/core/init.php';
require_once __DIR__ . '/includes/admin-loader.php';
require_once __DIR__ . '/includes/portal-loader.php';

$wp_theme = wp_get_theme();
$rocket = new Rocket(array(
    'version' => $wp_theme->get('Version'),
    'name' => $wp_theme->get('Theme Name'),
    'development_mode' => true
));
$rocket->load();