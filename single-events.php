<?php
/**
 * The template for displaying all single event posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Lodc
 */

get_header();
?>

	<div id="primary" class="site-main container">
   
       <div class="row">
	   <div class="col-md-12">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
?>
<?php
			the_post_navigation(
				array(
					'prev_text' => '<span class="btn btn-info" style="width:50%;float:left;border-radius:0!important;font-size:20px;font-weight:bold;"><i class="fas fa-arrow-left"></i>' . esc_html__( '', 'lodc' ) . ' %title</span>',
					'next_text' => '<span class="btn btn-success" style="width:50%;float:left;border-radius:0!important;font-size:20px;font-weight:bold;">' . esc_html__( '', 'lodc' ) . '%title <i class="fas fa-arrow-right"></i></span>',
				)
			);

		endwhile; // End of the loop.
		?>
		</div> 
		<!-- <div class="col-md-3 offset-md-1">
		<?php //get_sidebar(); ?>

		</div> -->
</div>
	</div><!-- #main -->

<?php

get_footer();