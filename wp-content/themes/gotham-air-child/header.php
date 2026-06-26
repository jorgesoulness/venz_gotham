<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <?php wp_head(); ?>
    <script>
      window.pathFiles = "<?php echo get_stylesheet_directory_uri(''); ?>/";
    </script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
  <!--==============================
     Preloader
  ==============================-->
  <div class="preloader  ">
    <button class="vs-btn preloaderCls">Cancel Preloader</button>
    <div class="preloader-inner">
      <div class="loader"></div>
    </div>
  </div>
<?php get_template_part( 'template-parts/header/header-main' ); ?>
  