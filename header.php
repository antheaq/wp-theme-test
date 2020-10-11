<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | ES Inc.</title>

    <?php wp_head(); ?>
</head>
<body>
<header class="masthead">
    <div class="jumbotron justify-content-center">
        <div class="logo-top-tiny text-center">
            <img class="img-responsive" src="<?php bloginfo('template_directory');?>/images/es-brand-logo-black.png" alt="logo">
            <h2>ES</h2>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark mb-5" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/wp">
                <img src="<?php bloginfo('template_directory');?>/images/es-brand-logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                ES
            </a>
        
            <?php
            wp_nav_menu(array(
                'theme_location'    => 'top-menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ));
            ?>
                <?php get_search_form();?>
        </div>
    </nav>
</header>