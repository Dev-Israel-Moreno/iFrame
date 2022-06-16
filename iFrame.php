<?php
/**
 * Plugin Name: iFrame
 * Description: Inserta iframe responsivo youtube 
 * Version: 1.0
 * Author: Israel Moreno
 * Author URI: https://portafolio-israel-moreno.netlify.app/
 * License: GPL2
 */
add_shortcode( "iframe", function($atts, $content){
	$id = $atts['id'];
	return '<div class="responsiveContent"><iframe width="560" height="315" src="https://www.youtube.com/embed/'.$id.'?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
});

?>