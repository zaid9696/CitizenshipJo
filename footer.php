


<footer class="footer">

	<div class="footer__wrap">
		
	
	<div class="footer__logo">
		<div class="footer__logo-header">
			<div class="footer__logo-info">
				<img src="<?php echo get_theme_file_uri('/img/phone-icon.svg') ?>" alt="phone icon">
				<span>00962798989077</span>
			</div>

			<div class="footer__logo-info">
				<img src="<?php echo get_theme_file_uri('/img/email-icon.svg') ?>" alt="email icon">
				<span>jordanian.citizenship@gmail.com</span>
			</div>
		</div>
		<div class="footer__logo-main">
			<a href="<?php echo site_url(); ?>">
				<img src="<?php echo get_theme_file_uri('/img/footer-logo.svg'); ?>" alt="Footer Logo">
			</a>
		</div>
	</div>
	<div class="footer__socialmedia"><?php dynamic_sidebar('sidebar-1'); ?>
</div>
	<div class="footer__newsletter"><!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://citizenshipjo.us20.list-manage.com/subscribe/post?u=207d0da3cdaf184e5cf04b954&amp;id=2905dfde25" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<label for="mce-EMAIL">اشترك في النشرة البريدية</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="البريد الإكتروني" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: <?php 
    		if(get_locale(  )  == 'en_US'){
    			echo '-5000px';
    		} else  {
    			echo '5000px';
    		}
    ?>;" aria-hidden="true"><input type="text" name="b_589fdc568d50cc341657f90c9_10f354305d" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="أشترك الان" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
</div>
</div>

<div class="footer__copy-right">
	<p>© جميع الحقوق محفوظة لمركز مواطنة – Citizenship JO <?php echo date('Y'); ?></p>
</div>

</footer>

<div class="frontoverlay">

<div class="cancelicon"><img src="<?php echo get_theme_file_uri('/img/cancel-search.svg') ?>" alt="Cancel Icon"></div>

    <form class="frontoverlay__form" autocomplete="off">
            <input type="search"  placeholder="الرجاء البحث هنا" name="search" id="search" class="frontoverlay__form-search">
            <div class="loadicon"><img src="<?php echo get_theme_file_uri('/img/loadicon.svg') ?>" alt="Load Icon"></div>
            <div class="frontoverlay__content">

            </div>
            <!-- <div class="frontoverlay__container">
        <div class="frontoverlay__container-item" style="background-image: url('<?php //echo get_theme_file_uri('/img/img-3.jpg'); ?>')">
            <h3><a href="#">كيف تنتصر على عقلك في بناء عادات صحية جديدة: دراسات باوميستر.</a></h3>
            <p><a href="#">كلام وارين بافيت عن العادات أعتبره من أجمل وأدق الجمل التي وصفت العادات اليومية. فعلاً، في البداية لا تشعر بتكون هذه العادة.. وفجأة تشعر وكأنك في سجن صنعته بنفسك.. مجبر على تكرار هذه العادة سواءً كنت ترغب بذلك أو لا....</a></p>
        </div>
    
        </div> -->
    </form>

  


</div>

<?php wp_footer(); ?>


</body>
</html>