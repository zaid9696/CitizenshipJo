

<div class="article">
	
	<div class="article__header">
		<div class="article__header-icon"><img src="<?php echo get_theme_file_uri('/img/article-icon.svg'); ?>" alt="شعلر مقالات"></div>
		<h2>مقالات</h2>
		<div class="article__header-line"></div>
	</div>

	<div class="article__content">
		<?php 

				 $postQuery = new WP_Query(array(
				            'post_type' => 'post',
				            'posts_per_page' => '3',
				            'category__in' => '5'
				        
				        ));

				 while ($postQuery->have_posts()) { 
				 	$postQuery->the_post(); ?>
				 		
				 <div class="article__content-card">
				 	<div class="article__content-cover">
				 		<a href="<?php the_permalink(  ); ?>"><?php  the_post_thumbnail(); ?></a>
				 	</div>
				 	<div class="article__content-wrap">
				 	<div class="article__content-category">
				 		 <?php 
                                $tags = get_the_tags();

                               // var_dump($tags);
                               	if($tags){
                                foreach ($tags as $tag) {
                                     ?>
                       
                            <span><a href="<?php echo get_tag_link($tag->term_id) ?>"><?php echo $tag->name ?></a></span>
                         

                            <?php      
                            	}
                                } 
                            ?>
				 	</div>
				 	<h3> <a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
				 	<div class="article__content-date">
				 		<span><?php the_time( 'd F Y' ); ?></span>
				 	</div>
				 </div>
				 </div>

				<?php }
				 wp_reset_postdata(  );
			?> 		
	</div>
	<div class="article__more">
		
		<a href="<?php echo get_term_link(6) ?>"> المزيد <img src="<?php echo get_theme_file_uri('/img/more-article.svg')?>" alt="More Content"></a>
	</div>

</div>