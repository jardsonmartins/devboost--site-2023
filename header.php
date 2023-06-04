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
    <header class="menu-principal">
        <div class="container">
            <div class="content-dropdown">
                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="" class="logo"></a>
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

                <div class="btns">
                    <a href="https://pay.kiwify.com.br/QTnxhp2"><button class="btn">Fazer matrícula</button></a>
                    <a href="https://dashboard.kiwify.com.br/login"><button class="btn btn-outline-primary">Login</button></a>
                </div>
            </nav>
            
        </div>
    </header>