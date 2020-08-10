<section class="hero" style="background-image: url('<?php echo get_theme_file_uri("/img/bg.jpg") ?>')">

    <div class="hero__container">

        <?php

$description = new WP_Query(array(
    'post_type' => 'description',
    'posts_per_page' => 1,
));

while ($description->have_posts()){;
    $description->the_post(  );
}
         ?>

        <h1 class="hero__title"><?php the_title();  ?></h1>
        <?php  the_content(); ?>
        

    </div>
</section>

<main class="content">
    <h2 class="content__title">البرامج</h2>
    <div class="content__cards">

        <?php 

            $blogpost = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 4,
                'cat' => '3'

            ));

            if($blogpost->have_posts()){

                while($blogpost->have_posts()){
                    $blogpost->the_post(); ?>

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

             <?php  

                 }

            }

         ?>

    </div>
    <button class="content__btn"><a href="<?php echo site_url('/category/البرامج/')?>">المزيد</a></button>
</main>
