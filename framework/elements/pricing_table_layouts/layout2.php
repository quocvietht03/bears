<?php
if($feature_text) echo '<h5 class="bt-feature" '.implode(' ', $feature_attributes).'>'.$feature_text.'</h5>';
if($price) echo '<h4 class="bt-price" '.implode(' ', $price_attributes).'><span>'.$price_unit.'</span>'.$price.'</h4>';
if($title) echo '<h3 class="bt-title" '.implode(' ', $title_attributes).'>'.$title.'</h3>';
if($time) echo '<div class="bt-time" '.implode(' ', $time_attributes).'>'.$time.'</div>';
?>
<div class="bt-line"></div>
<?php
if(!empty($options_value)){
		echo '<ul class="bt-options" '.implode(' ', $options_attributes).'>'.implode(' ', $options_value).'</ul>';
	}
if($button_text) echo '<a class="bt-btn-order" '.implode(' ', $button_attributes).'>'.$button_text.'</a>';
?>
