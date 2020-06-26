<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/452324c7bd.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="header js-slidein">
    <div class="container">
        <div class="columns align-items -p">
            <div class="col-4">
                <div class="logo">
                    <a href="">
                        <img src="<?php the_field('logo', 10); ?>">
                    </a>
                </div>
            </div>
            <div class="col-8">
                <button class="close-button">
                    <i class="fas fa-times"></i>
                </button>
                <button class="menu-mobile">
                    <i class="fas fa-bars fa-2x"></i>
                </button>
                <nav class="menu-main">
                        <?php
                            $args = array(
                                'menu' => 'principal',
                                'theme_location' => 'menu-main',
                                'container' => 'ul'
                            );
                            wp_nav_menu( $args );
                        ?>
                </nav>
            </div>
        </div><!-- columns -->
    </div><!-- container -->
</header>
    