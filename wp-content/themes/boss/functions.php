<?php

/**
 * To view theme functions, navigate to /buddyboss-inc/theme.php
 *
 * @package Boss
 * @since Boss 1.0.0
 */
$init_file = get_template_directory() . '/buddyboss-inc/init.php';

if ( !file_exists( $init_file ) ) {
	$err_msg = __( 'BuddyBoss cannot find the starter file, should be located at: *wp root*/wp-content/themes/buddyboss/buddyboss-inc/init.php', 'boss' );

	wp_die( $err_msg );
}

remove_action('admin_init', '_maybe_update_core');    // 禁止 WordPress 检查更新
remove_action('admin_init', '_maybe_update_plugins'); // 禁止 WordPress 更新插件
remove_action('admin_init', '_maybe_update_themes');  // 禁止 WordPress 更新主题

require_once( $init_file );

