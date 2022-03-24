<?php
/**
 * Flatsome functions and definitions
 *
 * @package flatsome
 */

require get_template_directory() . '/inc/init.php';

/**
 * Note: It's not recommended to add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * Learn more here: http://codex.wordpress.org/Child_Themes
 */
add_filter('widget_text', 'do_shortcode');
?>
<?php
$args =array(
			'tax_query' => array(
			'relation' => 'AND',
				array(
				'taxomomy' => 'tinhthanh',
				'field' => 'slug',
				'terms' => array( 110, 111),
				'include_children' => true,
				'operator' => 'IN'
				)
			),
);
$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) :
while ( $the_query->have_posts() ) : $the_query->the_posts();

endwhile;
endif;

wp_reset_postdata();
?>