<?php
show_admin_bar(false);
/**
 * Enqueue scripts
 *
 * @param string $handle Script name
 * @param string $src Script url
 * @param array $deps (optional) Array of script names on which this script depends
 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
 */
function header_style() {
 wp_enqueue_style('rest-api-style-test-css', get_template_directory_uri(). '/style.css' );
 wp_enqueue_style('rest-api-bootstrap-test-css', get_template_directory_uri(). '/css/bootstrap.css' );
}
add_action( 'wp_enqueue_scripts', 'header_style' );

/**
 * Enqueue scripts
 *
 * @param string $handle Script name
 * @param string $src Script url
 * @param array $deps (optional) Array of script names on which this script depends
 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
 */
function footer_rest_api_script() {
	// wp_enqueue_script('rest-api-jquery-test', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7' );
	wp_enqueue_script('rest-api-custom-test-vue', get_template_directory_uri() .'/js/vue.js' );
	wp_enqueue_script('rest-api-custom-test-vue-resources', get_template_directory_uri() .'/js/vue-resource.js' );
	wp_enqueue_script('rest-api-custom-test-router', get_template_directory_uri() .'/js/vue-router.js' );
	wp_enqueue_script('rest-api-custom-test-app', get_template_directory_uri() .'/js/app.js' );
}

add_action( 'wp_footer', 'footer_rest_api_script' );
