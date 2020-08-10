


<footer class="footer">

        <div class="footer__info">
            <div class="footer__info-icon">
                <img src="<?php echo get_theme_file_uri( "/img/location.svg" ) ?>" alt="Location Icon">
                <span>Jordan</span>
            </div>
            <div class="footer__info-icon">
                <img src="<?php echo get_theme_file_uri( "/img/tel.svg" ) ?>" alt="Location Icon">
                <span>00962798989077</span>
            </div>
            <div class="footer__info-icon">
                <img src="<?php echo get_theme_file_uri( "/img/email.svg" ) ?>" alt="Location Icon">
                <span class="span-last">jordanian.citizenship@gmail.com</span>
            </div>
        </div>

        <div class="footer__more">
            <div class="footer__container">
                <div class="footer__more-copy"> &#169; جميع الحقوق محفوظة لمركز مواطنة – 	
 Citizenship JO <?php echo date('Y'); ?> </div>
            <?php dynamic_sidebar('smartslider_area_1'); ?>
            <div class="footer__more-zaid">Created by <a href="https://twitter.com/zaiddev96" target="_blank">Zaid</a></div>
        </div>
            </div>
        

</footer>

<?php wp_footer(); ?>

</body>
</html>