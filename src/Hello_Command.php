<?php

namespace AngeloCali\WP_CLI;

use WP_CLI_Command;

class Hello_Command extends WP_CLI_Command {

	/**
	 * Output hello world
	 *
	 * @param $args
	 * @param $assoc_args
	 */
	public function world( $args, $assoc_args ) {
		WP_CLI::success( 'Hello world!' );
	}
}
