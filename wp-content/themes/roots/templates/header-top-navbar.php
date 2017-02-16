<header class="banner navbar navbar-default navbar-static-top" role="banner">
	<div class="container">
		<div class="row">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="col-sm-11 col-sm-offset-1">
				<a class="site-logo" href="<?php echo home_url(); ?>/">
					<i class="icon-ohio"></i><span class="ohio">Ohio</span> Dave Rodriguez
				</a>
				<span class="tagline">Web Developer &bull; Photographer &bull; Crank</span>
			</div>
			<div class="col-sm-1 mobile-menu visible-xs hidden-sm hidden-md hidden-lg">
				<nav class="collapse navbar-collapse" role="navigation">
					<?php
					if (has_nav_menu('primary_navigation')) :
						wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
					endif;
					?>
				</nav>
			</div>
		</div>

	</div>
</header>
