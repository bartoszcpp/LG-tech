<?php get_header(); ?>
    
    <?php if ( get_header_image() ) : ?>
    <a href="http://www.lg-tech.com.pl/">
            <div class="header-image" style="background-image: url(<?php header_image(); ?>);"></div>
    </a>
    <?php endif; ?>
   
    
    <main>

        <div class="container-fluid udu">
            <div class="section1">

                                <div class="row contact">

                                    <div class="col-md-9 mb-md-0 mb-5">

                                       <?php echo do_shortcode( '[contact-form-7 id="5" title="Formularz 1"]' ); ?>

                                    </div>

                                    <div class="col-md-3 text-center">
                                        <ul class="list-unstyled mb-0"><br>
                                            <li><i class="fas fa-map-marker-alt" style="font-size:34px; color: #494a49"></i>
                                                <?php if ( is_active_sidebar('box12')) : ?>
                                                    <?php dynamic_sidebar('box12'); ?>
                                                <?php endif; ?>
                                            </li>

                                            <li><i class="fas fa-phone" style="font-size:34px; color: #494a49"></i>
                                                <?php if ( is_active_sidebar('box13')) : ?>
                                                    <?php dynamic_sidebar('box13'); ?>
                                                <?php endif; ?>
                                            </li>

                                            <li><i class="fas fa-envelope" style="font-size:34px; color: #494a49"></i>
                                                <?php if ( is_active_sidebar('box14')) : ?>
                                                    <?php dynamic_sidebar('box14'); ?>
                                                <?php endif; ?>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                                
                                       
            </div> 
        </div> 
            
        
    </main>  
    
     
     <?php get_footer();
    

    
    
    
    
    
    
    
    