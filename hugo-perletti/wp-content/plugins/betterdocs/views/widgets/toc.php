<div
	<?php echo $wrapper_attr; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<?php
		echo do_shortcode( '[betterdocs_toc ' . $attributes . ']' );
	?>
</div>
