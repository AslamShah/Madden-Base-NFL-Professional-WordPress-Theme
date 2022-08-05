<?php get_header(); ?>

<!-- ========== BLOG ========== -->
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-8 blog-main mt-5 ">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2 class="blog-post-title">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                </h2>

                <!-- Date function: Use 'echo get_the_date()' instead of 'the_date()'. 'the_date()' only shows the date for the first post of the day.  -->
                <p class="blog-post-meta"><?php echo get_the_date('F j, Y'); ?>
                    by <a href="#"><?php the_author(); ?></a><br>

                    <i class="fa fa-tag"></i>
                    <?php the_tags(__('Tagged: ', 'maddenbase')); ?>
                    <br>


                    <i class="fa fa-folder-open"></i>
                    <?php _e( 'Category', 'maddenbase' ); ?>
                    <?php the_category( ', ' ); ?>
                </p>
                
                <?php the_excerpt() ?>
                <a href="<?php echo get_permalink(); ?>"> 
                    <?php _e( 'Read more...', 'maddenbase' ); ?>
                </a>


            </div><!-- /.blog-post -->

            <?php endwhile; else : ?>
            <h2><?php _e( 'Sorry, no matches for <em>' . get_search_query() . '</em>, please search again.' ); ?></h2>
            <?php endif; ?>
            
            

            <!-- Add the pager functions here. -->
           


        </div><!-- /.blog-main -->

        <!-- ========== SIDEBAR ========== -->
        <div class="col-sm-4 blog-sidebar">

            <?php get_sidebar(); ?> 

        </div><!-- /.blog-sidebar -->                                        
    </div><!-- /.row -->
</div><!-- /.container -->


<?php get_footer(); ?>

