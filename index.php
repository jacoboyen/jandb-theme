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
			<div class="comments"><?php comments_number('Nobody is talking', 'A cricket is chirping', 'People are talking');?></div>
		</div>
		<div class="postContent">
			<div class="title"><a href="<?php echo the_permalink()?>"><?php the_title(); ?></a></div>
			<?php if (has_post_thumbnail()){?>
				<?php the_post_thumbnail('post-featured')?>
			<?php } ?>			
			<div class="content"><?php the_content(); ?></div>
			<!---<p align="center"><a href="<?php echo the_permalink()?>" class="readMore">Read More</a></p>!--->
		</div>
		<div class="clearBoth"></div>
	</div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>