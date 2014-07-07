<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	
	<?php /*if (has_post_thumbnail()){?>
		<?php 
			require_once 'mobile_detect.php';
			$detect = new Mobile_Detect;
			if($detect->isMobile() == true){?>
				<div class="featuredImage"><?php the_post_thumbnail('mobile-featured')?></div>
			<?php }else{?>
				<div class="featuredImage"><?php the_post_thumbnail('desktop-featured', array('class' => "wideImage"))?></div>
			<?php } 
		}*/?>
	<div class="post">
		<div class="postDate">
			<div class="postMonth"><?php echo get_the_date('F'); ?></div>
			<div class="postDay"><?php echo get_the_date('j');?></div>
			<div class="postYear"><?php echo get_the_date('Y');?></div>
		</div>
		<div class="postContent">
			<div class="title"><?php the_title(); ?></div>
			<div class="content"><?php the_excerpt(); ?></div>
			<p align="right"><a href="<?php echo the_permalink()?>" class="readMore">Read More</a></p>
		</div>
		<div class="clearBoth"></div>
	</div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>