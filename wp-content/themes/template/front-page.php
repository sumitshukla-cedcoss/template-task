<?php
/**
 * Template Name: Home Page template
 *
 * @package Template
 */

$blog_posts = new WP_Query(
	array(
		'post_type'      => 'post',
		'post_status’'   => 'publish',
		'posts_per_page' => -1,
	)
);
get_header();
?>
<div class = "page-container">
	<div class = "main-content">
		<div class = "pt-5">

		<div class="main-banner header-text">
<div class="container-fluid">
<div class="owl-banner owl-carousel">
<?php if ( $blog_posts->have_posts() ) : ?>
									<?php
									while ( $blog_posts->have_posts() ) :
										$blog_posts->the_post();
										?>
									<div class="item">
										<?php
															esc_html( the_post_thumbnail( array( 437, 378 ) ) );
										?>
			<div class="item-content">
			<div class="main-content">
				<div class="meta-category">
				<span><?php the_category( ', ' ); ?></span>
				</div>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<ul class="post-info">
				<li><?php the_author(); ?></li>
				<li><?php the_date(); ?></li>
				<li><?php comments_number(); ?></li>
				</ul>
			</div>
			</div>
		</div>	
		<?php endwhile; ?>
			<?php
				endif;
		wp_reset_postdata();
?>
	</div>
	</div>
	</div>
	<section class="blog-posts">
				<div class="container">
					<div class="row">
							<div class="all-blog-posts">
								<div class="row">
									<div class="col-lg-8">
								<figure class="wp-block-image size-large is-resized"><img src="http://localhost:10014/wp-content/uploads/2020/12/blog-post-01.jpg" alt="" class="wp-image-94" width="774" height="342"/></figure>

									<?php if ( $blog_posts->have_posts() ) : ?>
										<?php
										while ( $blog_posts->have_posts() ) :
											$blog_posts->the_post();
											?>
										<div class="blog-post">
											<div class="blog-thumb">
												<?php
												if ( has_post_thumbnail() ) {
													template_post_thumbnail( get_the_ID(), 'full' );
												}
												?>
											</div>
											<div class="down-content">
												<span>Category:<?php the_category( ', ' ); ?></span>
												<h4>
													Title:<a href="<?php the_permalink(); ?>">													
													<?php
													the_title();
													?>
													</a>
												</h4>
												<?php the_excerpt(); ?>
												<ul class="post-info">
													<li>
														<?php the_author(); ?> </li>
													<li>
														<?php the_time( 'm/j/y g:i A' ); ?></li>
													<li>
														<?php comments_number(); ?> </li>
													<span><?php the_tags(); ?></span>
												</ul>
											   
											   
											</div>
										</div>
										<?php endwhile; ?>
										<?php
										else :
											?>
									<p class = "no-blog-posts">
											<?php esc_html_e( 'Sorry, no posts matched your criteria.', 'theme-domain' ); ?> 
									</p>
											<?php
											endif;
											wp_reset_postdata();
										?>
									</div>
									<div class="col-lg-4">
									<div class = "sidebar-item">
										<?php get_sidebar(); ?>
									</div>
									</div>
									<div class="col-lg-12">
										<div class="main-button">
											<a href="blog">View All Posts</a>
										</div>
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer();
?>
