<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header id="header" class="navbar navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top-menu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="" href="<?php echo get_home_url(); ?>">
						<?php
						the_custom_logo();
						?>
					</a>
				</div>
				<div class="collapse navbar-collapse" id="top-menu">
				<?php
				/**
					* Displays a navigation menu
					* @param array $args Arguments
					*/
					$login_url = wp_login_url();
					$args = array(
						'theme_location' => 'primary',
						'menu' => '',
						'container' => 'ul',
						'menu_class' => 'nav navbar-nav navbar-right',
						'menu_id' => '',
						'echo' => true,
						'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s<li id="login-top-menu"><a href="'.$login_url.'"><i class="fa fa-lock"></i></a></li></ul>',
					);
					wp_nav_menu( $args );
				?>
			</div>
		</div>
	</header>