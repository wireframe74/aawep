<?php 
/* Template Name: Home */

include_once('home-header.php'); ?>

	<main role="main">
		<!-- section -->
		<section>
	
	
	<div class="container-fluid">
		
		
				  	  
			<div class="row padding-vertical">
							
			<aside class="group col-sm-6 col-md-3 col-lg-3">
             <a href="<?php bloginfo('url'); ?>/courses/" class="courses-cta cta"> 
			 <h2>Our<br>Courses</h2>
            </a>
			</aside><!--/span-->
			
		
			<aside class="group col-sm-6 col-md-3 col-lg-3">
             <a href="http://www.youtube.com/watch?v=sABmGMAB_mc" target="_blank" class="about-cta cta video"> 
			 <h2>About</h2>
            </a>
			
			</aside><!--/span-->
			
           
			<aside class="group col-sm-6 col-md-3 col-lg-3">
			 <a href="<?php bloginfo('url'); ?>/advisory-board/" class="advisory-cta cta"> 
			 <h2>Advisory<br>Board</h2>
            </a>
		
			</aside><!--/span-->
			
				
			<aside class="group col-sm-6 col-md-3 col-lg-3">
             <a href="<?php bloginfo('url'); ?>/student-of-the-month/" class="student-cta cta video"> 
			 <h2>Student <br>of the <br>Month</h2>
            </a>
			</aside><!--/span-->
			
			
			<aside class="group col-sm-6 col-md-3 col-lg-3">
             <a href="<?php bloginfo('url'); ?>/resources/" class="resources-cta cta"> 
			 <h2>Student<br>Resources</h2>
            </a>
			</aside><!--/span-->
			
			
			<aside class="group col-sm-6 col-md-3 col-lg-3">
             <a href="<?php bloginfo('url'); ?>/success-stories/" class="success-cta cta"> 
			 <h2>Success<br>Stories</h2>
            </a>
			</aside><!--/span-->


			<aside class="group col-sm-6 col-md-3 col-lg-3">
				<div class="twitter-cta cta"> <h2>@AAWEP</h2>
				
					<?php 
					$page = 754;
					query_posts('post_type=page&order=ASC&p='.$page);
					if (have_posts()): while (have_posts()) : the_post(); ?>
					
					<?php the_content(); ?>
					
					<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
					
					
				<?php // if ( function_exists( "display_tweets" ) ) { display_tweets(); } ?>
				</div>
			</aside><!--/span-->
			
			
			
			<aside class="group col-sm-6 col-md-3 col-lg-3">
            <a href="<?php bloginfo('url'); ?>/academy-tv/" class="wedding-cta video cta"> 
			<h2>#Wedding<br>Wednesday</h2>
            </a>
			</aside><!--/span-->			
							  
							
							   
							   
							   
							   
							   
							
							
		</div><!--/row-->
		</div><!--/container-fluid-->
		</section><!-- /section -->
		</main>
	
	
	
	


<?php get_footer(); ?>
