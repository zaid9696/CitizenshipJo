<?php 

    get_header( );

    while(have_posts(  )){
        the_post(  )
    

?>


<section class="header">

    <h1 class="header__title"><?php the_title(); ?></h1>
    <div class="header__postimg" style="background-image: url('<?php the_post_thumbnail_url() ?>')"></div>

</section>


<main class="post">
    <div class="post__container">

    
        <div class="post__info">
            <div class="post__info-icon">
                <img src="<?php echo get_theme_file_uri('/img/user.svg') ?>" alt="User Icon">
                <span><?php the_author_posts_link( ); ?></span>
            </div>
            <div class="post__info-icon">
                <img src="<?php echo get_theme_file_uri('/img/date.svg') ?>" alt="Date Icon">
                <span><?php the_time( 'd F Y' );?></span>
            </div>
            <div class="post__info-icon">
                <img src="<?php echo get_theme_file_uri('/img/category.svg') ?>" alt="Categroy Icon">
                <?php the_category( ); ?>
            </div>
        </div>
    </div>
    <article class="post__article">
        <?php the_content() ?>
    </article>

    <div class="post__cards">
        <h3 class="post__cards-title"> <?php 

if(get_locale(  )  == 'ar'){

   echo 'المزيد من ';
}

if(get_locale(  )  == 'en_US'){
    echo 'More of';
    } ?> <?php $cat = the_category(); ?></h3>
        <div class="post__cards-container">
        <?php 

        $blogpost = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'categroy__name' => $cat,
            'post__not_in' => array(get_the_ID(  ))

        ));

        if($blogpost->have_posts()){

            while($blogpost->have_posts()){
                $blogpost->the_post(); ?>
            <div class="post__card">
                <div class="post__card-img"><a href="<?php the_permalink() ?>"> <img src="<?php the_post_thumbnail_url(); ?>" alt="Image"></a></div>
                <div class="post__card-title">
                    <h3><a href="<?php the_permalink() ?>"><?php the_title( ); ?></a></h3>
                </div>
            </div>
        

    <?php

        }; 

        };
 ?>
    </div>

    </div>

</main>








<?php 

            };

    get_footer();

?>