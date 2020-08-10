<!DOCTYPE html>
<html <?php language_attributes(  ) ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>

<nav class="nav <?php if(is_front_page(  )) {

                
                } else{
                    echo 'use';
                }

?>">

    <div class="nav__container">

    <div class="nav__logo">
        <a href="<?php 

if(get_locale(  )  == 'ar'){

   echo site_url('/');
}

if(get_locale(  )  == 'en_US'){
    
    echo site_url('/en/home-english/');
}

?>
"><img src="<?php echo get_theme_file_uri('/img/Logo.svg');  ?>" alt="شعار الموقع"></a>
        </div>

        <div class="nav__menu">
            <div class="nav__ham" role="button" aria-label="menu" tabindex="0">
                <div class="nav__line"></div>
                <div class="nav__line"></div>
                <div class="nav__line"></div>
                </div>
                <?php 
                
                    wp_nav_menu( array(
                        'theme_location' => 'primary'
                    ) );

                ?>
        
            </div>
        </div>
    </div>
    

</nav>
    
