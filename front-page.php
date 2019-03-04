<?php
	//Header 	
	get_header();
	//Slider
	get_template_part( 'template/home', 'slider' ); 
	// Features Section
	//get_template_part( 'template/home', 'features' );//
	//variables for current template
	$homepage_options = get_option('ac_homepage_settings');
	$contact_cta = $homepage_options['contact_page_cta_text'];
?> 
<!-- OVAL STARTS FOR DESKTOP-->
<div class=" contact-cta oval visible-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
	            <?php 
	            	echo htmlspecialchars_decode($contact_cta);
	            ?>
            </div>
        </div>
    </div>
</div>
<!-- OVAL STARTS FOR MOBILE-->
<div class="hidden-lg contact-cta-small contact-cta ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
	            <?php 
	            	echo htmlspecialchars_decode($contact_cta);
	            ?>
            </div>
        </div>
    </div>
</div>
<!-- OPEN NEW CONTAINER -->
<div class="container">
	<!-- OVAL ENDS -->
	<div class="row">
	    <div class="col-md-12 ac-content">
	        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	            <?php the_content(); ?>
	        <?php endwhile; else: ?>
	        <p><?php _e('No pages were found. Sorry!'); ?></p>
	        <?php endif; ?>
	    </div>               
	</div>
</div>
<?php get_footer(); ?>