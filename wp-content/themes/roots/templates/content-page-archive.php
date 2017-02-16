<div class="col-sm-6">
	<h2>By Month</h2>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
</div>
<div class="col-sm-6">
	<h2>By Category</h2>
	<ul>
		<?php wp_list_categories('title_li='); ?>
	</ul>
</div>