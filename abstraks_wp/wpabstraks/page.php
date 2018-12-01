<?php get_header(); ?>

<div class="container">
		<div class="row">
			<div class="col-md-8">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
        <hr>
    
    <?php endwhile; else: ?>
    
            <p>There are no posts or pages here</p>
    
    <?php endif; ?>
    		</div>
    		<?php 
 				include_once("sidebar.php");
			?> 
	</div>
</div>
<?php get_footer(); ?>