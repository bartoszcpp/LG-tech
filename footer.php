<div class="dec">
        
        <div class="container-fluid footer">
		 <div class="section1">
           <div class="row yty">
               
               <div class="col-md-4 kontakt">
                    <?php if ( is_active_sidebar('box7')) : ?>
                                     <?php dynamic_sidebar('box7'); ?>
                    <?php endif; ?>
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
							   <a href="http://www.lg-tech.com.pl/spawanie">
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



