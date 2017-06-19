<?php 
	global $metabox;
	$section_purchase_title = isset($metabox['purchase_title']) ? $metabox['purchase_title'] : '';
	$section_purchase_button_text = isset($metabox['purchase_btn_level']) ? $metabox['purchase_btn_level'] : '';
	$section_purchase_button_url = isset($metabox['purchase_btn_url']) ? $metabox['purchase_btn_url'] : '';
?>
<div class="premix-purchase-now-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8">
					<p><?php echo esc_html($section_purchase_title); ?></p>
				</div>
				<div class="col-md-4 col-sm-4">
					<a href="<?php echo esc_url($section_purchase_button_url); ?>" class="premix-btn white-border-btn"><?php echo esc_html($section_purchase_button_text); ?></a>
				</div>
			</div>
		</div>
	</div>