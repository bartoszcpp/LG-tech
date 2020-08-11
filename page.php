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
     
     <?php get_footer();
   

   
   