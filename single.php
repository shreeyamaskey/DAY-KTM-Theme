<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body id="indiv-blog-body">


    <!-- Header and Navigation-->
    <section class="header-about-us">
        <nav class="nav-active-1">
            <h1><a href="<?php echo site_url() ?>">DAY KATHMANDU</a></h1>

            <ul>
                <li><a href="<?php echo site_url() ?>">Home</a></li>
                <li><a href="<?php echo site_url('/about-us') ?>">About</a></li>
                <li><a href="<?php echo site_url('/blog') ?>">Blog</a></li>
                <li><a href="<?php echo site_url('/nepali_posts') ?>">ब्लग</a></li>
                <li><a href="<?php echo site_url('/contact-us') ?>">Contact</a></li>
            </ul>

            <i class="fas fa-bars" onclick="navOpen();"></i>

        </nav>
    </section>
    <!-- x - Header and Navigation - x -->

    <!-- Individual Blog Post -->
    <section class="indiv-post">
        <?php
        while (have_posts()) {
            the_post(); 
            if( has_post_thumbnail() ):
                echo get_the_post_thumbnail();
                endif;?>
            <h2><?php the_title(); ?></h2>
            <div class="blog-content">
                <button class="back-btn"><a href="<?php echo site_url('/blog') ?>"><i class="fa-solid fa-angles-left"></i> Back</a></button>
                <?php the_content(); ?>
            </div>
        <?php

        } ?>
    </section>
    <!-- x - Individual Blog Post - x -->


    <?php get_footer(); ?>


    <!-- <div class="coming-soon" style="background: url(<?php echo get_theme_file_uri('/images/coming-soon-bg.png') ?>);">
        <h1>Coming soon</h1>
</div> -->