<!DOCTYPE html>
<html lang="en">
<head>
  <?php $home = get_template_directory_uri(); ?>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="<?= $home; ?>/assets/css/reset.css">
  <link rel="stylesheet" type="text/css" href="<?= $home; ?>/assets/css/base.css">
  <link rel="stylesheet" type="text/css" href="<?= $home; ?>/assets/css/header.css">

  <link rel="stylesheet" href="<?= $home; ?>/assets/css/<?= $css_escolhido; ?>.css">

    <?php wp_head(); ?>
    <title>
        <?php geraTitle(); ?>
    </title>

</head>
<body>

<header>
    <div class="container">
        <?php
            $args = array(
                'theme_location' => 'header-menu',
            'menu' => 'Menu principal'
            );
            wp_nav_menu( $args );
        ?>
    </div>
</header>