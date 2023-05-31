<?php get_header(); ?>

<?php setPotsViews(get_the_ID()); ?>

    <?php if(have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="single">
        <div class="container">
            <div class="share">
                <ul>
                    <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-whatsapp"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-telegram"></i></a></li>
                </ul>
            </div>
            <div class="content">
                <div class="image">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="text-content">
                    <?php 
                        $category = get_the_category( $post -> ID);

                        if(!empty($category)){
                            foreach($category as $nameCategory){
                                echo '<span class="title">'.$nameCategory -> name.'</span>';
                            }
                        }
                    ?>
                    <h4><?php the_title(); ?></h4>
                    <div class="info">
                        <ul>
                            <li>Por <span><?php echo get_the_author_meta('display_name'); ?></span></li>
                            <li><i class="icon fa-regular fa-eye"></i><span><?php echo do_shortcode('[rt_reading_time postfix="min" postfix_singular="min"]') ?></span> de leitura</li>
                            <li><i class="icon fa-regular fa-clock"></i>Publicado em <?php echo get_the_date(); ?></li>
                        </ul>
                    </div>
                </div>
                <?php the_content(); ?>

                <div class="description">
                    <div class="font">
                        <h6>Fontes</h6>
                        <a href="" class="tag">Tecmundo</a>
                    </div>
                    <div class="category">
                        <h6>Categorias</h6>
                        <span class="tag">Notícias</span>
                    </div>
                </div>
                <div class="author">
                    <div class="perfil">
                        <img src="<?php echo get_template_directory_uri()?>/img/perfil.jpg" alt="">
                    </div>
                    <div class="text">
                        <h4>Jardson Martins</h4>
                        <span class="tag">Co-fundador da DevBoost</span>
                        <p>Jardson Martins é formado em Sistemas de informação, co-fundador da DevBoost. UI/UX Designer e Front-end, trabalha com tecnologia desde 2014.</p>
                        <div class="social">
                            <ul>
                                <li><a href="" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                            <p><a href="">Veja mais posts deste autor<i class="fa-sharp fa-solid fa-arrow-right"></i></a></p>
                        </div>
                    </div>
                </div>
                

            </div>
            <?php include(TEMPLATEPATH .'/includes/free-content.php') ?>
        </div>
    </section>

    <?php include(TEMPLATEPATH .'/includes/section-newsletter.php') ?>

    <?php endwhile; endif; wp_reset_query() ?>

<?php get_footer() ?>