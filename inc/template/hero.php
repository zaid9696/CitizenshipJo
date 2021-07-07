
<div class="hero">

		<div class="owl-one owl-carousel owl-theme"> 
			<?php 

				 $postQuery = new WP_Query(array(
				            'post_type' => 'post',
				            'posts_per_page' => '6',
				            'category__in' => '37'
				        
				        ));

				 while ($postQuery->have_posts()) { 
				 	$postQuery->the_post(); ?>
				 		
				 	<div class="hero__cover">
				 		<div class="hero__overlay"></div>
				 		<img src="<?php echo get_the_post_thumbnail_url()?>" alt="page cover">
				 		
				 		<div class="hero__content">
					 		<h2 class="hero__content-title">
					 			<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
					 			</h2>
					 		<div class="hero__content-excerpt">
					 			<p><a href="<?php the_permalink() ?>">
					 				<?php  echo wp_trim_words( get_the_content(), 25, '...' ); ?>
					 			</a></p>
					 			
					 		</div>
				 		</div>
				 	</div>

				<?php }
				 wp_reset_postdata(  );
			?> 		
		</div>
</div>