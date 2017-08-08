<?php
/**
 * premise Theme Customizer
 *
 * @package premise
 */

if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.



add_filter( 'cs_customize_options', function( $options ) {

  $options      = array(); // remove old options


  return $options;

});//end filter


