<?php 
/* Template Name: FULL WIDTH */
get_header(); ?>

		<main role="main">
		<!-- section -->
		<section>
		
		
		<div class="container-fluid">
		
			<div class="container content">
			<div class="row">
							  
			<h2><?php wp_title( ); ?></h2>

			
		
				
			</div><!--/row-->
			</div><!--/container-->
		 </div><!--/container-fluid-->
		
		
		  <div class="container-fluid contact-form-wrap">
		
        
				<div class="container">
				
							<div class="col-md-12">


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_content( ); ?>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>		

					</div>
								 
						  
			   </div><!-- container -->
                        
                  
		</div><!-- container-fluid-->
        
        
        
        
</section>
</main>
	
	
	
	
	
		
	


<?php get_footer(); ?>
