<?php global $ci, $ci_defaults, $load_defaults; ?>
<?php if ($load_defaults===TRUE): ?>
<?php

	$ci_defaults['favicon'] = get_child_or_parent_file_uri('/panel/img/favicon.ico');


	add_action('wp_head', 'ci_favicon');
	if( !function_exists('ci_favicon') ):
		function ci_favicon()
		{
			if(ci_setting('favicon')): 
				?><link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_attr(ci_setting('favicon')); ?>" /><?php 
			endif;
		}
	endif;

?>
<?php else: ?>

	<fieldset id="ci-panel-favicon" class="set">
		<p class="guide"><?php echo sprintf(__('Here you can upload your favicon. The favicon is a small, 16x16 icon that appears besides your URL in the address bar, in open tabs and/or in bookmarks. We recommend you create your favicon from an existing square image, using appropriate online services such as <a href="%1$s">Dynamic Drive</a> and <a href="%2$s">favicon.cc</a>', 'ci_theme'), 'http://tools.dynamicdrive.com/favicon/', 'http://www.favicon.cc/'); ?></p>
		<?php ci_panel_upload_image('favicon', __('Upload your favicon', 'ci_theme')); ?>
	</fieldset>

<?php endif; ?>
