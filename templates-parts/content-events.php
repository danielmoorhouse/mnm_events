<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lodc
 */

?>


    <br>
	<div class="row">
    <div class="col-md-7" style="background-image:url(<?php the_post_thumbnail_url(); ?>);background-size:cover;height:25em;">
       <div class="pl-5" style="width:100%;display:block;padding-top:10%;padding-left:25px">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title i-block white bg-grey op-7">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?> <br>
			<h4 class="i-block white bg-grey op-7 p-2"><i class="far fa-calendar-alt"></i> &nbsp;<?php the_field('event_start_date'); ?></h4><br>
            <h4 class="i-block white bg-grey op-7 p-2"><i class="far fa-clock"></i> &nbsp; <?php the_field('start_time'); ?> - <?php the_field('event_end_time'); ?></h4><br>
            <h4 class="i-block white bg-grey op-7 p-2"><i class="fas fa-location-arrow"></i> &nbsp;<strong><?php the_field('location'); ?></strong></h4><br>
			<a class="btn btn-success" href="<?php the_field('booking_link'); ?>">Book this event <i class="fas fa-arrow-right"></i> </a>
    </div>
	</div>
	<div class="col-md-5">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28093.01199439873!2d-0.10292038446214957!3d51.5114747275327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon!5e0!3m2!1sen!2suk!4v1618778874974!5m2!1sen!2suk" width="600" height="450" style="border:0;width:100%;height:25em;" allowfullscreen="" loading="lazy"></iframe>
	</div> 
	</div>
	<div class="p-3" style="width:100%;height:auto;font-size:18px;background-color:#f1f1f1;">
	<?php the_field('event_description'); ?>
	</div>


	<?php	if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				lodc_posted_on();
				lodc_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'lodc' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lodc' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php lodc_entry_footer(); ?>
	</footer><!-- .entry-footer -->
<!-- #post-<?php the_ID(); ?> -->
