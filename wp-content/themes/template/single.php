<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package template
 * 
 */

get_header();
?>

	<main id="primary" class="site-main">
	<div class = "container pt-5">
<div class = "main-content mt-5">


		<?php
		while ( have_posts() ) :
			the_post();
			echo "<h1>";
			the_title();
			echo "</h1>";
			
			get_template_part( 'template-parts/content', get_post_type() );

			// the_post_navigation(
			// 	array(
			// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'template' ) . '</span> <span class="nav-title">%title</span>',
			// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'template' ) . '</span> <span class="nav-title">%title</span>',
			// 	)
			// );
		
			

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</div>
	</div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
