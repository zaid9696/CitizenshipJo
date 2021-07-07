<?php 

    get_header( );

   

?>

		<div class="archive">
			
        <h2 class="archive__title">
            <?php the_archive_title(); ?>
        </h2>

         <div class="archive__cards">
        <?php 

            while(have_posts(  )){
                the_post(  );
            
               
        ?>
		<div class="archive__content-card">
				 	<div class="archive__content-cover">
				 		<a href="<?php the_permalink(  ); ?>"><?php  the_post_thumbnail(); ?></a>
				 	</div>
				 	<div class="archive__content-wrap">
				 	<div class="archive__content-category">
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
				 	<h3 class="archive__content-title"> <a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
				 	<div class="archive__content-date">
				 		<span><?php the_time( 'd F Y' ); ?></span>
				 	</div>
				 </div>
				 </div>
        

                <?php }; ?>
        </div>
        <div class="paginate">
        <?php 

        echo paginate_links();
        ?>
        </div>
		</div>

<?php 


    get_footer( );

?>
