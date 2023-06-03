<?php get_header('blog'); ?>
    
<div class="blog">

    <section class="latest">
        <div class="container">
            <div class="left-content">
                <h2>Resultado de pesquisa</h2>
                <p>Palavra pesquisada: <strong><?php echo get_query_var('s') ?></strong></p>
                <?php
                    global $query_string;
                    $query_args = explode("&", $query_string);
                    $search_query = array();

                    foreach($query_args as $key => $string) {
                        $query_split = explode("=", $string);
                        $search_query[$query_split[0]] = urldecode($query_split[1]);
                    }
                    $the_query = new WP_Query($search_query);
                    if ( $the_query->have_posts() ) : 
                ?>

                <?php while($the_query->have_posts()) : $the_query->the_post() ?>
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
                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>
                            
                <?php else : ?>
                    <div class="empty-search">
                        <i class="far fa-sad-tear fa-2xl mb-4"></i>
                        <h3>Nenhum resultado encontrado</h2>
                        <p>Não foi encontrado nenhum post com a palavra buscada.</p>
                    </div>
                <?php endif; ?>
            </div>
            <?php include(TEMPLATEPATH .'/includes/free-content.php') ?>
        </div>
    </section>

    <?php include(TEMPLATEPATH .'/includes/section-newsletter.php') ?>

    </div>

<?php get_footer() ?>