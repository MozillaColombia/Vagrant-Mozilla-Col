<?php
/*
Plugin Name: Easy Smooth Scroll Links
Plugin URI: http://www.92app.com/wordpress-plugins/easy-smooth-scroll-links
Description:Adds smoth scrolling effect to links that link to other parts of the page,which are called "Page Anchors".Extremely useful for setting up a menu which can send you to different section of a post.
Version: 1.1
Author: Jeriff Cheng
Author URI: http://www.92app.com/
*/

/*
Copyright 2011  Jeriff Cheng(Email:hschengyongtao@gmail.com)

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
    
*/

//load required script in footer
if(!is_admin()){
wp_enqueue_script('easy_smooth_scroll_links', plugins_url('easy_smooth_scroll_links.js',__FILE__), false, false, true);
}

//The invisible way of adding anchors(Anchor button)
if ( ! function_exists('enable_anchor_button') ) {
function enable_anchor_button($buttons) {
  $buttons[] = 'anchor';
  return $buttons;
}
add_filter("mce_buttons_2", "enable_anchor_button");
}


//The visible way of adding anchors(Shortcode)
if ( ! function_exists('essl_shortcode') ) {
function essl_shortcode( $atts, $content = null ) {
   return '<a name="' . $content . '">';
}
add_shortcode( 'anchor', 'essl_shortcode' );
}
