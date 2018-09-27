<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','<TAG-MANAGER-ID>');</script>
<!-- End Google Tag Manager -->


<?php wp_head(); ?>

<?php if (get_field('custom_css')) : ?>
  <style media="screen">
  /* custom ACF CSS */
    <?php the_field('custom_css'); ?>
  </style>
<?php endif; ?>


</head>
<body <?php body_class("body"); ?>>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<TAG-MANAGER-ID>"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->


 <?php //get_template_part(''); ?>
