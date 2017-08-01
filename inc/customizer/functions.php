<?php
/**
 * premise Theme Customizer Functions
 *
 * @package premise
 */
	/*Start Blog Hero Title*/
function premise_hero_title() {
	 if( get_theme_mod( 'premise_bloghero_text') != "" ) {
		echo get_theme_mod( 'premise_bloghero_text');
	 }
}

	/*Start Home Hero Title*/
function premise_homehero_title() {
	 if( get_theme_mod( 'premise_homehero_text') != "" ) {
		echo get_theme_mod( 'premise_homehero_text');
	 }
}
	/*Start Home Hero Services*/
function premise_homehero_services(){
	 if( get_theme_mod( 'premise_homehero_services') != "" ) {
		echo get_theme_mod( 'premise_homehero_services');
	 }
}

	/*Footer Copyright */
function footer_text_copyright(){
	 if( get_theme_mod( 'footer_text') != "" ) {
		echo get_theme_mod( 'footer_text');
	 }
}

	/*About Image*/
function premise_homeabout_image(){
	 if( get_theme_mod( 'premise_homeabout_image') != "" ) {
		echo get_theme_mod( 'premise_homeabout_image');
	 }
}

	/*About Who R U ? Title */
function premise_who_are_you(){
	 if( get_theme_mod( 'premise_who_are_you') != "" ) {
		echo get_theme_mod( 'premise_who_are_you');
	 }
}
