<?php
/**
 * Plugin Name: WP Gfycat
 * Plugin URI: http://labs.monchito.net/wp-gfycat/
 * Description: A simple shortcode to add your gfycat videos into your website.
 * Version: 0.9.1
 * Author: Monchito.net
 * Author URI: http://www.monchito.net
 * License: GPLv2
 */

/*  Copyright 2014  Monchito.net  (email : hola@monchito.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

defined('ABSPATH') or die("Nothing to see here!");

// Linking the gfycat script
add_action('init','gfycat_test_init');

function gfycat_test_init() {
    wp_enqueue_script( 'gfycat-test-js', plugins_url( '/js/gfycat_test_.js', __FILE__ ));
}


// Adding gfycat shortcode
class wp_gfycat {
    function shortcode($atts, $content=null) {
		extract(shortcode_atts(array(
			'data_id' 	=> '',
			'data_title' 	=> 'true',
			'data_autoplay'	=> 'false',
			'data_controls'	=> 'true',
			'data_expand' 	=> 'false',
		), $atts));

		return "<div class='gfyitem' data_title=$data_title data_autoplay=$data_autoplay data_controls=$data_controls data_expand=$data_expand data_id=$data_id ></div>";
    }
}

add_shortcode('gfycat', array('wp_gfycat', 'shortcode'));

// init process for registering tinymce button
 add_action('init', 'wpbgfycat_shortcode_button_init');
 function wpbgfycat_shortcode_button_init() {

      //Abort early if the user will never see TinyMCE
      if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') && get_user_option('rich_editing') == 'true')
           return;

      //Add a callback to regiser the tinymce plugin   
      add_filter("mce_external_plugins", "wpbgfycat_register_tinymce_plugin"); 

      // Add a callback to add the button to the TinyMCE toolbar
      add_filter('mce_buttons', 'wpbgfycat_add_tinymce_button');
}

//This callback registers the plug-in
function wpbgfycat_register_tinymce_plugin($plugin_array) {
    $plugin_array['wpbgfycat_button'] = plugins_url( '/js/shortcode.js' , __FILE__ );
    return $plugin_array;
}

//This callback adds the button to the toolbar
function wpbgfycat_add_tinymce_button($buttons) {
            //Add the button ID to the $button array
    $buttons[] = "wpbgfycat_button";
    return $buttons;
}
?>
