<div class="col-xs-3 col-sm-2" id="sidebar" role="navigation">
		<div id="sidebar-links">
		  <div class="list-group">
				
				<?php 
				 wp_nav_menu( array(
					 'menu'              => 'primary',
					 'theme_location'    => 'primary',
					 'depth'             => 2,
					 'container'         => 'div',
					 'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse nav navbar-nav navbar-right',
					 'menu_class'        => 'nav navbar-nav',
					 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					 'walker'            => new wp_bootstrap_navwalker())
				 );
				?>
 
			</div>
			  
			  <ul id="social-links">
			  <li id="fb"><a href="https://www.facebook.com/WeddingSchool" target="_blank">Facebook</a></li>
			  <li id="twitter"><a href="https://twitter.com/aawep" target="_blank">Twitter</a></li>
			  <li id="pinterest"><a href="http://www.pinterest.com/aawep/" target="_blank">Pinterest</a></li>
			  <li id="youtube"><a href="https://www.youtube.com/user/aawep" target="_blank">Youtube</a></li>
			  <li id="google-plus"><a href="https://plus.google.com/b/116306819541262557878/116306819541262557878/posts" rel="publisher" target="_blank">Google+</a></li>
			  </ul>
		</div><!--sidebar-links-->
	</div><!--/span-->
	