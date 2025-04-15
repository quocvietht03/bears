<?php
/**
 * Import pack hooks
 *
 * @package Import Pack
 */

add_action( 'admin_init', 'bears_import_pack_defineds' );
add_action( 'admin_menu', 'bears_register_import_menu' );
