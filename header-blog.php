<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/node_modules/aos/dist/aos.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/node_modules/swiper/swiper-bundle.min.css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>/img/favicon.svg" type="image/x-icon">
    <!--<title><?php bloginfo('name')?> <?php wp_title('|') ?></title>-->

    <?php wp_head(); ?>
</head>
<body>
    <header class="menu-blog">
        <div class="container">
            <div class="content-dropdown">
                <a href="<?php echo get_permalink(get_page_by_path('Blog'))?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo_blog.svg" alt="" class="logo"></a>
                <button class="menu-toggle" id="menu-toggle">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
            
            <nav id="menu-dropdown">
                <?php
                    $args = array(
                        'menu' => 'Header Principal',
                        'theme_location' => 'header-principal',
                        'container' => false
                    );
                    wp_nav_menu( $args );
                ?>

                <div class="icons">
                    <ul>
                        <li><a href="https://www.youtube.com/@dev_boost" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href="https://www.instagram.com/dev_boost/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/dev-boost/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </nav>
            
        </div>
    </header>