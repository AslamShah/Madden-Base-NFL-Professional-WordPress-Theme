<?php get_header(); ?>

 <div class="main-contents">
      <div class="row">
      
      
          <div class="col-lg-9">
             
                   <!-- Buttons -->
  <div class="custom-padding">
   
    <div class="row">
      <!-- MUT-->
        
      <div class="col-lg-6 mb-3 mb-lg-0">
          <a href="<?php echo get_template_directory_uri() . '../../blog '?>">
        <div class="hover hover-3 text-white rounded"><img src="<?php header_image(); ?>" alt="featured image">
          <div class="hover-overlay"></div>
          <div class="hover-3-content px-5 py-4">
            <h3 class="hover-3-title text-uppercase font-weight-bold mb-1"><span class="font-weight-light">MUT </span></h3>
           
          </div>
        </div>
              </a>
      </div>
           
      <!-- FRANCHISE   -->
       
      <div class="col-lg-6">
           <a href="<?php echo get_template_directory_uri() . '../../blog '?>">
        <div class="hover hover-3 text-white rounded"><img src="<?php echo get_template_directory_uri() . '/Assets/Images/Franchise.jpg '?>" alt="">
          <div class="hover-overlay"></div>
          <div class="hover-3-content px-5 py-4">
            <h3 class="hover-3-title text-uppercase font-weight-bold mb-1"><span class="font-weight-light">FRANCHISE </span></h3>
           
          </div>
        </div>
              </a>
      </div>
            
    </div>
  </div>
              
               <div class="row">
                  
                <div class="col-lg-12 pb-4"><h3 align="center">FOLLOW US ON TWITCH</h3><iframe SameSite="None" src="https://player.twitch.tv/?channel=maddenbase&parent=maddenbase.com" frameborder="0" allowfullscreen="true" scrolling="no" height="500" width="100%"></iframe>
</div>
                       <div class="col-lg-12 pb-4"><h3   align="center">TWITCH CHAT LIVE</h3><iframe
  id="chat_embed"
  src="https://www.twitch.tv/embed/maddenbase/chat?parent=maddenbase.com"
  height="500"
 width="100%">
</iframe>
</div>
                  
                   <div class="col-lg-12"><h3  align="center">FOLLOW US ON YOUTUBE</h3><iframe width="100%" height="500" src="https://www.youtube.com/embed/5tkGKh6Ogt4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
               
            </div>
			  
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