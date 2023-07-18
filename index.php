<?php
    //Template name: Home
?>
<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="hero">
        <div class="container">
            <div class="text" id="text-pd">
                <div class="title">
                    <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_flame.png" alt="" class="icon"><?php the_field('titulo_section_hero') ?>
                </div>
                <h1><?php the_field('subtitulo_section_hero') ?></h1>
                <p><?php the_field('descricao_section_hero') ?></p>
                <a href="<?php the_field('link_botoes') ?>"><button class="btn"><?php the_field('texto_botao_section_hero') ?></button></a>
            </div>
        </div>
    </section>

   <!--
    <section class="trilha">
        <div class="container">
            <div class="top">
                <div class="text">
                    <div class="title"><?php the_field('titulo_section_trilha') ?></div>
                    <h2><?php the_field('subtitulo_section_trilha') ?></h2>
                </div>
                <p><?php the_field('descricao_section_trilha') ?></p>
            </div>
            <div class="content">
                <ul data-aos="fade-right">
                    <?php if( have_rows('fases_section_trilha') ) : while ( have_rows('fases_section_trilha') ) : the_row(); ?>

                        <li>
                            <div class="icon">
                                <img src="<?php the_sub_field('icone_fases') ?>" alt="">
                            </div>
                            <div class="text">
                                <h5><?php the_sub_field('titulo_fases') ?></h5>
                                <p><?php the_sub_field('descricao_fases') ?></p>
                            </div>
                        </li>

                    <?php endwhile; else : endif; ?>
                </ul>
                <div class="image">
                    <button class="play" data-aos="fade-left">
                        <img src="<?php the_field('imagem_do_video_section_trilha') ?>" alt="" class="img">
                        <div class="player">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_play.svg" alt="icone play">
                            <p>Assista o vídeo para entender como funciona</p>
                        </div>
                    </button>
                    <div class="modal">
                        <span class="modal-fechar">&times;</span>
                        <iframe class="modal-video" src="<?php the_field('link_do_video_section_trilha') ?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="box" data-aos="fade-up">
                        <h2><?php the_field('numero_de_alunos_section_trilha') ?></h2>
                        <p>Alunos no mercado de trabalho</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->
    
    <section class="estrutura">
        <div class="container">
            <div class="content">
                <div class="top">
                    <div class="title"><?php the_field('titulo_section_estrutura') ?></div>
                    <h2><?php the_field('subtitulo_section_estrutura') ?></h2>
                </div>
                <div class="items">
                    <div class="items-top" data-aos="fade-right">
                        <ul>
                            <?php if( have_rows('itens_cima_section_estrutura') ) : while ( have_rows('itens_cima_section_estrutura') ) : the_row(); ?>
                                <li>
                                    <img src="<?php the_sub_field('icone_estrutura') ?>" alt="">
                                    <p><?php the_sub_field('texto_estrutura') ?></p>
                                </li>
                            <?php endwhile; else : endif; ?>
                        </ul>
                    </div>
                    <div class="items-bottom" data-aos="fade-left">
                        <ul>
                            <?php if( have_rows('itens_baixo_section_estrutura') ) : while ( have_rows('itens_baixo_section_estrutura') ) : the_row(); ?>
                                <li>
                                    <img src="<?php the_sub_field('icone_estrutura') ?>" alt="">
                                    <p><?php the_sub_field('texto_estrutura') ?></p>
                                </li>
                            <?php endwhile; else : endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="whatsapp">
                    <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_whatsapp.svg" alt="">
                    <p><a href="<?php the_field('link_do_whatsapp') ?>" target="_blank"><?php the_field('texto_whatsapp_section_estrutura') ?></p>
                </div>
            </div>
            <div class="image">
                <img src="<?php the_field('imagem_section_estrutura') ?>" alt="">
            </div>
        </div>
    </section>

    <section class="praQuem">
        <div class="container">
            <div class="top">
                <div class="title"><?php the_field('titulo_section_pra_quem') ?></div>
                <h2><?php the_field('subtitulo_section_pra_quem') ?></h2>
            </div>
            <div class="bottom">
                <ul>
                    <?php if( have_rows('itens_section_pra_quem') ) : while ( have_rows('itens_section_pra_quem') ) : the_row(); ?>
                        <li data-aos="fade-right">
                            <div class="icon"><img src="<?php the_sub_field('icone_pra_quem') ?>" alt=""></div>
                            <p><?php the_sub_field('texto_pra_quem') ?></p>
                        </li>
                    <?php endwhile; else : endif; ?>
                </ul>
            </div>
        </div>
    </section>

    <section class="mercado">
        <div class="container">
            <div class="top">
                <div class="text">
                    <div class="title"><img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_rocket.png" alt=""><?php the_field('titulo_section_mercado') ?></div>
                    <h2><?php the_field('subtitulo_section_mercado') ?></h2>
                    <a href="<?php the_field('link_botoes') ?>"><button class="btn"><?php the_field('texto_do_botao_section_mercado') ?></button></a>
                </div>
                <p><?php the_field('descricao_section_mercado') ?></p>
            </div>
            <div class="bottom">
                <div class="text">
                    <p>Ganhe ótimos salários trabalhando como dev</p>
                    <p class="aviso">* valores com base no site glassdoor.com.br</p>
                </div>
                <div class="items">
                    <?php if( have_rows('itens_section_mercado') ) : while ( have_rows('itens_section_mercado') ) : the_row(); ?>
                        <div class="card jr" data-aos="fade-right">
                            <div class="niveis">
                                <h3><?php the_sub_field('cargo_mercado') ?></h3>
                                <p><?php the_sub_field('descricao_mercado') ?></p>
                            </div>
                            <div class="salario"><?php the_sub_field('salario_mercado') ?></div>
                        </div>
                    <?php endwhile; else : endif; ?>
                </div>
            </div>
            <div class="line"></div>
        </div>
    </section>

    <section class="metodologia">
        <div class="container">
            <div class="content-left">
                <div class="title"><?php the_field('titulo_section_metodologia') ?></div>
                <h2><?php the_field('subtitulo_section_metodologia') ?></h2>
                <p><?php the_field('descricao_section_metodologia') ?></p>
                <a href="<?php the_field('link_botoes') ?>"><button class="btn"><?php the_field('texto_do_botao_section_metodologia') ?></button></a>
            </div>
            <div class="content-right">
                <ul data-aos="fade-left">
                    <?php if( have_rows('itens_section_metodologia') ) : while ( have_rows('itens_section_metodologia') ) : the_row(); ?>
                        <li>
                            <div class="icon"><img src="<?php the_sub_field('imagem_metodologia') ?>" alt=""></div>
                            <div class="text">
                                <h5><?php the_sub_field('titulo_metodologia') ?></h5>
                                <p><?php the_sub_field('decricao_metodologia') ?></p>
                            </div>
                        </li>
                    <?php endwhile; else : endif; ?>
                </ul>
            </div>
        </div>
    </section>

    <section class="depoimentos">
        <div class="container">
            <div class="top">
                <div class="title"><?php the_field('titulo_section_depoimentos') ?></div>
                <h2><?php the_field('subtitulo_section_depoimentos') ?></h2>
            </div>
            <div class="items">
                <?php if( have_rows('itens_section_depoimentos') ) : while ( have_rows('itens_section_depoimentos') ) : the_row(); ?>
                    <div class="card d2" data-aos="fade-up">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_quotes.svg" alt="" class="icon">
                        <p><?php the_sub_field('comentario_depoimentos') ?></p>
                        <h5><?php the_sub_field('nome_depoimentos') ?></h5>
                        <p><?php the_sub_field('empresa_depoimentos') ?></p>
                    </div>
                <?php endwhile; else : endif; ?>
            </div>
        </div>
    </section>
    
    <section class="grade">
        <div class="container">
            <div class="content-left">
                <div class="text">
                    <div class="title"><?php the_field('titulo_section_grade') ?></div>
                    <h2><?php the_field('subtitulo_section_grade') ?></h2>
                    <p><?php the_field('descricao_section_grade') ?></p>
                </div>
                <ul>
                    <?php if( have_rows('itens_section_grade') ) : while ( have_rows('itens_section_grade') ) : the_row(); ?>
                        <li>
                            <img src="<?php the_sub_field('imagem_grande') ?>" alt="">
                            <h6><?php the_sub_field('titulo_grade') ?></h6>
                            <p><?php the_sub_field('descricao_grade') ?></p>
                        </li>
                    <?php endwhile; else : endif; ?>
                </ul>
            </div>
            <div class="content-right">
                <?php if( have_rows('itens_da_grande_section_grade') ) : while ( have_rows('itens_da_grande_section_grade') ) : the_row(); ?>
                    <details>
                        <summary>
                            <h5><?php the_sub_field('titulo_grade') ?></h5>
                            <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_arrow.svg" alt="">
                        </summary>
                        <ul data-aos="fade-in">
                            <?php if( have_rows('listagem_de_aulas_grade') ) : while ( have_rows('listagem_de_aulas_grade') ) : the_row(); ?>
                                <li><?php the_sub_field('aulas_grande') ?></li>
                            <?php endwhile; else : endif; ?>
                        </ul>
                    </details>
                <?php endwhile; else : endif; ?>
            </div>
        </div>
    </section>

    <section  class="pratica">
        <div class="container">
            <div class="swiper-container">
                <div class="top">
                    <div class="text">
                        <div class="title"><?php the_field('titulo_section_pratica') ?></div>
                        <h2><?php the_field('subtitulo_section_pratica') ?></h2>
                    </div>
                    <div class="arrows">
                        <div class="icon swiper-button-prev">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_left.svg" alt="">
                        </div>
                        <div class="icon swiper-button-next">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_right.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <?php if( have_rows('projeto_section_pratica') ) : while ( have_rows('projeto_section_pratica') ) : the_row(); ?>
                        <div class="swiper-slide <?php the_sub_field('classe_da_cor_pratica') ?>" data-aos="fade-right">
                            <img src="<?php the_sub_field('imagem_pratica') ?>" alt="">
                        </div>
                    <?php endwhile; else : endif; ?>
            </div>
            <div class="line"></div>
        </div>
    </section>

    <section class="tecnologias">
        <div class="top">
            <div class="title">Tecnologias</div>
            <h2>Tecnologias que ensinamos no treinamento</h2>
        </div>
        <div class="logos-top marquee-left" data-aos="fade-right">
            <div class="card">
                <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/logos/html.svg" alt=""></div>
                <div class="text">
                    <h5>Html</h5>
                    <p>HTML é uma linguagem de marcação para páginas web</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/logos/css.svg" alt=""></div>
                <div class="text">
                    <h5>Css</h5>
                    <p>Cascading Style Sheets é uma linguagem de folha de estilo</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/logos/js.svg" alt=""></div>
                <div class="text">
                    <h5>Java Script</h5>
                    <p>JavaScript é uma linguagem de programação que impulsiona a web</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/logos/sass.svg" alt=""></div>
                <div class="text">
                    <h5>Sass</h5>
                    <p>Sass é uma linguagem de folha de estilos para CSS</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/logos/bootstrap.svg" alt=""></div>
                <div class="text">
                    <h5>Bootstrap</h5>
                    <p>Bootstrap é um framework front-end para desenvolvimento web</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/logos/npm.svg" alt=""></div>
                <div class="text">
                    <h5>Npm</h5>
                    <p>É um gerenciador de pacotes para a linguagem JavaScript</p>
                </div>
            </div>
        </div>
        <div class="logos-bottom marquee-right" data-aos="fade-left">
            <div class="card">
                <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/logos/reactjs.svg" alt=""></div>
                <div class="text">
                    <h5>Git & Github</h5>
                    <p>HTML é uma linguagem de marcação para páginas web</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/logos/meterial.svg" alt=""></div>
                <div class="text">
                    <h5>Material UI</h5>
                    <p>Cascading Style Sheets é uma linguagem de folha de estilo</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/logos/reactjs.svg" alt=""></div>
                <div class="text">
                    <h5>ReactJs</h5>
                    <p>JavaScript é uma linguagem de programação que impulsiona a web.</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/logos/typescript.svg" alt=""></div>
                <div class="text">
                    <h5>TypeScript</h5>
                    <p>TypeScript é uma linguagem de programação tipada e compilada</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/logos/tailwind.svg" alt=""></div>
                <div class="text">
                    <h5>Tailwind css</h5>
                    <p>Uma estrutura CSS voltada para o utilitário para criar interfaces de usuário personalizadas</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/logos/node.svg" alt=""></div>
                <div class="text">
                    <h5>Node.Js</h5>
                    <p>Um ambiente de tempo de execução JavaScript do lado do servidor</p>
                </div>
            </div>
        </div>
        <a href="#db-home-plan"><button class="btn">Quero aprender agora</button></a>
    </section>

    <div class="gratuito">
        <div class="container">
            <div class="content">
                <div class="text" data-aos="fade-right">
                    <div class="title"><img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_flame.png" alt=""><?php the_field('titulo_section_gratuito') ?></div>
                    <h2><?php the_field('subtitulo_section_gratuito') ?></h2>
                    <p><?php the_field('descricao_section_gratuito') ?></p>
                    <div class="social">
                        <a href="<?php the_field('link_do_youtube') ?>" target="_blank" class="icon">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_youtube.svg" alt="">
                        </a>
                        <a href="<?php the_field('link_do_instagram') ?>" target="_blank" class="icon">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_instagram.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="image" data-aos="fade-left">
                    <img src="<?php the_field('imagem_section_gratuito') ?>" alt="">
                </div>
            </div>
            <div class="line"></div>
        </div>
    </div>

    <div class="empresas">
        <div class="container">
            <div class="top">
                <div class="title"><?php the_field('titulo_section_empresas') ?></div>
                <h2><?php the_field('subtitulo_section_empresas') ?></h2>
            </div>
            <div class="bottom">
                <?php if( have_rows('logos_section_empresas') ) : while ( have_rows('logos_section_empresas') ) : the_row(); ?>
                    <div class="logo">
                        <img src="<?php the_sub_field('imagem_empresas') ?>" alt="">
                    </div>
                <?php endwhile; else : endif; ?>
            </div>
        </div>
    </div>
    
    <section class="preco" id="db-home-plan">
        <div class="container">
            <div class="content-preco">
                <div class="content-left" data-aos="fade-up">
                    <?php if( have_rows('itens_preco') ) : while ( have_rows('itens_preco') ) : the_row(); ?>
                        <div class="box">
                            <img src="<?php the_sub_field('icone_preco') ?>" alt="">
                            <h5><?php the_sub_field('titulo_preco') ?></h5>
                            <p><?php the_sub_field('descricao_preco') ?></p>
                        </div>
                    <?php endwhile; else : endif; ?>
                </div>

                <div class="content-right">
                    <div class="vagas">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_ray.svg" alt="">
                        <p><?php the_field('titulo_section_preco') ?></p>
                    </div>
                    <h2><?php the_field('subtitulo_section_preco') ?></h2>
                    <div class="box-preco" data-aos="flip-left">
                        <p>Apenas</p>
                        <div class="numeros">
                            <div class="real">R$</div>
                            <div class="valor"><?php the_field('preco_grande_section_preco') ?><span><?php the_field('preco_pequeno_section_preco') ?></span></div>
                        </div>
                        <p><?php the_field('preco_parcelado_section_preco') ?></p>
                    </div>
                    <button class="btn" id="js-form"><?php the_field('texto_do_botao_section_preco') ?></button>
                </div>
            </div>
        </div>
    </section>

    <section class="faq">
        <div class="container">
            <div class="content-left">
                <div class="text">
                    <div class="title"><?php the_field('titulo_section_faq') ?></div>
                    <h2><?php the_field('subtitulo_section_faq') ?></h2>
                    <p><?php the_field('descricao_section_faq') ?></p>
                    <a href="<?php the_field('link_do_whatsapp') ?>" target="_blank"><button class="btn"><i class="fa-brands fa-whatsapp fa-lg"></i><?php the_field('texto_do_botao_section_faq') ?></button></a>
                </div>
            </div>
            <div class="content-right">

                <?php if( have_rows('perguntas_section_faq') ) : while ( have_rows('perguntas_section_faq') ) : the_row(); ?>
                    <details>
                        <summary>
                            <h5><?php the_sub_field('pergunta_faq') ?></h5>
                            <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_arrow.svg" alt="">
                        </summary>
                        <p><?php the_sub_field('resposta_faq') ?></p>
                    </details>
                <?php endwhile; else : endif; ?>
                
            </div>
        </div>
    </section>

    <div class="formulario">
        <div class="overlay">
            <div class="card">
                <div class="close js-overlay-form">
                    <i class="fa-sharp fa-solid fa-xmark"></i>
                </div>
                <h2>Vamos começar</h2>
                <p>Informe seus dados abaixo para prosseguir:</p>
                <form method="POST" onsubmit="redirecionar(event)">
                    <input type="text" name="name" id="name" placeholder="Nome" required>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <input type="tel" name="phone" id="phone" placeholder="WhatsApp" required>
                    <button class="btn" type="submit">Continue</button>
                </form>
            </div>
        </div>
    </div>

    <?php endwhile; else: endif; ?>

<?php get_footer() ?>