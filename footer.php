<footer>
	<div class="container">
		<div class="row-fluid">
			<div class="col-xs-3 no-padding">
				<h4>ADDRESS</h4>
				<ul class="unstyled address">
					<li>
						<i class="fa fa-home"></i><strong>Address:</strong> 1032 Wayback Lane, Wantagh<br>NY 11793
					</li>
					<li>
						<i class="fa fa-envelope"></i>
						<strong>Email: </strong> support@email.com
					</li>
					<li>
						<i class="fa fa-globe"></i>
						<strong>Website:</strong> www.domain.com
					</li>
					<li>
						<i class="fa fa-phone"></i>
						<strong>Toll Free:</strong> 631-409-3105
					</li>
				</ul>
			</div>
			<div class="col-xs-3 company">
				<h4>OUR COMPANY</h4>
				<?php
				/**
					* Displays a navigation menu
					* @param array $args Arguments
					*/
					$args = array(
						'theme_location' => 'secondary',
						'menu' => '',
						'container' => 'ul',
						'menu_class' => 'unstyled',
						'menu_id' => '',
						'before' => '<i class="fa fa-angle-right footer-links"></i>',
						'echo' => true,
				'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
			);
			wp_nav_menu( $args );
			?>
		</div>
		<div class="col-xs-3">
			<h4>ARCHIVES</h4>
			<ul class="unstyled">
				<?php
				$args = array(
					'before' => '<i class="fa fa-angle-right footer-links"></i>',
					'show_post_count' => true,
				);
				wp_get_archives($args);
				?>
			</ul>
		</div>
		<div class="col-xs-3 flickr-gallery">
			<h4>FLICKR GALLERY</h4>
			<?php
			$posts = get_posts(array('post_type' => 'attachment', 'posst_mime_type' => 'image/jpeg', 'posts_per_page' => 5) );
			foreach ($posts as $key => $post) {
				setup_postdata( $post );
				?>
				<a href="<?php the_permalink();?>" class="flicker-img"><img src="<?php the_guid(); ?>" alt="" width="75px" height="75px" ></a>
				<?php
				wp_reset_postdata();
			}
			?>
		</div>
	</div>
</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>