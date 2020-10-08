<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/base-min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
     -->
      <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/responsive.css">
    <title>Document</title>
    <?php wp_head()?>
</head>
<body>
    <div class="wrap">
        <header>
            <div class="logo">isobar<span>NEW ZEALAND</span></div>
            <div class="bars"><i class="fas fa-bars"></i></i></div>
            
                    <?php wp_nav_menu( array(
                        'theme_location' => 'header-menu'
                        'container'=> 'ul',
                        'menu_class' => 'navbar-nav'
                    )); ?>
            
                <!-- <ul class="nav">
                  <li><a href="home">Home</a></li>
                  <li><a href="work">Work</a></li>
                  <li><a href="aboutus">About Us</a></li>
                  <li><a href="services">Services</a></li>
                  <li><a href="careers">Careers</a></li>
                  <li><a href="news&insights">News & Insights</a></li>
                  <li><a href="contact">Contact</a></li>
                </ul>
         -->
        </header>
        <div class="hero"></div>
        <div class="banner">
            <p>We are a global agency that delivers experience-led transformation, powered by creativity. We solve complex business challenges through digital marketing, ecosystems and products, driving digital strength and brand loyalty. Our client partners include House of Travel, Silver Fern Farms, Villa Maria, and ASB</p>
        </div>