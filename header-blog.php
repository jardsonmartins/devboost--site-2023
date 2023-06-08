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
            <a href="<?php echo get_home_url(); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri() ?>/img/logo_blog.svg" alt="">
            </a>
            <nav>
                <?php
                    $args = array(
                        'menu' => 'Header Principal',
                        'theme_location' => 'header-principal',
                        'container' => false
                    );
                    wp_nav_menu( $args );
                ?>
                <div class="icons">
                    <a href="https://www.youtube.com/@dev_boost" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://www.instagram.com/dev_boost/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/dev-boost/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <div class="btn-mobile" id="js-btn-menu-mobile">
                    <i class="fa-solid fa-bars"></i>
                </div>

            </nav>
        </div>
    </header>

    <div class="menu-mobile">
        <div class="overlay js-overlay">
            <aside>
                <a href="<?php echo get_home_url(); ?>" class="logo">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="">
                </a>
                <nav>
                    <?php
                        $args = array(
                            'menu' => 'Header Principal',
                            'theme_location' => 'header-principal',
                            'container' => false
                        );
                        wp_nav_menu( $args );
                    ?>

                    <div class="btns">
                        <a href="https://pay.kiwify.com.br/QTnxhp2"><button class="btn">Fazer matrícula</button></a>
                        <a href="https://dashboard.kiwify.com.br/login"><button class="btn btn-outline-primary">Login</button></a>
                    </div>
                </nav>
            </aside>
        </div>
    </div>