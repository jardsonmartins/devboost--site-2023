<?php
    //Template name: Blog
?>

<?php get_header(); ?>
    
    <div class="blog">
        <section class="banner">
            <div class="container">
                <div class="title">
                <img src="<?php echo get_template_directory_uri()?>/img/icons/icon_flame.png" alt="" class="icon">Evolua sua carreira de programação</div>
                <h1>Insights para ajudar você a crescer a sua carreira</h1>
                <p>Seja bem-vindo ao blog da DevBoost. Fique por dentro de tudo o que acontece no mercado que mais cresce no mundo!</p>
                <a href=""><button class="btn">Quero receber conteúdos semanais</button></a>
            </div>
        </section>

        <section class="search">
            <div class="container">
                <ul>
                    <li>Últimas notícias</li>
                    <li>Mais lidas</li>
                    <li>Mais lidas</li>
                    <li>Mais lidas</li>
                    <li>Mais lidas</li>
                    <li>Mais lidas</li>
                </ul>       
                <form action="">
                    <input type="text" name="Pesquisar" placeholder="Pesquisar">
                    <button><i class="icon fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </section>

        <section class="mostSeen">
            <div class="container">
                <div class="left-content">

                    <?php
                        $args = array(
                            'meta_key' => 'post_views_count',
                            'posts_per_page' => 1,
                            'orderby' => 'meta_value_num',
                            'order' => 'DESC'
                        );
                        $top_views_posts = new WP_Query($args);
                    ?>
                    <?php if(have_posts()) : while ($top_views_posts -> have_posts()) : $top_views_posts -> the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="card-post-lg">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri()?>/img/img_blog.jpg" alt="">
                        </div>
                        <?php 
                            $category = get_the_category( $post -> ID);

                            if(!empty($category)){
                                foreach($category as $nameCategory){
                                    echo '<span class="title">'.$nameCategory -> name.'</span>';
                                }
                            }
                        ?>
                        <h4><?php the_title(); ?></h4>
                    </a> 
                    <?php endwhile; endif; wp_reset_query() ?>

                </div>   
                <div class="right-content">

                    <?php
                        $args = array(
                            'offset' => 1,
                            'meta_key' => 'post_views_count',
                            'posts_per_page' => 3,
                            'orderby' => 'meta_value_num',
                            'order' => 'DESC'
                        );
                        $top_views_posts = new WP_Query($args);
                    ?>
                    <?php if(have_posts()) : while ($top_views_posts -> have_posts()) : $top_views_posts -> the_post(); ?>                     
                    <a href="<?php the_permalink(); ?>" class="card-post-xs">
                        <div class="image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="info">
                            <?php 
                                $category = get_the_category( $post -> ID);

                                if(!empty($category)){
                                    foreach($category as $nameCategory){
                                        echo '<span class="title">'.$nameCategory -> name.'</span>';
                                    }
                                }
                            ?>
                            <h5><?php the_title(); ?></h5>
                        </div>
                    </a>
                    <?php endwhile; endif; wp_reset_query() ?>
                    
                </div>
            </div>
        </section>

        <section class="latest">
            <div class="container">
                <div class="left-content">
                    <h2>Últimas notícias</h2>
                    <?php
                        $config = array (
                            'posts_per_page' => '10',
                            'post_type' => 'post',
                            'order' => 'DESC'
                        );

                        $query_posts = new WP_Query( $config );
                    ?>
                    <?php if(have_posts()) : while ($query_posts -> have_posts()) : $query_posts -> the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="card-post-default">
                        <div class="image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="info">
                            <?php 
                                $category = get_the_category( $post -> ID);

                                if(!empty($category)){
                                    foreach($category as $nameCategory){
                                        echo '<span class="title">'.$nameCategory -> name.'</span>';
                                    }
                                }
                            ?>
                            <h4><?php the_title(); ?></h4>
                            <p><?php short_content(200);?></p>
                            <ul>
                                <li>
                                    <i class="icon fa-regular fa-clock"></i><?php echo get_the_date(); ?>
                                </li>
                                <li>
                                    <i class="icon fa-regular fa-eye"></i><span><?php echo do_shortcode('[rt_reading_time postfix="min" postfix_singular="min"]') ?></span> de leitura
                                </li>
                            </ul>
                        </div>
                    </a>
                    <?php endwhile; endif; wp_reset_query() ?>
                </div>
                <?php include(TEMPLATEPATH .'/includes/free-content.php') ?>
            </div>
        </section>

        <?php include(TEMPLATEPATH .'/includes/section-newsletter.php') ?>

    </div>

<?php get_footer() ?>