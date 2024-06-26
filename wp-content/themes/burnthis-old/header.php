<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Burn This</title>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PJ4V79S');</script>
<!-- End Google Tag Manager -->


<link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri(); ?>/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri(); ?>/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri(); ?>/favicons/favicon-16x16.png">
<link rel="manifest" href="<?= get_template_directory_uri(); ?>/favicons/site.webmanifest">
<link rel="mask-icon" href="<?= get_template_directory_uri(); ?>/favicons/safari-pinned-tab.svg" color="#2e333b">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="theme-color" content="#ffffff">


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
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PJ4V79S"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->


 <?php //get_template_part(''); ?>
