<footer class="content-info" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-4">
				<?php dynamic_sidebar('sidebar-footer-1'); ?>
			</div>
			<div class="col-sm-6 col-md-4">
				<?php dynamic_sidebar('sidebar-footer-2'); ?>
			</div>
			<div class="col-sm-6 col-md-4">
				<?php dynamic_sidebar('sidebar-footer-3'); ?>
			</div>
		</div>
		<div class="row copyright">
			<div class="col-xs-12 col-sm-5">
				<p>&copy; <?php echo date('Y'); ?> Dave Rodriguez</p>
			</div>
			<div class="col-xs-12 col-sm-7">
				<ul class="list-social-icons list-inline icon-grey">
					<li><a href="/feed/" title="RSS" target="_blank"><i class="icon-feed"></i></a></li>
					<li><a href="http://twitter.com/dave_rodriguez" title="Twitter" target="_blank"><i class="icon-twitter"></i></a></li>
					<li><a href="http://github.com/daverodriguez"  title="Github" target="_blank"><i class="icon-github"></i></a></li>
					<li><a href="http://www.linkedin.com/profile?viewProfile=&amp;key=10149395" title="LinkedIn" target="_blank"><i class="icon-linkedin"></i></a></li>
					<li><a href="http://www.flickr.com/photos/daverodriguez/" title="Flickr" target="_blank"><i class="icon-flickr"></i></a></li>
					<li><a href="http://www.last.fm/user/Daver914/" title="Last.fm" target="_blank"><i class="icon-lastfm"></i></a></li>
				</ul>
			</div>
		</div>

	</div>
</footer>

<?php wp_footer(); ?>
