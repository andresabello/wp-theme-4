<?php 
get_header(); 
global $post;
$title = $post->post_title;
$page_options = get_option('ac_page_settings');
$sidebar_side = $page_options['sidebar_position'];
?>
<!-- MAIN CONTENT CONTAINER START-->
<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-md-12">
                <div class="page-title">
                    <?php echo '<h1>' . $title . '</h1>'; ?>                    
                </div>
            </div>
            <?php if($sidebar_side === "left" ): ?>
                <?php get_sidebar(); ?>
            <?php endif; ?>
            <div class="col-md-8 ac-content">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; else: ?>
                    <p><?php _e('No pages were found. Sorry!'); ?></p>
                <?php endif; ?> 
            </div>
            <?php if($sidebar_side === "right" ): ?>
                <?php get_sidebar(); ?>
            <?php endif; ?>               
        </div>
    </div>
</div>
<div class="page-contact-cta">
    <div class="container">
        <div class="col-md-12 text-center">
            <?php echo htmlspecialchars_decode($page_options['contact_text']); ?>               
        </div>
    </div>         
</div> 
<?php get_footer(); ?>