<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body class="contact-body-main">
    <!-- Header and Navigation-->
    <section class="header-about-us">
        <nav class="nav-active-1">
            <h1><a href="<?php echo site_url() ?>">DAY KATHMANDU</a></h1>

            <ul class="flex">
                <li><a href="<?php echo site_url() ?>">Home</a></li>
                <li><a href="<?php echo site_url('/about-us') ?>">About</a></li>
                <li><a href="<?php echo site_url('/blog') ?>">Blog</a></li>
                <li><a href="<?php echo site_url('/nepali_posts') ?>">ब्लग</a></li>
                <li class="active"><a href="<?php echo site_url('/contact-us') ?>">Contact</a></li>
            </ul>

            <i class="fas fa-bars" onclick="navOpen();"></i>

        </nav>
    </section>

    <section class="contact-body">
        <div class="contact-container">
            <h1>Contact Us</h1>
            <form onsubmit="sendEmail(); reset(); return false;">
                <input type="text" id="name" placeholder="Your Name" required>
                <input type="email" id="email" placeholder="Enter a valid Email ID" required>
                <textarea id="message" cols="20" rows="8" required placeholder="Your Message"></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
        <img src="<?php echo get_theme_file_uri('/images/DAY KTM Logo.png') ?>" alt="DAY Logo">
    </section>

    <!-- x - Header and Navigation - x -->

    <!-- JavaScript -->
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- For sending emails -->
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- JavaScript -->

    <?php get_footer(); ?>