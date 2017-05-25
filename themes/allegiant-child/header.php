<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>


    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div class="outer" id="top">
    <?php do_action('cpotheme_before_wrapper'); ?>
    <div class="wrapper">
        <div id="topbar" class="topbar">
            <div class="container">
                 <div class="clear"></div>
            </div>
        </div>
        <header id="header" class="header">
            <div class="container">
                <?php do_action('cpotheme_header'); ?>
                <div class='clear'></div>

            </div>

        </header>
        <?php do_action('cpotheme_before_main'); ?>
        <div class="clear"></div>