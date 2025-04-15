<?php
/**
 * Import pack data package demo
 *
 */
$plugin_includes = array(
  array(
    'name'     => __( 'Elementor Website Builder', 'bears' ),
    'slug'     => 'elementor',
  ),
  array(
    'name'     => __( 'Elementor Pro', 'bears' ),
    'slug'     => 'elementor-pro',
    'source'   => IMPORT_REMOTE_SERVER_PLUGIN_DOWNLOAD . 'elementor-pro.zip',
  ),
  array(
    'name'     => __( 'Advanced Custom Fields PRO', 'bears' ),
    'slug'     => 'advanced-custom-fields-pro',
    'source'   => IMPORT_REMOTE_SERVER_PLUGIN_DOWNLOAD . 'advanced-custom-fields-pro.zip',
  ),
  array(
    'name'     => __( 'Newsletter', 'bears' ),
    'slug'     => 'newsletter',
  ),
  array(
    'name'     => __( 'WooCommerce', 'bears' ),
    'slug'     => 'woocommerce',
  ),

);

return apply_filters( 'bears/import_pack/package_demo', [
    [
        'package_name' => 'bears-main',
        'preview' => get_template_directory_uri() . '/screenshot.jpg',
        'url_demo' => 'https://bears.beplusthemes.com/',
        'title' => __( 'Bears Demo', 'bears' ),
        'description' => __( 'Bears main demo.', 'bears' ),
        'plugins' => $plugin_includes,
    ],
] );
