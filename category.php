<?php get_header('blog'); ?>
    
    <div class="blog">

        <section class="latest">
            <div class="container">
                <div class="left-content">
                    <h2>Posts sobre <?php echo single_cat_title(); ?></h2>
                    <?php
                        $category = get_queried_object();
                        $args = array(
                            'post_type' => 'post',
                            'order' => 'DESC',
                            'cat' => $category->term_id,
                        );
                        $query_posts = new WP_Query($args);
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