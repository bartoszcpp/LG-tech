<?php get_header(); ?>
    
    <?php if ( get_header_image() ) : ?>
    <a href="http://www.lg-tech.com.pl/">
            <div class="header-image" style="background-image: url(<?php header_image(); ?>);"></div>
    </a>
    <?php endif; ?>
   
    <main>
       
            
         <article class="container-fluid udu">

                    <div class="section1">

                            <div class="social-info-content">
                                    <?php the_title('<h4 class="entry-title">', '</h4>' ); ?>
                            </div>

                                <?php if (have_posts()) : ?>
                                    <?php while (have_posts()) : the_post(); ?>
                                    
                                       <div class="wpis">
                                            <div class="entry">
                                                
                                                <div class="entry-content">
                                                    <?php the_content() ?>
                                                </div>

                                            </div>
                                       </div>
                                    
                                    <?php endwhile; ?>
                                <?php endif; ?> 
                        
                            

                        </div>
                </article>
        
    </main>  
     
<?php get_footer();