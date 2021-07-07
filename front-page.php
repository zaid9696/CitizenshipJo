<?php 

    get_header( );

?>

<?php 

        if(get_locale(  )  == 'ar'){

            get_template_part('ar');
        }

        if(get_locale(  )  == 'en_US'){

            get_template_part('eng');
        }

 ?>

<?php 

    get_footer();

?>

