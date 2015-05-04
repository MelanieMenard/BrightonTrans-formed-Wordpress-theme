			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap cf">

					<div id="copyright" class="m-all t-2of3 d-2of3">
						<span class="contributor">&copy; 2014 Brighton Trans*formed</span>
						<span class="contributor">Website by <a href="http://www.melaniemenard.com">Melanie Menard</a></span>
						<span class="contributor">Photographs by <a href="http://www.alonglines.com">Sharon Kilgannon</a></span>
					</div>
					
					<nav role="navigation" class="footer-nav m-all t-1of3 d-1of3 last-col">				
						<?php wp_nav_menu(array(
    					'container' => '',                              // remove nav container
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
						'after' => '',                                  // after the menu
						'link_before' => '',                            // before each link
						'link_after' => '',                             // after each link
						'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>					

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
