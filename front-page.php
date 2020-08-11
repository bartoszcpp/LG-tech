<?php get_header(); ?>
    
    <?php if ( get_header_image() ) : ?>
    <a href="http://www.lg-tech.com.pl/">
            <div class="header-image " style="background-image: url(<?php header_image(); ?>);"></div>
    </a>
    <?php endif; ?>
   
    
    <main>
      <section class="container-fluid udu">
       
        <div class="row social ">

            <div class="col-md-4 icon">
                <div class="option">
                   <a href="http://www.lg-tech.com.pl/konstruowanie/">
                        <section>
                            <div class="">
                                <div class="hovereffect">
                                     <?php if ( is_active_sidebar('box1')) : ?>
                                         <?php dynamic_sidebar('box1'); ?>
                                     <?php endif; ?>
                                </div>
                                <div class="desc">
                                    <p><?php if ( is_active_sidebar('box2')) : ?>
                                         <?php dynamic_sidebar('box2'); ?>
                                     <?php endif; ?></p>
                                </div>               
                            </div>
                        </section>
                    </a>
                </div>
            </div>

            <div class="col-md-4 icon">
                <div class="option">
                   <a href="http://www.lg-tech.com.pl/obliczanie/">
                        <section>
                            <div class="boxer">
                                <div class="hovereffect">
                                    <?php if ( is_active_sidebar('box3')) : ?>
                                         <?php dynamic_sidebar('box3'); ?>
                                     <?php endif; ?>
                                </div>
                                <div class="desc">
                                    <p><?php if ( is_active_sidebar('box4')) : ?>
                                         <?php dynamic_sidebar('box4'); ?>
                                     <?php endif; ?></p>
                                </div>   

                            </div>
                        </section>
                    </a>
                </div>
            </div>
            
            <div class="col-md-4 icon">
                <div class="option">
                   <a href="http://www.lg-tech.com.pl/obrobka-mechaniczna/">
                        <section>
                            <div class="boxer">
                                <div class="hovereffect">
                                    <?php if ( is_active_sidebar('box5')) : ?>
                                         <?php dynamic_sidebar('box5'); ?>
                                     <?php endif; ?>
                                </div>
                                <div class="desc">
                                    <p><?php if ( is_active_sidebar('box6')) : ?>
                                         <?php dynamic_sidebar('box6'); ?>
                                     <?php endif; ?></p>
                                </div>               
                            </div>
                        </section>
                    </a>
                </div>
            </div>

        </div>
        
     </section>            
    </main>  
     
     <?php get_footer();