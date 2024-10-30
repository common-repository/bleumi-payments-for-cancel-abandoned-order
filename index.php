<?php

/*
 * Plugin Name:  Bleumi Payments for Cancel Abandoned Order
 * Description:  Add Bleumi Payments as a supported payment gateway in the WooCommerce Cancel Abandoned Order plugin
 * Version:      1.0.0
 * Author:       Bleumi Inc
 * Author URI:   https://bleumi.com/
 * License:      Copyright 2020 Bleumi, MIT License
*/

if (!defined('ABSPATH')) :
    exit;
endif;

function woa_custom_gateways_hook( $gateways ) {
     $gateways[] = 'bleumi';

     return $gateways;
}
add_filter( 'woo_cao_gateways', 'woa_custom_gateways_hook', 10, 1 );

function woa_custom_statustocancel_hook( $status ) {
	$status[] = 'wc-pending';

	return $status;
}
add_filter( 'woo_cao_statustocancel', 'woa_custom_statustocancel_hook', 10, 1 );