<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>

    
        <header class="material_cover">
            <div class="padWidth header">
                <h1><a class="title" href="<?php home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                <h4><?php bloginfo('description') ?></h4>
            </div>
        </header>


        <div class="content padWidth">

    