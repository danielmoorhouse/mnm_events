<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lodc
 */

get_header();
?>
<div class="container">

<h1>Events</h1><br />
<div class="row">
<?php
/**
 * Setup query to show the ‘events’ post type with ‘1’ posts.
 * Output the title with an excerpt.
 */
    $args = array( 
        'post_type' => 'events',
        'post_status' => 'publish',
        'meta_key' => 'event_start_date',
        'orderby' => 'meta_value',
         'order' => 'ASC'
 
    );

        $loop = new WP_Query( $args );   
 if( $loop->have_posts() ):      
    while ( have_posts() ) : the_post(); ?>
            <div class="col-4 p-3">
            <h4><?php the_title(); ?></h4><br>
            <h4><i class="far fa-calendar-alt"></i> &nbsp;<?php the_field('event_start_date'); ?></h4><br>
            <h4><i class="far fa-clock"></i> &nbsp; <?php the_field('start_time'); ?> - <?php the_field('event_end_time'); ?></h4><br>
            <h4><i class="fas fa-location-arrow"></i> &nbsp;<strong><?php the_field('location'); ?></strong></h4><br>
            <a class="btn btn-primary" itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
More info & booking &nbsp; <i class="fas fa-arrow-circle-right"></i></a>
                <p><?php the_content(); ?></p>
      </div>
            <?php endwhile; // end of the loop. ?>
        <?php endif; // end of the if statement. ?>
    
        </div><!-- #content -->
    </div><!-- #primary -->
    <div class="container-fluid">
    <?php get_footer(); ?>
    </div>