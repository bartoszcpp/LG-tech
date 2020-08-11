<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <div class="social-info-content">
        <?php the_title('<p class="entry-title">', '</p>'); ?>
    </div>
	
	<div>
	
		<?php the_content(); ?>
		
	</div>
	
</article>