<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body id="blog-display-body" style="background: url(<?php echo get_theme_file_uri('/images/nep_post.png') ?>);">


    <!-- Header and Navigation-->
    <section class="header-about-us">
        <nav class="nav-active-1">
            <h1><a href="<?php echo site_url() ?>">DAY KATHMANDU</a></h1>

            <ul>
                <li><a href="<?php echo site_url() ?>">Home</a></li>
                <li><a href="<?php echo site_url('/about-us') ?>">About</a></li>
                <li><a href="<?php echo site_url('/blog') ?>">Blog</a></li>
                <li class="active"><a href="<?php echo site_url('/nepali_posts') ?>">ब्लग</a></li>
                <li><a href="<?php echo site_url('/contact-us') ?>">Contact</a></li>
            </ul>

            <i class="fas fa-bars" onclick="navOpen();"></i>

        </nav>
    </section>
    <!-- x - Header and Navigation - x -->

    <!-- Blog Display Body -->
    <section class="blog-display">
    <div class="div-nep">
            <?php
            while (have_posts()) {
                ?>
                <div class="post">
                <div class="img">
                <?php
                the_post();
                if (has_post_thumbnail()) :
                    echo get_the_post_thumbnail();
                endif;
                ?>
                </div>
                <?php
            ?>
                <div class="b-titles">
                    <h2 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> <a></h2>
                    <?php the_excerpt(); ?>
                </div>
                </div>
                <hr>
            <?php
            }
            echo paginate_links();
            ?>
        </div>
    </section>
    <!-- x - Blog Display Body - x -->


    <?php get_footer(); ?>