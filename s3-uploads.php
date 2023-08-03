<?php

/*
Plugin Name: S3 Uploads
Description: Store uploads in S3
Author: assmb.ly / Human Made Limited
Version: 3.0.7-assmbly
Author URI: https://hmn.md
*/

// Ensure the AWS SDK can be loaded.
if ( ! class_exists( '\\Aws\\S3\\S3Client' ) ) {
    // Require AWS Autoloader file.
    require_once dirname( __DIR__ ) . '/vendor/autoload.php';
}

require_once __DIR__ . '/inc/namespace.php';

add_action( 'plugins_loaded', 'S3_Uploads\\init', 0 );
