<?php
/**
 *  The template for displaying pages
 */

get_header(); ?>

<div class="container ">
    <div class="row m-0">
        <div class="col-sm-8 blog-main mt-5">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>

            <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no pages matched your criteria.', 'maddenbase' ); ?></p>
            <?php endif; ?>

        </div><!-- /.blog-main -->

<!-- ========== SIDEBAR ========== -->
        <div class="col-sm-4 blog-sidebar">

            <?php get_sidebar(); ?>

        </div><!-- /.blog-sidebar -->
    </div><!-- /.row -->
</div><!-- /.container -->
	

<?php get_footer(); ?>