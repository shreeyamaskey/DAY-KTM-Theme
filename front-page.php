<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body id="index-body">

    <!-- Header and Navigation-->
    <section class="header" style="background: linear-gradient(rgba(64, 0, 0, 0.6), rgba(64, 0, 0, 0.6)), url(<?php echo get_theme_file_uri('/images/day2.png') ?>);">
        <nav>
            <h1><a href="<?php echo site_url() ?>">DAY KATHMANDU</a></h1>

            <ul>
                <li class="active"><a href="<?php echo site_url() ?>">Home</a></li>
                <li><a href="<?php echo site_url('/about-us') ?>">About</a></li>
                <li><a href="<?php echo site_url('/blog') ?>">Blog</a></li>
                <li><a href="<?php echo site_url('/nepali_posts') ?>">ब्लग</a></li>
                <li><a href="<?php echo site_url('/contact-us') ?>">Contact</a></li>
            </ul>

            <i class="fas fa-bars" onclick="navOpen();"></i>

        </nav>

        <div class="text-container">
            <span>DEAR ASIAN YOUTH</span>
            <span>काठमाडौँ</span>
            <a href="<?php echo site_url('/about-us') ?>"><button>EXPLORE</button></a>
        </div>
    </section>
    <!-- x - Header and Navigation - x -->

    <!-- Divider 1 -->
    <section class="divider-1">
        <h3>EMPOWERING AND EDUCATING OUR COMMUNITIES</h3>
        <div class="line"></div>
        <p>Kathmandu based chapter of Dear Asian Youth</p>
    </section>
    <!-- x - Divider 1 - x -->


    <!-- Kathmandu Chapter -->
    <div class="day-ktm">
        <span>
            <img src="<?php echo get_theme_file_uri('/images/DAY KTM Logo.png') ?>" alt="day-ktm">
        </span>
        <span>
            <h1>Dear Asian Youth - Kathmandu Chapter</h1>
            <p>DAY Kathmandu is primarily a research-based chapter. Recognizing the lack of presence of Nepali history, culture, and affairs in the digital world, our chapter serves as a means for us to explore local and global issues concerning communities in Kathmandu. DAY Kathmandu seeks to educate and empower our community through knowledge. In collaboration with a team of researchers, editors, and designers, we publish our findings and engage with a youthful audience- mainly through Instagram. </p>
        </span>
    </div>
    <!-- x - Kathmandu Chapter - x -->

    <!-- Recent Blogs -->
    <section class="recent-posts">
        <h1>Recent blogs</h1>
        <div class="blog-list">

            <?php get_header(); ?>

        </div>
    </section>
    <!-- x - Recent Blogs - x -->

    <!-- Recent Posts -->
    <section class="recent-posts">
        <h1>Recent posts</h1>
        <div class="gallery">
            <!-- Elfsight free instagram feed widget section -->
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-361ba4c7-7e9a-4ace-8028-ee29bc8664b0"></div>
            <!-- x - Elfsight free instagram feed widget section - x -->

        </div>
    </section>
    <!-- x - Recent Posts - x -->

    <!-- Follow Us -->
    <section class="follow">
        <span>
            <a href="https://www.instagram.com/dearasianyouth.ktm/" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                </svg>
            </a>
            <a href="https://www.instagram.com/dearasianyouth.ktm/" target="_blank" class="text-deco">
                <h3>Follow us on Instagram</h3>
            </a>
        </span>
        <div class="line"></div>
        <span>
            <a href="mailto:dearasianyouthktm@gmail.com">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z" />
                </svg>
            </a>
            <a href="mailto:dearasianyouthktm@gmail.com" class="text-deco">
                <h3>Send us an Email</h3>
            </a>
        </span>
    </section>
    <!-- x - Follow Us - x -->

    <?php get_footer(); ?>