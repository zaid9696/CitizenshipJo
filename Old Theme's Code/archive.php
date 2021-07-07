<?php 

    get_header( );

    

?>



    
    <section class="archive">
        <h1 class="archive__title"><?php the_archive_title( ); ?></h1>
        <div class="archive__cards">
        <?php 

            while(have_posts(  )){
                the_post(  );
            
               
        ?>

                    <div class="content__cards-card">
                        <div class="content__cards-img">
                            <a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="Image"></a>
                        </div>
                        <div class="content__cards-text">
                            <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                            <span class="content__cards-date">
                                <?php the_time( 'd F Y' ); ?>
                            </span>
                        </div>
                    </div>
        

                <?php }; ?>
        </div>
        
        <div class="paginate">
        <?php 

        echo paginate_links();
        ?>
        </div>


    </section>





<?php 


    get_footer();

?>