<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( '' !== get_the_post_thumbnail() ) : ?>
		
			    <div class="entry-gallery">
                       
                        <div class="hovereffect">
                        
                            <a href="<?php the_permalink(); ?>"> 
                                <?php the_post_thumbnail( array(412.5, 298), array( 'class' => 'img-fluid' ) ); ?>
                                <div class="overlay"></div> 
                            </a>
                                         
                                               
                        </div>
			 
                    <a href="<?php the_permalink(); ?>"> 
                        <h3>
                            <?php the_title('<h3>', '</h3>'); ?>
                        </h3>
                    </a>
                </div>
                        
			        
	
	<?php else: ?>
              
			    <div class="entry-gallery">
			        
			        <div class="wpis-img">
                       
                       <div class="hovereffect">
                        
                            <a href="<?php the_permalink(); ?>"> 
			                    <img src="<?php echo get_bloginfo('template_url') ?>/img/logo.png" class="img-fluid"/>
                            </a>
                            <div class="overlay"></div>              
                                               
                        </div>
                          
			        </div>
     
                    <a href="<?php the_permalink(); ?>"> 
                        <h1>
                            <?php the_title('<h1>', '</h1>'); ?>
                        </h1>
                    </a>
                    
			    </div>
					
	<?php endif; ?>
	
</article>
