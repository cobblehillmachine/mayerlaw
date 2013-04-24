<?php
 /*
Template Name: ABOUT
*/

get_header(); ?>

	<div id="primary">
		<div class="page-title-cont">
			<div class="page-tab">
				<span><?php dimox_breadcrumbs(); ?></span>
			</div>
		</div>
		<div id="content" role="main">
			
			<?php query_posts( 'post_type=tri_about' ); ?>

			<?php while ( have_posts() ) : the_post(); ?>
				
					<div class="single-service-box">
						<div class="col-left">
							<div class="featured-image">		 
								<?php the_post_thumbnail(); ?>

							</div>
							<div class="video-cont">
								<iframe src="http://www.youtube.com/embed/CGYLiek7FH4?rel=0" frameborder="0" width="352" height="242"></iframe>
							</div>
						</div>
						<div class="col-right">
							<div class="title-cont">
								<h1><?php the_title(); ?></h1>			
							</div>
							<div class="divider-cont">
								<div class="divider"></div>
							</div>
							<div class="post-text">
								<?php the_content(); ?>
							</div>
						</div>
					
					
					</div>

			<?php endwhile; // end of the loop. ?>
			

		</div><!-- #content -->
	</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>