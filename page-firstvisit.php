<?php get_header(); ?>
    
    <?php if ( get_header_image() ) : ?>
    <a href="http://www.lg-tech.com.pl/">
            <div class="header-image" style="background-image: url(<?php header_image(); ?>);"></div>
    </a>
    <?php endif; ?>
   
    
    <main>
      <div class="container-fluid udu">
        <div class="section1">


                            <?php
                                 while ( have_posts() ) :
                                    the_post();
                                    get_template_part( 'template-parts/content-page', 'page' );
                                endwhile;
			                 ?> 
                
        </div>
    </div>            
    </main>  
     
<div class="dec">
        
        <div class="container-fluid footer">
		 <div class="section1">
           <div class="row yty">
               
               <div class="col-md-4 kontakt">
                    
               </div>
               
               <div class="col-md-8 lr">
                   <div class="row text">
					   
						   <div class="col-md-4">
							   <a href="http://www.lg-tech.com.pl/konstruowanie">
							       <p><?php if ( is_active_sidebar('box2')) : ?>
                                         <?php dynamic_sidebar('box2'); ?>
                                    <?php endif; ?></p>
							   </a>
						   </div>
					   
					   
						   <div class="col-md-4">
							   <a href="http://www.lg-tech.com.pl/obliczanie">
							   <p><?php if ( is_active_sidebar('box4')) : ?>
                                         <?php dynamic_sidebar('box4'); ?>
                                    <?php endif; ?></p>
				                </a>
						   </div>
				       
					   
						   <div class="col-md-4">
							   <a href="http://www.lg-tech.com.pl/obrobka-mechaniczna">
							   <p><?php if ( is_active_sidebar('box6')) : ?>
                                         <?php dynamic_sidebar('box6'); ?>
                                    <?php endif; ?></p>
								   </a>
						   </div>
					   
                   </div>
                   
               </div>
               
           </div>
           <div class="border"></div>
           <div class="left">
               <?php if ( is_active_sidebar('box8')) : ?>
                   <?php dynamic_sidebar('box8'); ?>
               <?php endif; ?>
            </div>
         </div>
         </div>
    </div>
  
<?php wp_footer(); ?>

  </body>
</html>



