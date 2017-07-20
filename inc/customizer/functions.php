<?php
/**
 * premise Theme Customizer Functions
 *
 * @package premise
 */
 	/*Start Blog Hero BG Image*/
function premise_hero_bg() {
	 if( get_theme_mod( 'premise_hero_bg_img') != "" ) {
		echo get_theme_mod( 'premise_hero_bg_img');
	 }
}
	/*Start Blog Hero Title*/
function premise_hero_title() {
	 if( get_theme_mod( 'premise_bloghero_text') != "" ) {
		echo get_theme_mod( 'premise_bloghero_text');
	 }
}

 	/*Start Home Hero BG Image*/
function premise_homehero_bg() {
	 if( get_theme_mod( 'premise_homehero_bg_img') != "" ) {
		echo get_theme_mod( 'premise_hero_bg_img');
	 }
}
	/*Start Home Hero Title*/
function premise_homehero_title() {
	 if( get_theme_mod( 'premise_homehero_text') != "" ) {
		echo get_theme_mod( 'premise_homehero_text');
	 }
}
	/*Start Home Hero Services*/
function premise_homehero_services() {
	 if( get_theme_mod( 'premise_homehero_services') != "" ) {
		echo get_theme_mod( 'premise_homehero_services');
	 }
}
