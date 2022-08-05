<?php
/**
 *  Template Name: 404 page
 */

get_header(); ?>

<!-- ========== 404 PAGE ========== -->
<section id="lost" style="margin-bottom: 200px;">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2><?php _e( "Let's get back on track:", 'maddenbase' ); ?></h2>
                <img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/divider-purple.png" alt="divider">
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
            <div class="col-sm-6">
                <?php the_widget( 'WP_Widget_Archives'); ?>
            </div>
            <div class="col-sm-6">
                <?php the_widget( 'WP_Widget_Categories'); ?>
            </div>
            <div class="col-sm-6">
                <?php the_widget( 'WP_Widget_Recent_Posts'); ?>
            </div>
            <div class="col-sm-6">
                <?php the_widget( 'WP_Widget_Tag_Cloud'); ?>
            </div>
        </div><!-- /.row -->
        
      
        
    </div><!-- /.container -->
</section><!-- /.section -->


<?php get_footer(); ?>