<?php 

    get_header( );


    while(have_posts(  )){
        the_post();


?>


<header class="page__header">
	<div class="page__header-logo">
		<img src="<?php echo wp_get_attachment_url( get_theme_mod('basic-homepage-callout-image') ); ?>" alt="Logo">
	</div>
 <h1 class="page__header-title"><?php the_title(); ?></h1>
</header>


<div class="page__content <?php if(get_locale(  )  == 'en_US'){ echo 'page__content-eng'; } ?>"><?php the_content(); ?></div>



<?php 

    };

    get_footer( );

?>
