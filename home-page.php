<?php
/*
Template Name: Шаблон главной
*/
?>
<?php get_header(); ?>
<div class="no-sidebar">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); 

			?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->
				<section class="home-new-post entry-content">
					<?php
						$args = array(
							'include' => array(2, 7, 1),
						);
						$categories = get_categories( $args );
						if( $categories ){
							foreach( $categories as $cat ){ ?> 
							<h2><?php echo $cat->name; ?></h2>
							<?php
							$args_post = array(
									'cat' => $cat->term_id,
									'post_type' => 'post',
									'posts_per_page' => '3',
									//'post__not_in' => $post->ID,
								);
							$query = new WP_Query( $args_post );
							  
							if ( $query->have_posts() ) { ?>
							  
								<div class="<?php echo $cat->name; ?> listing">
									
							  
								<?php while ( $query->have_posts() ) { 							  
										$query->the_post();
										
										if ( in_category( 2 ) || in_category( 7 )) {
										?>
										
										<article id="post-<?php the_ID(); ?>" <?php post_class( 'category-listing' ); ?>>
											<?php the_excerpt( __( 'Continue Reading <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ) ); ?>
										</article>
									<?php } else { ?>
										<article id="post-<?php the_ID(); ?>" <?php post_class( 'category-listing' ); ?>>
											<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										</article>
									<?php } ?>
								
							  <?php } ?>
							  </div>
							<?php } // end if
							wp_reset_postdata();

							 }
						}
					?>
				</section>
			<?php endwhile; 
			?>

		</main><!-- .site-main -->

		<?php get_sidebar( 'content-bottom' ); ?>

	</div><!-- .content-area -->
</div>


<?php get_footer(); ?>
