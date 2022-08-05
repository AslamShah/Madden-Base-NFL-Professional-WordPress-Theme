<?php get_header(); ?>

<div class="main-contents">
      <div class="row">
      
        <div class="col-lg-3 border-right test1 p-0" >  	  <div class="row mt-5">
		
		 <div class="col-md-12 p-0" style="margin-top: -19px;">
			 <div class="row m-0">
				 <div class="col-md-12 p-0">
					
				 <h1 class="text-center">Video Gallery</h1>
			 		
				 </div>
			 </div>
			 	 <div class="row m-0">
				 <div class="col-md-12 d-flex justify-content-center align-item-center align-content-center p-0">
					
			<?php echo do_shortcode('[Total_Soft_Gallery_Video id="4"]');?>
			 		
				 </div>
			 </div>
		 </div>
	 </div></div>
          <div class="col-lg-6">
             
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				

                <h2 class="blog-post-title m-0 p-0">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_title(); ?></a>
                </h2>

                <!-- Date function: Use 'echo get_the_date()' instead of 'the_date()'. 'the_date()' only shows the date for the first post of the day.  -->
                <p class="blog-post-meta"><?php echo get_the_date('F j, Y'); ?>
                    by <a href="#"><?php the_author(); ?></a><br>

                <i class="fa fa-tag"></i>
                    <?php the_tags(__('Tagged: ', 'maddenbase')); ?>
                <br>


                <i class="fa fa-folder-open"></i>
                    <?php _e( 'Category: ', 'maddenbase' ); ?>
                    <?php the_category( ', ' ); ?>
                </p>

                <?php the_post_thumbnail(); ?>

                <?php the_excerpt() ?>
                <a href="<?php echo get_permalink(); ?>">
                    <?php _e( 'Read More...', 'maddenbase' ); ?>
                </a>


            </div><!-- /.blog-post -->

            <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'maddenbase' ); ?></p>
            <?php endif; ?>


            <!-- Add the pager functions here. -->
            <nav>
                <ul class="pager">
                    <li><?php next_posts_link(__('Older Posts', 'maddenbase')); ?></li>
                    <li><?php previous_posts_link(__('Newer Posts', 'maddenbase')); ?></li>
                </ul>
            </nav>
          </div>
          
           <div id="shuffleParent" class="col-lg-3 pt-4 border-left"><div id="shuffle"><a class="twitter-timeline" data-height="378" data-theme="light" href="https://twitter.com/MaddenBase?ref_src=twsrc%5Etfw">Tweets by MaddenBase</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
         </div>
                <div id="shuflle1" class="pt-4"><h3  align="center">FOLLOW US ON INSTAGRAM</h3>
                    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-03ee2304-19f4-4aa4-aad5-338f6aa195ef"  style="width: 100%; height:378px"></div>

</div>

</div>
         
        
      </div>
            </div>

<?php get_footer(); ?>