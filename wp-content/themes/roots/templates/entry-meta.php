<time class="published" datetime="<?php echo get_the_time('c'); ?>">
	<?php if (in_category('Twitter')): ?>
	<a href="<?php the_permalink(); ?>" class="twitter-entry-title">
		<a class="twitter-link" href="https://twitter.com/dave_rodriguez/status/<?php echo get_post_meta($post->ID, 'tweet_id', true) ?>" target="_blank"><i class="icon-twitter icon-med icon-twitter-blue"></i></a>
		A tweet from
	<?php endif; ?>
	<span><?php echo get_the_date('M j, Y'); ?></span>
</time>

<?php 
	$categories = wp_get_post_categories($post->ID);
	$single_cat = count($categories) == 1;
	if ( !($single_cat && in_category('Twitter')) ) {
?>
	<?php echo get_the_category_list(); ?>
<?php } ?>