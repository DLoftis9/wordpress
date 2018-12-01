<?php get_header(); ?>

	<div class="slideBanner">
		<?php 
 			include_once("sliderTemplate.php");
		?> 
    </div>
    
    <div class="container">
  
            <div class="row">
                <div class="col-md-8 mainBackground">
    
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
            <?php get_template_part( 'content', 'post' ); ?>
        	 
        <?php endwhile; else: ?>
        
                <p>There are no posts or pages here</p>
        
        <?php endif; ?>
                      
                    <div class="navigation">
                        <div class="alignleft">
							<?php previous_posts_link( 'Prev' );
                            ?>
                        </div>
                        <div class="alignright">
							<?php next_posts_link( 'Next', '' );
						 	?>
                         </div>                
                    </div>
 
    			</div>
             	 
				<?php 
 					include_once("sidebar.php");
				?> 
       
    	</div>
    </div>

<?php get_footer(); ?>