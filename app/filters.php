<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});


function custom_excerpt( $excerpt ) {
	if ( is_admin() ) {
		return $excerpt;
	}

    if(get_post_type() == 'post') {
        $content = get_field('post_content');
    
        $short_content = wp_trim_words($content, 30, '...');
        $excerpt = $short_content;
    }

	return $excerpt;
}
add_filter( 'get_the_excerpt', __NAMESPACE__.'\\custom_excerpt', 999 );
