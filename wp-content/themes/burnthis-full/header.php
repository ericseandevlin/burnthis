<!DOCTYPE html>
<html data-wf-page="5c3f64ba0280b8f198ec8f69" data-wf-site="5c3f64ba0280b82ef9ec8f68">
  <head>
    <meta charset="utf-8">
    <title>Burn This</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PJ4V79S');</script>
<!-- End Google Tag Manager -->


<script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>

<link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri(); ?>/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri(); ?>/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri(); ?>/favicons/favicon-16x16.png">
<link rel="manifest" href="<?= get_template_directory_uri(); ?>/favicons/site.webmanifest">
<link rel="mask-icon" href="<?= get_template_directory_uri(); ?>/favicons/safari-pinned-tab.svg" color="#ffffff">
<meta name="msapplication-TileColor" content="#000000">
<meta name="theme-color" content="#000000">

<meta name="google-site-verification" content="0HkjfuSyomWSm4X6uBIdEy0raCi4xRxERTrSgyejvJQ" />
<meta name="yandex-verification" content="de6125905d77fae3" />
<meta name="msvalidate.01" content="597BD114B2CEC6F82B6F0C62DAB86BC0" />

<?php wp_head(); ?>

<?php if (get_field('custom_css')) : ?>
  <style media="screen">
  /* custom ACF CSS */
    <?php the_field('custom_css'); ?>
  </style>
<?php endif; ?>


</head>
<body <?php body_class("body"); ?>>
  <?php include(locate_template('partials/nav-menu.php')); ?>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PJ4V79S"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->


  <div class="global-wrapper">
