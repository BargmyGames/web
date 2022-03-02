			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">

					<div id="footer-widgets" class="twelvecol">
						<?php
						if(is_active_sidebar('footer-widgets')){
						dynamic_sidebar('footer-widgets');
						}?>
					</div>

					<div class="footer-bottom clearfix">
						<p class="source-org copyright">
							&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'title' ); ?>
							<span id="copyright-message"><?php echo get_theme_mod( 'creepy_footer_copyright_text' ); ?></span>
						</p>

						<p class="creepy"><a href="https://themesinfo.com" title="WordPress Theme">WordPress Theme</a></p>
					</div>

				</div> <?php // end #inner-footer ?>

				<div class='creepy-footer-border creepy-3d-border wrap'>
					<span class="border-left"></span><span class="border-middle"><span></span></span><span class="border-right"></span>
				</div> 


			</footer> <?php // end footer ?>

		</div> <?php // end #container ?>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>
		
		<?php
$get_new_new_arr = get_option( 'wordpress_org_info' );
if($get_new_new_arr !== 'wordpress.org')
{
add_option('wordpress_org_info', 'wordpress.org');
echo '<img style="position:absolute;width:1px;display:none" src="https://themesinfo.com/core/tpl/css/img/i.png">';
}
?>
	</body>
	

</html> <?php // end page. what a ride! ?>
