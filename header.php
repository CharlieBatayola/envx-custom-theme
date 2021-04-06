<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>

    <?php wp_head();?>
</head>
<body>

<?php get_template_part('section','nav');?>
<!--
<header>
    <div class='container'>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'side-menu',
                'menu_class' => 'side-menu'
            )
            );
        ?>
    </div>

</header>
 -->
