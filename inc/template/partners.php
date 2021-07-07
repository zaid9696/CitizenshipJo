<div class="partners">

	<div class="partners__header">
		<div class="partners__header-icon"><img src="<?php echo get_theme_file_uri('/img/partener-icon.svg'); ?>" alt="شعار الشركاء "></div>
		<h2>الشركاء </h2>
		<div class="partners__header-line"></div>
	</div>
		<div class="owl-two owl-carousel owl-theme">
		<?php 

				 $postQuery = new WP_Query(array(
				            'post_type' => 'partners',
				        ));

				 while ($postQuery->have_posts()) { 
				 	$postQuery->the_post(); ?>
				 	<div class="partners__content">
						<a href="<?php the_title(); ?>" target="_blank">
							<?php the_post_thumbnail() ?>
						</a>
				 	</div>	

				<?php }
				 wp_reset_postdata(  );
			?> 
		</div>	
	
</div>