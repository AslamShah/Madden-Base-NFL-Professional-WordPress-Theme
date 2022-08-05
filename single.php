 <?php get_header(); ?>

<div class="row">
        <div class="col-sm-12 col-md-8 blog-main">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2 class="blog-post-title">
                    <?php the_title(); ?>
                </h2>

                <p class="blog-post-meta"><?php the_date ('F j, Y'); ?>
                    by <a href="#"><?php the_author(); ?></a><br>


                    <i class="fa fa-tag"></i>
                    <?php the_tags(__('Tagged: ', 'maddenbase')); ?><br>


                    <i class="fa fa-folder-open"></i>
                    <?php _e( 'Category: ', 'maddenbase' ); ?>
                    <?php the_category( ', ' ); ?>
                </p>

                <?php the_post_thumbnail(); ?>
                <?php the_content() ?>

                <!-- wp_link_pages is responsible for the pagination of long posts, when combined with nextpage comment in the post -->
                <?php wp_link_pages(); ?>

            </div><!-- /.blog-post -->

            <!-- Add the pager functions here. -->
            <nav>
                <ul class="pager">
                    <li><?php next_post_link(); ?></li>
                    <li><?php previous_post_link(); ?></li>
                </ul>
            </nav>


            <!-- Load up comments template -->
            <?php comments_template(); ?>

            <?php endwhile; else : ?>

            <p><?php _e('Sorry, no posts matched your criteria.', 'maddenbase'); ?></p>
            <?php endif; ?>



        </div><!-- /.blog-main -->

        <!-- ========== SIDEBAR ========== -->
        <div class="col-sm-4 blog-sidebar">

        <?php get_sidebar(); ?>

        </div><!-- /.blog-sidebar -->
    </div><!-- /.row -->

 <?php get_footer(); ?>