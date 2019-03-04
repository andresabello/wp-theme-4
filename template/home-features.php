<?php 
$homepage_options = get_option('ac_homepage_settings');
$feature_one_img_url = $homepage_options['feature_image_one'];
$feature_one_img_id = ac_get_image_id($feature_one_img_url);
$feature_one_img_alt = get_post_meta($feature_one_img_id, '_wp_attachment_image_alt', true);
$feature_two_img_url = $homepage_options['feature_image_two'];
$feature_two_img_id = ac_get_image_id($feature_two_img_url);
$feature_two_img_alt = get_post_meta($feature_two_img_id, '_wp_attachment_image_alt', true);
$feature_three_img_url = $homepage_options['feature_image_three'];
$feature_three_img_id = ac_get_image_id($feature_three_img_url);
$feature_three_img_alt = get_post_meta($feature_three_img_id, '_wp_attachment_image_alt', true);
?>
<div class="intro">
    <div class="main-cta">
        <div class="container">
            
        </div>
    </div>
</div>