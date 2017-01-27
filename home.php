<?php
/*
Template Name: Home
*/
get_header();
?>
<section class="main-info">
	<div class="container">
		<div class="row-fluid">
			<div class="col-sm-9">
				<h4>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas</h4>
				<p class="no-margin no-padding">Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet</p>
			</div>
			<div class="col-sm-3">
				<button type="button" class="btn btn-success btn-lg pull-right">Free Download Nova</button>
			</div>
		</div>
	</div>
</section>
<section class="services">
	<div class="container">
		<div class="gap heading text-center">
			<h1>What We Offer</h1>
			<p>Look at some of the recent projects we have completed for our valuble clients</p>
		</div>
		<div class="row-fluid">
			<div class="col-xs-12 col-sm-4">
				<div class="media">
					<div class="icon-service pull-left"><i class="fa fa-globe"></i></div>
					<div class="media-body service-content">
						<h4>Web Design</h4>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="media">
					<div class="icon-service pull-left"><i class="fa fa-thumbs-up"></i></div>
					<div class="media-body service-content">
						<h4>Graphic Design</h4>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="media">
					<div class="icon-service pull-left"><i class="fa fa-leaf"></i></div>
					<div class="media-body service-content">
						<h4>Email Marketing</h4>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="gap col-xs-12"></div>
		<div class="row-fluid">
			<div class="col-xs-12 col-sm-4">
				<div class="media">
					<div class="icon-service pull-left"><i class="fa fa-shopping-cart"></i></div>
					<div class="media-body service-content">
						<h4>Ecommerce Solution</h4>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="media">
					<div class="icon-service pull-left"><i class="fa fa-globe"></i></div>
					<div class="media-body service-content">
						<h4>SEO & Solution</h4>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="media">
					<div class="icon-service pull-left"><i class="fa fa-globe"></i></div>
					<div class="media-body service-content">
						<h4>Bootstrap</h4>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="recent-works">
	<div class="container">
		<div class="gap heading text-center">
			<h1>Our Recent Works</h1>
			<p>Look at some of the recent projects we have completed for our valuble clients</p>
		</div>
		<div class="gallery row-fluid">
			<div class="col-xs-6 col-sm-3">
				<div class="preview">
					<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri().'/lib/img/portfolio/thumb/item1.jpg'; ?>">
					<div class="links">
						<a data-toggle="modal" href="#modal-1"><i class="fa fa-eye"></i></a><a href="#"><i class="fa fa-link"></i></a>
					</div>
				</div>
				<div class="fig-desc">
					<h5>Lorem ipsum dolor sit amet</h5>
				</div>
				<div id="modal-1" class="modal fade in" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-close pull-right">
								<a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true">
									<i class="fa fa-remove"></i>
								</a>
							</div>
							<br>
							<div class="modal-body">
								<img class="img-responsive modal-img" src="<?php echo get_stylesheet_directory_uri().'/lib/img/portfolio/full/item1.jpg'; ?>">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3">
				<div class="preview">
					<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri().'/lib/img/portfolio/thumb/item2.jpg'; ?>">
					<div class="links">
						<a data-toggle="modal" href="#modal-1"><i class="fa fa-eye"></i></a><a href="#"><i class="fa fa-link"></i></a>
					</div>
				</div>
				<div class="fig-desc">
					<h5>Lorem ipsum dolor sit amet</h5>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3">
				<div class="preview">
					<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri().'/lib/img/portfolio/thumb/item3.jpg'; ?>">
					<div class="links">
						<a data-toggle="modal" href="#modal-1"><i class="fa fa-eye"></i></a><a href="#"><i class="fa fa-link"></i></a>
					</div>
				</div>
				<div class="fig-desc">
					<h5>Lorem ipsum dolor sit amet</h5>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3">
				<div class="preview">
					<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri().'/lib/img/portfolio/thumb/item4.jpg'; ?>">
					<div class="links">
						<a data-toggle="modal" href="#modal-1"><i class="fa fa-eye"></i></a><a href="#"><i class="fa fa-link"></i></a>
					</div>
				</div>
				<div class="fig-desc">
					<h5>Lorem ipsum dolor sit amet</h5>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();