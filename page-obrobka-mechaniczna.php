<?php get_header(); ?>
    
    <?php if ( get_header_image() ) : ?>
    <a href="http://www.lg-tech.com.pl/">
            <div class="header-image" style="background-image: url(<?php header_image(); ?>);"></div>
    </a>
    <?php endif; ?>
   
    
    <main>
      <div class="container-fluid udu">
        <div class="section1">

        <?php query_posts('cat=5&post_status=publish&posts_per_page=9&paged='. get_query_var('paged')); ?>

                            <?php $counter = 1; ?>
                        
                                <div class="row">

                                   <?php if (have_posts()) : ?>
                                       <?php while (have_posts()) : the_post(); ?>

                                        <?php if ($counter==1) : ?>

                                            <div class="col-md-4 col-sm-4 wpis">
                                                <?php get_template_part( 'template-parts/content-gallery', get_post_format() ); ?>
                                            </div>

                                            <?php $counter = 2; ?>
                                            <?php continue; ?>
                                         <?php endif; ?> 

                                        <?php if ($counter==2) : ?>

                                            <div class="col-md-4 col-sm-4 wpis">
                                                <?php get_template_part( 'template-parts/content-gallery', get_post_format() ); ?>  
                                            </div>

                                            <?php $counter = 3; ?>
                                            <?php continue; ?>
                                         <?php endif; ?> 
                                         
                                         <?php if ($counter==3) : ?>

                                            <div class="col-md-4 col-sm-4 wpis">
                                                <?php get_template_part( 'template-parts/content-gallery', get_post_format() ); ?>  
                                            </div>

                                            <?php $counter = 1; ?>
                                            <?php continue; ?>
                                         <?php endif; ?> 

                                    <?php endwhile; ?>

                                   <?php endif; ?> 
                                   
                                </div>  
                            <?php fellowtuts_wpbs_pagination(); ?>
        </div>
    </div>            
    </main>  
     
     <?php get_footer();