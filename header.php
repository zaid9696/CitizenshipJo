 <!DOCTYPE html>
<html  <?php language_attributes(  ) ?> >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  
</head>
<body>

<nav class="nav">
	<div class="custom-btn"><img src="<?php echo get_theme_file_uri('/img/menu.svg'); ?>" alt="Menu"></div>
  
    <div class="nav__logo">

        <a href="<?php
                 if(get_locale(  )  == 'en_US'){
                    echo site_url('/en/home-english/');
                } else {
                    echo get_site_url('/');
    }
 ?>">
            <img class="nav__logo-img" src="<?php echo wp_get_attachment_url( get_theme_mod('basic-homepage-callout-image') ); ?>" alt="Logo">
        </a>
    
    </div>

	<div class="custom-wordpres-dropdown">
		
            <?php 
            
                wp_nav_menu( array(
                    'theme_location' => 'primary'
                ) );

            ?>
	<div class="cancel-btn"><img src="<?php echo get_theme_file_uri('/img/cancel.svg'); ?>" alt="cancel"></div>
	</div>

  <div class="nav__search">
      <img src="<?php echo get_theme_file_uri('/img/search-icon.svg') ?>" alt="Search Icon">
  </div>

</nav>

    
