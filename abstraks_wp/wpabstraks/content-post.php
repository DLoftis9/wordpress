	<div class="row">
		<div class="col-md-10 postContent">
                    
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                           
                    <ul class="info">
                    	<i class="fa fa-calendar fa-lg"></i>
                    	<p class="dateStamp"><?php the_time('F j, Y'); ?> - <?php the_category(', '); ?></p>
                      <li></li>
                    </ul>
                    
                    <div class="excerpt">
                    
                    	<?php if(is_single()): ?>
                        	
							<?php the_content(); ?>
							<?php comments_template(); ?>
                        
                     <?php else: ?>
                    	
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <?php the_post_thumbnail( array(525, 525) ); ?>
                            </a>
                    		<?php endif; ?>
                        
                    <?php the_excerpt(); ?>
                    <p><a class="post-link" href="<?php the_permalink(); ?>">Continue Reading &rarr;</a></p>
                    
                    <?php endif; ?>
                    </div>
		</div>
	</div>