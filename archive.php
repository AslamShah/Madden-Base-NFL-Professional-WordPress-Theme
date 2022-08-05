<?php
/**
 *  The template for displaying Archive pages
 */

get_header(); ?>

<!-- ========== BLOG ========== -->
<div class="container">
    <div class="row">
        <div class="col-sm-8 blog-main">
    
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <div class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2 class="blog-post-title">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                </h2>

                <p class="blog-post-meta"><?php the_date ('F j, Y'); ?>  
                    by <a href="#"><?php the_author(); ?></a><br>


                    <i class="fa fa-tag"></i><?php the_tags('Tagged: ') ?><br>


                    <i class="fa fa-folder-open"></i>Category: <?php the_category( ', ' ); ?>
                </p>

                <?php the_content() ?>

            </div><!-- /.blog-post -->

            <!-- Load up comments template -->
            <?php comments_template(); ?>

            <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'maddenbase' ); ?></p>
            <?php endif; ?>

        </div><!-- /.blog-main -->

        <!-- ========== SIDEBAR ========== -->
        <div class="col-sm-4 blog-sidebar">

            <?php get_sidebar(); ?> 

        </div><!-- /.blog-sidebar -->                                        
    </div><!-- /.row -->
</div><!-- /.container -->


<?php get_footer(); ?>


