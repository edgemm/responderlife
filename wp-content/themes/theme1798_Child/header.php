<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes();?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes();?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes();?>> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" <?php language_attributes();?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes();?>> <!--<![endif]-->
<head>
	<title><?php wp_title(''); ?></title>
	<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php if(of_get_option('favicon') != ''){ ?>
	<link rel="icon" href="<?php echo of_get_option('favicon', "" ); ?>" type="image/x-icon" />
	<?php } else { ?>
	<link rel="icon" href="<?php bloginfo( 'template_url' ); ?>/favicon.ico" type="image/x-icon" />
	<?php } ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	<?php /* The HTML5 Shim is required for older browsers, mainly older versions IE */ ?>
	<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
		</div>
	<![endif]-->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/normalize.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/prettyPhoto.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/cameraslideshow.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/1140.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/touchTouch.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/media-queries.css" />
	<!--[if lt IE 10]>
  		<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/ie.css"> 
	<![endif]-->
	<?php
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
	
		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
	?>
	<!--[if lt IE 9]>
		<style type="text/css">
			span.wpcf7-not-valid-tip,
			.row-logo,
			.top-box,
			.box-with-shadow {
				behavior:url(<?php bloginfo('stylesheet_directory'); ?>/PIE.php)
			}
			.row-logo {
				box-shadow: 0px 5px 0px 0px #d4d4d4, 0px 6px 0px 0 #bebebe, 0 8px 16px rgba(229,225,225, 1.0);
				border-radius:0;
			}
			.top-box, .box-with-shadow  {
				border-radius:0px;
				box-shadow:0 5px 13px rgba(249,249,249, 1.0); 
			}
		</style>
		<script src="<?php bloginfo( 'template_url' ); ?>/js/css3-mediaqueries.js" type="text/javascript"></script>
	<![endif]-->
	<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.mobile.customized.min.js" type="text/javascript"></script>
	<!--<![endif]-->
  
	<script type="text/javascript">
  	// initialise plugins
		jQuery(function(){
			// main navigation init
			jQuery('ul.sf-menu').superfish({
				delay:       <?php echo of_get_option('sf_delay'); ?>, 		// one second delay on mouseout 
				animation:   {opacity:'<?php echo of_get_option('sf_f_animation'); ?>'<?php if (of_get_option('sf_sl_animation')=='show') { ?>,height:'<?php echo of_get_option('sf_sl_animation'); ?>'<?php } ?>}, // fade-in and slide-down animation
				speed:       '<?php echo of_get_option('sf_speed'); ?>',  // faster animation speed 
				autoArrows:  <?php echo of_get_option('sf_arrows'); ?>,   // generation of arrow mark-up (for submenu)
				dropShadows: false
			});
			
			// prettyphoto init
			jQuery("a[rel^='prettyPhoto']").prettyPhoto({
				animation_speed:'normal',
				slideshow:5000,
				autoplay_slideshow: false,
				overlay_gallery: true
			});
			
			// Initialize the gallery
			jQuery("#gallery .touch-item").touchTouch();
			
			
		});
		
		// Init for audiojs
		audiojs.events.ready(function() {
			var as = audiojs.createAll();
		});
		
		// Init for si.files
		SI.Files.stylizeAll();
		$(function(){
			$('.sf-menu > li').append('<span class="bg-menu"></span>');
			$('.sf-menu > li:last').addClass('last');
			$('.recent-posts.services li:nth-child(3n)').addClass('nomargin');
			if ($.browser.msie && $.browser.version < 10) {
				jQuery('input[type="submit"], input[type="reset"]').hover(function(){
				  	jQuery(this).addClass('submit-hover')
				 },
					 function(){
					  jQuery(this).removeClass('submit-hover')
				 });	
			}
		});
	</script>
	<script type="text/javascript">
		jQuery(function() {
			
			$('.right-content-area #widget_search.box h3').each(function(index) {
				//get the first word
				var firstWord = $(this).text().split(' ')[0];

				//wrap it with span
				var replaceWord = "<span>" + firstWord + "</span>";

				//create new string with span included
				var newString = $(this).html().replace(firstWord, replaceWord);

				//apply to the divs
				$(this).html(newString);
			});

		});
	</script>
	
	
	<!--[if (gt IE 9)|!(IE)]><!-->
	<script type="text/javascript">
		jQuery(function(){
			jQuery('.sf-menu').mobileMenu();
		})
	</script>
	<!--<![endif]-->
  
  
	
	<!-- Custom CSS -->
	<?php if(of_get_option('custom_css') != ''){?>
		<style type="text/css">
		<?php echo of_get_option('custom_css' ) ?>
		</style>
	<?php }?>
  
  
  
  
	<style type="text/css">
		<?php $background = of_get_option('body_background');
			if ($background != '') {
				if ($background['image'] != '') {
					echo 'body { background-image:url('.$background['image']. '); background-repeat:'.$background['repeat'].'; background-position:'.$background['position'].';  background-attachment:'.$background['attachment'].'; }';
				}
				if($background['color'] != '') {
					echo 'body { background-color:'.$background['color']. '}';
				}
			};
		?>
		
		<?php $header_styling = of_get_option('header_color'); 
			if($header_styling != '') {
				echo '#header {background-color:'.$header_styling.'}';
			}
		?>
		
		<?php $links_styling = of_get_option('links_color'); 
			if($links_styling) {
				echo 'a{color:'.$links_styling.'}';
				echo '.button {background:'.$links_styling.'}';
			}
		?>

	</style>
</head>

<body <?php body_class(); ?>>

<div id="main"><!-- this encompasses the entire Web site -->
	<div class="container">
		<header id="header">
			<div class="row-top clearfix">
				<div class="fright">
					<ul class="meta">
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
					</ul>
					<div id="widget-top-header">
						<?php if ( ! dynamic_sidebar( 'Top Header' ) ) : ?><!-- Wigitized Header --><?php endif ?>
					</div><!--#widget-header-->
				</div>
				<?php if ( of_get_option('g_search_box_id') == 'yes') { ?>  
					<div id="top-search">
						<form method="get" action="<?php echo get_option('home'); ?>/">
							<div class="bg-form"><input type="text" name="s"  class="input-search"/><input type="submit" value="<?php _e('GO', 'theme1798'); ?>" id="submit"></div>
						</form>
					</div>  
				<?php } ?>
			</div>
			<div class="row-address">
				<div id="widget-header">
					<?php if ( ! dynamic_sidebar( 'Header' ) ) : ?><!-- Wigitized Header --><?php endif ?>
				</div><!--#widget-header-->
			</div>
			<div class="row-logo clearfix">
				<div class="logo">
				  <?php if(of_get_option('logo_type') == 'text_logo'){?>
					<?php if( is_front_page() || is_home() || is_404() ) { ?>
					  <h1><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h1>
					<?php } else { ?>
				  <h2><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h2>
					<?php } ?>
				  <?php } else { ?>
					<?php if(of_get_option('logo_url') != ''){ ?>
						<a href="<?php bloginfo('url'); ?>/" id="logo"><img src="<?php echo of_get_option('logo_url', "" ); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>"></a>
					<?php } else { ?>
						<a href="<?php bloginfo('url'); ?>/" id="logo"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>"></a>
					<?php } ?>
				  <?php }?>
				</div>
				<nav class="primary">
				  <?php wp_nav_menu( array(
					'container'       => 'ul', 
					'menu_class'      => 'sf-menu', 
					'menu_id'         => 'topnav',
					'depth'           => 0,
					'theme_location' => 'header_menu' 
					)); 
				  ?>
				</nav><!--.primary-->
			</div>
		</header>
		<?php if( is_front_page() ) { ?>
			<section id="slider-wrapper">
				<?php include_once(TEMPLATEPATH . '/slider.php'); ?>
			</section><!--#slider-->
		<?php } ?>
		<div class="primary_content_wrap">
				<div class="row clearfix">