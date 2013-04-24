<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<div class="single-service-box" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php	if ( has_post_thumbnail() ) { ?>
	<div class="col-left">
		<div class="featured-image">		 
			<?php the_post_thumbnail(); ?>
		
		</div>
		<div class="video-cont">
			<iframe width="352" height="242" src="http://www.youtube.com/embed/CbmCiZtV4bw?rel=0" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
	<div class="col-right">
		<div class="title-cont">
			<h1><?php the_title(); ?></h1>			
		</div>
		<div class="title-cont">
			<div class="divider"></div>
		</div>
		<div class="post-text">
			<?php the_content(); ?>
		</div>
	</div>
	<?php } else { ?>
		<div class="main-content" style="margin-left:30%;">
			<div class="title-cont">
				<h1><?php the_title(); ?></h1>			
			</div>
			<div class="title-cont">
				<div class="divider"></div>
			</div>
			<div class="post-text">
				<?php the_content(); ?>
			</div>
		</div>
	<?php } ?>


	
		
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>

</div><!-- #post-<?php the_ID(); ?> -->
