<?php
/**
 * Plugin Name: Redirect Admin Logins
 * Description: Redirects users that try to log in with 'admin' username
 * Author: CLEANCODED
 * Author URI: https://cleancoded.com
 * Version: 1.0
 */

add_action( 'authenticate', 'rickroll_admin_login', 1, 2);
function rickroll_admin_login( $login, $username ) {
	if ( 'admin' == $username ) {
		wp_redirect( 'https://www.youtube.com/watch?v=dQw4w9WgXcQ' );
		exit;
	}
}
