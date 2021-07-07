<div class="youtube-section">

	<div class="youtube-section__header">
		<div class="youtube-section__header-icon"><img src="<?php echo get_theme_file_uri('/img/youtube-icon.svg'); ?>" alt="شعلر مقالات"></div>
		<h2>Vidoes</h2>
		<div class="youtube-section__header-line"></div>
	</div>
		<div class="youtube-section__wrap">
		<?php 

				 $postQuery = new WP_Query(array(
				            'post_type' => 'youtube',
				            'posts_per_page' => '2',
				        
				        ));

				 while ($postQuery->have_posts()) { 
				 	$postQuery->the_post(); ?>
				 	<div class="youtube-section__content">
						<div class="youtube-section__content-video"><?php the_content(); ?></div>
						<h2><?php the_title(  ); ?></h2>
				 	</div>	

				<?php }
				 wp_reset_postdata(  );
			?> 
		</div>	
		<div class="youtube-section__more">
		
		<a href="<?php echo site_url('/youtube'); ?>"> More <img src="<?php echo get_theme_file_uri('/img/more-video-eng.svg')?>" alt="More Content"></a>
	</div>
</div>