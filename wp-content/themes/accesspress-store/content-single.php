<?php
/**
 * @package AccessPress Root
 */
?>
<?php 
$show_img = get_theme_mod('ap_store_post_feat_img',1);
$post_title = get_theme_mod('ap_store_post_main_title',1);
$show_cat = get_theme_mod('ap_store_post_cat',1);
$show_date = get_theme_mod('ap_store_post_date',1); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="entry-content">
		<?php if($show_img){ ?>
			<?php if(has_post_thumbnail()): ?>
				<div class="post-thumbnail">
					<?php the_post_thumbnail('accesspress-blog-big-thumbnail'); ?>
				</div>
			<?php endif; ?>
		<?php } ?>

		<?php if($show_cat){ ?>
		<span class="cat-name"><?php $category = get_the_category(); echo esc_html($category[0]->cat_name); ?></span>
		<?php } ?>

		<?php
		if($post_title){ ?>
		<h2 class="post-title"><?php the_title();?></h2>
		<?php } ?>

		<?php $show_cat = get_theme_mod('ap_store_post_date',1); 
		if($show_cat){?>
        <p class="meta-info">
            <?php echo esc_html__('Posted On', 'accesspress-store'); ?> 
            <?php the_time('F j, Y'); ?> 
            <?php echo esc_html__('at', 'accesspress-store'); ?>
            <?php the_time('g:i a'); ?> 
            <?php echo esc_html__('by', 'accesspress-store'); ?>
			<?php the_author_posts_link(); ?> /  <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
        </p>
        <?php } ?>
        
		<div class="content-page">
		  <?php the_content(); ?>
        </div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'accesspress-store' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	
</article><!-- #post-## -->
