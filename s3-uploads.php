<?php

/*
Plugin Name: S3 Uploads
Description: Store uploads in S3
Author: assmb.ly / Human Made Limited
Version: 3.0.7.2-assmbly
Author URI: https://hmn.md
*/

require_once __DIR__ . '/inc/namespace.php';

add_action( 'plugins_loaded', 'S3_Uploads\\init' );

if ( defined( 'WP_CLI' ) && WP_CLI ) {
	WP_CLI::add_command( 's3-uploads', 'S3_Uploads\\WP_CLI_Command' );
}