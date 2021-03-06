<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6 no-js"> <![endif]-->
<!--[if IE 7 ]> <html class="ie7 no-js"> <![endif]-->
<!--[if IE 8 ]> <html class="ie8 no-js"> <![endif]-->
<!--[if IE 9 ]> <html class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js <?php $post_type =  get_post_type( $post ); if( $post->post_parent == '1830' || in_category(460) || $post_type == 'google-hangouts' || $post_type == 'podcast' || $post_type == 'academy-tv'): ?> parent-pageid-1830
<?php endif; ?>"> <!--<![endif]-->
  <head>
  
  
     <meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon">
       

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width,initial-scale=1.0"> 
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		
		

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" >
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/custom.css" >
		
		<?php if(is_page('contact')) { ?>
		<link  href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/jquery.qtip.min.css" rel="stylesheet" >
		<?php } ?>


		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	<script type="text/javascript"> 
var $buoop = {}; 
$buoop.ol = window.onload; 
window.onload=function(){ 
 try {if ($buoop.ol) $buoop.ol();}catch (e) {} 
 var e = document.createElement("script"); 
 e.setAttribute("type", "text/javascript"); 
 e.setAttribute("src", "//browser-update.org/update.js"); 
 document.body.appendChild(e); 
} 
</script> 

<?php if(is_page(array('about','courses'))) { ?>

			<!-- Facebook Conversion Code for Facebook Leads -->
			<script type="text/javascript">
			var fb_param = {};
			fb_param.pixel_id = '6019249876170';
			fb_param.value = '0.00';
			fb_param.currency = 'AUD';
			(function(){
			  var fpw = document.createElement('script');
			  fpw.async = true;
			  fpw.src = '//connect.facebook.net/en_US/fp.js';
			  var ref = document.getElementsByTagName('script')[0];
			  ref.parentNode.insertBefore(fpw, ref);
			})();
			</script>
			<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/offsite_event.php?id=6019249876170&amp;value=0&amp;currency=AUD" /></noscript>
		<?php } ?>
	<?php wp_head(); ?>




<script type="text/javascript">
	 var $mcGoal = {'settings':{'uuid':'267ac9d4183ac14f026a0f3a5','dc':'us3'}};
	 (function() {
		 var sp = document.createElement('script'); sp.type = 'text/javascript'; sp.async = true; sp.defer = true;
	 	sp.src = ('https:' == document.location.protocol ? 'https://s3.amazonaws.com/downloads.mailchimp.com' : 'http://downloads.mailchimp.com') + '/js/goal.min.js';
	 	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sp, s);
	 })(); 
</script>




			<style type="text/css" media="screen">


				<?php global $post;
				$slug = get_post( $post )->post_name;
				?>

			 	.<?php echo $slug; ?> .header-wrapper {
					background: url(<?php bloginfo('template_directory'); ?>/assets/images/<?php echo $slug; ?>-sml.jpg) top center no-repeat; 

				}


				@media (min-width: 768px) {
					.<?php echo $slug; ?> .header-wrapper { 
						background: #e7e7e7 url(<?php bloginfo('template_directory'); ?>/assets/images/<?php echo $slug; ?>-med.jpg) top center no-repeat;
					}
			}

				@media (min-width: 1200px) { 
					.<?php echo $slug; ?> .header-wrapper {
					background: #e7e7e7 url(<?php bloginfo('stylesheet_directory'); ?>/assets/images/<?php echo $slug; ?>.jpg) top center no-repeat;
					}
			}



		<?php	if( $post->post_parent == '1830' || in_category(460) || $post_type == 'google-hangouts' || $post_type == 'podcast' || $post_type == 'academy-tv'): ?>


			 	.<?php echo $slug; ?> .header-wrapper {
					background: url(<?php bloginfo('template_directory'); ?>/assets/images/ask-alison-hdr.jpg) top center no-repeat; 

				}


					@media (min-width: 768px) {
					.<?php echo $slug; ?> .header-wrapper { 
						background: #e7e7e7 url(<?php bloginfo('template_directory'); ?>/assets/images/ask-alison-hdr.jpg) top center no-repeat;
					}
			}

					@media (min-width: 1200px) { 
					.<?php echo $slug; ?> .header-wrapper {
					background: #e7e7e7 url(<?php bloginfo('stylesheet_directory'); ?>/assets/images/ask-alison-hdr.jpg) top center no-repeat;
					}
			}


<?php endif; ?>


			</style>




  </head>
  
  
<body <?php body_class(); ?>>

<div class="js">

  

   
	<?php 
	
	if(is_page('about')) {
	include_once(TEMPLATEPATH .'/includes/page-headers/about-page-header.php');
	}
	

	else if ($post->post_parent == '1830' || in_category(460) || $post_type == 'google-hangouts' || $post_type == 'podcast' || $post_type == 'academy-tv')  {

	include_once(TEMPLATEPATH .'/includes/page-headers/a-alison-page-header.php');

	}



	else if (is_page('academy-tv')) {
	include_once(TEMPLATEPATH .'/includes/page-headers/tv-page-header.php');
	}
	
	
	
	else {
	
	include_once(TEMPLATEPATH .'/includes/generic-page-header.php'); 
		
	}
	
?>
	  <div class="row online-chat top-area">
	  <a id="scroll-lower">Scroll Down</a>
	  <a class="pull-right chat text-hide">Online Chat</a>
	  </div>
	