			</div><!--.container-->
		</div><!--.primary_content_wrap-->
		<footer id="footer">
			<div id="back-top-wrapper">
				<p id="back-top">
					<a href="#top"><span></span><?php _e('Top', 'theme1798'); ?></a>
				</p>
			</div>
			<div class="row clearfix">
				<div class="grid_12">
					<div class="footer-top clearfix">
						<?php if ( of_get_option('footer_menu') == 'true') { ?>  
							<nav class="footer">
								<?php wp_nav_menu( array(
									'container'       => 'ul', 
									'menu_class'      => 'footer-nav', 
									'depth'           => 0,
									'theme_location' => 'footer_menu' 
									)); 
								?>
							</nav>
						<?php } ?>
						<div id="widget-footer" class="clearfix">
							<?php if ( ! dynamic_sidebar( 'Footer' ) ) : ?>
							  <!--Widgetized Footer-->
							<?php endif ?>
						</div>
					</div>
					<div id="copyright" class="clearfix">
						<div id="footer-text">
                        

                        
							<?php $myfooter_text = of_get_option('footer_text'); ?>
							
							<?php if($myfooter_text){?>
								<?php echo of_get_option('footer_text'); ?>
							<?php } else { ?>
								<a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>" class="site-name"><?php bloginfo('name'); ?></a> <?php _e('is proudly powered by', 'theme1798'); ?> <a href="http://wordpress.org">WordPress</a> <a href="<?php if ( of_get_option('feed_url') != '' ) { echo of_get_option('feed_url'); } else bloginfo('rss2_url'); ?>" rel="nofollow" title="<?php _e('Entries (RSS)', 'theme1798'); ?>"><?php _e('Entries (RSS)', 'theme1798'); ?></a> and <a href="<?php bloginfo('comments_rss2_url'); ?>" rel="nofollow"><?php _e('Comments (RSS)', 'theme1798'); ?></a>
							<?php } ?>
							<?php if( is_front_page() ) { ?>
							<!-- {%FOOTER_LINK} -->
							<?php } ?>
                            
                            
						</div>
                        <span style="float:right"><script type="text/javascript" src="https://seal.thawte.com/getthawteseal?host_name=responderlife.org&amp;size=S&amp;lang=en"></script></span>

					</div>
				</div>
			</div>
            
            
		</footer>
	</div><!--.container-->
</div><!--#main-->
<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work properly -->
<?php if(of_get_option('ga_code')) { ?>
	<script type="text/javascript">
		<?php echo stripslashes(of_get_option('ga_code')); ?>
	</script>
  <!-- Show Google Analytics -->	
<?php } ?>
</body>
</html>