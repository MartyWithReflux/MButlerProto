<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="sass/main.scss" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="section section-header">
    <div class="container">
        <div class="row">
            <div class="blog-masthead">
                <div class="container nav-position">

                </div>
            </div>
        </div>
    </div>
    <div class="homes-logo">
<!--        <img src="https://i.imgur.com/sSH3kOX.png" alt="logo" class="homes-logo">-->
    </div>
    <nav class="nav-links text-center menu-slash nav-position" id="navBar">
        <script>// When the user scrolls the page, execute myFunction
            window.onscroll = function() {myFunction()};

            // Get the header
            var header = document.getElementById("navBar");

            // Get the offset position of the navbar
            var sticky = header.offsetTop;

            // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
            function myFunction() {
                if (window.pageYOffset > sticky) {
                    header.classList.add("sticky");
                    header.classList.remove("nav-position");
                } else {
                    header.classList.remove("sticky");
                    header.classList.add("nav-position");
                }
            } </script>
        <a class="blog-nav-item active" href="#About Us">About Us</a>
        <span class="blog-nav-item">/</span>
        <a class="blog-nav-item" href="#Services">Services</a>
        <span class="blog-nav-item">/</span>
        <a class="blog-nav-item" href="#Contact Us">Contact Us</a>
    </nav>
</div>
