<!doctype html>
<html  <?php language_attributes(); ?>>
<head >
 
<meta charset="<?php bloginfo( 'charset' ); ?>">
<?php // force Internet Explorer to use the latest rendering engine available ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title><?php wp_title(''); ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Fontawesome -->
 <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
 <?php wp_head(); ?>
    


</head>

<body <?php body_class(); ?>>  
    
    
    <div class="web-wrapper" id="webWrapper"> 
      <div class="web-header  justify-content-center align-content-center" id="webHeader"><a class="" href="#"> <?php if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo(); 
} ?>
		  </a></div>
		
		 <div class="web-nav" id="webNav"><nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbar-toggler" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


    <?php wp_nav_menu( array(
    'theme_location'  => 'primary',
    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
    'container'       => 'div',
    'container_class' => 'collapse navbar-collapse justify-content-center align-content-center align-items-center',
    'container_id'    => 'navbar-toggler',
    'menu_class'      => 'navbar navbar-nav d-flex justify-content-center align-content-center align-items-center',
	
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
) ); ?>
 
</nav></div>