<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?> <?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description')?>">
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Open+Sans|Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    
    <?php wp_head(); ?>
  </head>
  
  <body <?php body_class(); ?>>
   
       <header>

        <nav class="navbar navbar-dark navigation navbar-expand-md" data-toggle="sticky-onscroll">
          
          <div class="own-grid row">
            <div class="col-md-3 col-4 av navbar-brand">
				 <a href="http://www.lg-tech.com.pl/">
                 	<img src="<?php echo get_bloginfo('template_url') ?>/img/abc.png" class="img-fluid"/>
				 </a>
             </div>
            
              <button class="navbar-toggler float-right ml-auto" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji">
                 <span class="navbar-toggler-icon"></span>
             </button>
			  
				  
              	<div class="col-md-9 col-8 collapse navbar-collapse order-3 order-md-3" id="mainmenu">
                 <div class="menu float-right ml-auto" id="change">
                  
               
                      <ul class="nav navbar-nav">

                          <?php
                                wp_nav_menu( array(
                                    'theme_location'    => 'primary',
                                    'theme_location'    => 'primary',
                                    'depth'             => 2,
                                    'container'         => 'div',
                                    'container_class'   => '',
                                    'container_id'      => 'collapse navbar-collapse',
                                    'menu_class'        => 'nav navbar-nav',
                                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker' => new WP_Bootstrap_Navwalker(),
                                ) );
                          ?>

                      </ul>
                 </div>      
                  
              </div>
			</div>
            
             
          </nav>

      </header>
  
    
     
     
     
      

	
     
      