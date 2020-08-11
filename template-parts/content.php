<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( '' !== get_the_post_thumbnail() ) : ?>
		
			    <div class="row entry">
                   
			        <div class="col-12 col-lg-6 wpis-img">
                        <a href="<?php the_permalink(); ?>"> 
			                <?php the_post_thumbnail( array(412.5, 298), array( 'class' => 'img-fluid' ) ); ?>
			            </a>
			        </div>
			    
			        <div class="col-12 col-lg-6">
                    
			            <h2>
                            <?php the_title('<h2>', '</h2>'); ?>
                        </h2>
                        
                        <h6>
                             <?php the_excerpt() ?>
                        </h6>
                       
                        <div class="row">
                            <div class="col-6 my-auto data">
                                <?php the_time('d.m.Y'); ?>
                            </div>
                            <div class="col-6">
                                <a href="<?php the_permalink(); ?>"> 
                                    <button type="button" class="btn btn-success">Czytaj więcej</button>
                                </a>
                            </div>
                        </div>
                        
			        </div>
			        
			    </div>
	
	<?php else: ?>
              
			    <div class="row entry">
			        
			        <div class="col-12 col-lg-6 wpis-img">
                        <a href="<?php the_permalink(); ?>"> 
			                <img src="<?php echo get_bloginfo('template_url') ?>/img/logo.png" class="img-fluid"/>
                        </a>
			        </div>
			        
			        <div class="col-12 col-lg-6">
			            <h1>
                            <?php the_title('<h1>', '</h1>'); ?>
                        </h1>
                        <?php the_excerpt() ?>
                        <div class="row">
                            <div class="col-6 my-auto data">
                                <?php the_time('d.m.Y'); ?>
                            </div>
                            <div class="col-6">
                                <a href="<?php the_permalink(); ?>"> 
                                    <button type="button" class="btn btn-success">Czytaj więcej</button>
                                </a>
                            </div>
                        </div>
			        </div>
			        
			    </div>
					
	<?php endif; ?>
	
</article>
