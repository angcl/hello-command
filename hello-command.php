<?php

namespace AngeloCali\WP_CLI;

use WP_CLI;

if ( ! class_exists( 'WP_CLI' ) ) {
	return;
}

$wpcli_angelocali_autoloader = dirname( __FILE__ ) . '/vendor/autoload.php';
if ( file_exists( $wpcli_angelocali_autoloader ) ) {
	require_once $wpcli_angelocali_autoloader;
}

WP_CLI::add_command(
	'hello',
	Hello_Command::class
);