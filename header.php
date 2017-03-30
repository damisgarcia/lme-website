<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Clean Blog
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> ng-controller='ApplicationCtrl as app' data-target=".navbar" data-offset="329">
  <header>
    <nav class="navbar navbar-fixed-top lme-navbar-default navbar--transparent" data-spy="affix" data-offset-top="330">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo get_site_url() ?>">
            <img class='default' src="<?php bloginfo('template_directory'); ?>/images/lme.svg" width="98">
            <img class='contrast' src="<?php bloginfo('template_directory'); ?>/images/lme-white.svg" width="98">
          </a>
        </div>
        <ul class="nav navbar-nav lme-collapse-navbar-nav navbar-right">
          <li><a href="<?php echo get_site_url() ?>#home" title="Home">Home</a></li>
          <li><a href="<?php echo get_site_url() ?>#sobre">Sobre</a></li>
          <li class='hidden-xs'><a href="<?php echo get_site_url() ?>#area-de-atuacao">Áreas de Atuação</a></li>
          <li><a href="<?php echo get_site_url() ?>#portfolio">Portfólio</a></li>
          <li><a href="<?php echo get_site_url() ?>#contato">Contato</a></li>
        </ul>
      </div>
    </nav>
  </header>

	<?php cleanblog_header(); ?>

    <!-- Main Content -->
    <div class="container">
