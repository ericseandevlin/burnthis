</div>

<div class="global-footer">
    <div class="footer-wrapper">
      <div class="social-wrapper"><a href="#" class="social-link w-inline-block"><img src="https://uploads-ssl.webflow.com/5bf4362178a39d44a21861da/5bf445d82de21ff0cb884bbb_icon_fb.svg" height="35" alt="Burn This Broadway Facebook" width="34.5" class="fb-img"></a><a href="#" class="social-link w-inline-block"><img src="https://uploads-ssl.webflow.com/5bf4362178a39d44a21861da/5bf445d84414ed244739cbc2_icon_tw.svg" height="28" alt="Burn This Broadway Twitter" width="91.5" class="twitter-img"></a><a href="#" class="social-link w-inline-block"><img src="https://uploads-ssl.webflow.com/5bf4362178a39d44a21861da/5bf445d89f58cfa498616287_icon_ig.svg" height="35" alt="Burn This Broadway Instagram" width="75" class="insta-img"></a></div>


      <div class="email-wrapper">
        <div class="email-title">SIGN UP FOR NEWS ANd UPDATES</div>

        <?php include(locate_template('partials/signup.php')); ?>



      <a href="#" class="w-inline-block"><img src="<?= get_template_directory_uri(); ?>/_images/Hudson-Theatre-Logo-Horizontal-Bodoni-MT_GRAY_White.svg" width="300" alt=""></a>
        <div class="address-holder">141 w 44th st, new york, ny 10036</div>
        <div class="colophon-holder">2019 burn this all rights reserved | <a href="#" class="link-4">privacy policy</a><br>‍</div>
      </div>
      <div class="amex-wrapper"><img src="<?= get_template_directory_uri(); ?>/_images/amex_lockup.png" width="175" alt="American Express Proud Partner of Burn This" class="amex-img"></div>
    </div>
  </div>

<?php wp_footer(); ?>

<?php if (get_field('custom_js')) : ?>
	<script type="text/javascript">
	// custom ACF js
		<?php the_field('custom_js'); ?>
	</script>
<?php endif; ?>


</body>
</html>
