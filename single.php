<?php 

    get_header( );


    

    while(have_posts(  )){
        the_post();


?>


 <header class="header container-z">
        <div class="header__cover" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
        <div class="header__wrap">
            
        <h1 class="header__title"><?php the_title(); ?></h1>
        </div>
 </header>




<main class="main main-single">

    <div class="main__info">
        <div class="main__info-share">
            <?php echo do_shortcode('[Sassy_Social_Share]

') ?>
        </div>
        <div class="main__info-post">
            <div class="main__info-icon">
                <img src="<?php echo get_theme_file_uri('/img/user-icon.svg') ?>" alt="User Icon">
                <span><?php the_author_posts_link( ); ?></span>
            </div>
            <div class="main__info-icon">
                <img src="<?php echo get_theme_file_uri('/img/date-icon.svg') ?>" alt="Date Icon">
                <span><?php the_time( 'd F Y' );?></span>
            </div>
        </div>
    </div>

     <article class="main__article-content">
         
        <?php the_content(); ?>

     </article>
      
            <div class="single__more">
                
                <h3 class="single__more-cards-title"> <?php 
                        $is_there;
                        echo $is_there;
                        if(get_locale(  )  == 'en_US'){ echo 'Read More'; } else { echo 'إقرأ أيضاً';} ?>
                 </h3>

                <div class="single__more-cards">

                <?php 


                 $category = get_the_category();
                    
                                // echo $category;
                foreach ($category as $cat) {

                 if ($cat->term_id != '37') {
                  
                         $catlink = $cat->term_id;
                        $catname = $cat->name;
                 }

                }

                // echo $catlink;
                
                $the_i = get_the_ID();
                
                $args = array(
                    'posts_per_page' => '3',
                    'post__not_in' => array($the_i),
                    'cat' => $catlink,           
                );

                $mainPosts = get_posts($args);
                foreach($mainPosts as $post) : setup_postdata($post);
                    // print($mainPost);
                    $is_there = 'is There';
                ?>      


                <div class="single__more-cards__content-card">
                    <div class="single__more-cards__content-cover">
                        <a href="<?php the_permalink(  ); ?>"><?php  the_post_thumbnail(); ?></a>
                    </div>
                    <div class="single__more-cards__content-wrap">
                
                    <div class="single__more-cards__content-category">
                        <span>
                            <?php 
                                $category = get_the_category();

                                // echo $category;
                                foreach ($category as $cat) {

                                    // echo $cat;

                      if ($cat->term_id != '37'  AND $cat->term_id != '48') {
                                        
                             $catlink = $cat->term_id;
                            $catname = $cat->name;
                                            ?>

                        <a href="<?php echo get_category_link($catlink); ?>"><?php echo $catname?></a>
                                       
                            <?php        }
                                } 
                            ?>
                                </span>
                    </div>
                    <h3 class="single__more-cards__content-title"> <a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                    <div class="single__more-cards__content-date">
                        <span><?php the_time( 'd F Y' ); ?></span>
                    </div>
                </div> <!-- category end -->

            </div>
                <?php 

                endforeach;
                wp_reset_postdata();
                ?> 

                </div>
</main>

<!-- <div class="main__article-comments">
         <?php 

      
            if(comments_open()){

                comments_template();

            } 

    
                ?>
</div> -->

    













<?php 

    };
    wp_reset_postdata();

    get_footer( );

?>
