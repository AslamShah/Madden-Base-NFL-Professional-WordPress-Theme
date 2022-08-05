<?php 
/**
 *  Template Name: Gallery Page Custom Template
 */
get_header(); ?>

 <div class="main-contents">
      <div class="row">
      
      
          <div class="col-lg-12">
             
			  
			  <div class="row m-4">
		
		 <div class="col-md-12 p-0">
			 <div class="row m-0">
				 <div class="col-md-12">
					
				 <h1 class="text-center">Video Gallery</h1>
			 		
				 </div>
			 </div>
			 	 <div class="row m-0">
				 <div class="col-md-12 d-flex justify-content-center align-item-center align-content-center p-0">
					
			 <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
      the_content();
      endwhile; else: ?>
      <p>!Sorry no posts here</p>
<?php endif; ?>
			 		
				 </div>
			 </div>
		 </div>
	 </div>
          </div>
          
      
        
      </div>
	
</div>

<?php get_footer(); ?>