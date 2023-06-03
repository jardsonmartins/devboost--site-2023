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
                        <?php
                            $nome_fonte = get_post_meta(get_the_ID(), 'nome_fonte', true);
                            $link_fonte = get_post_meta(get_the_ID(), 'link_fonte', true);

                            if (!empty($nome_fonte) && !empty($link_fonte)) {
                                echo '<h6>Fontes</h6>';
                                echo '<a href="' . esc_url($link_fonte) . '" target="_blank" class="tag">' . esc_html($nome_fonte) . '</a>';
                            }
                        ?>
                    </div>
                    <div class="category">
                        <h6>Categorias</h6>
                        <?php 
                        $category = get_the_category( $post -> ID);
                            if(!empty($category)){
                                foreach($category as $nameCategory){
                                    echo '<span class="tag">'.$nameCategory -> name.'</span>';
                                }
                            }
                        ?>
                    </div>
                </div>
                
                <div class="author">
                    <div class="perfil">
                        <?php
                            $author_id = get_the_author_meta('ID');
                            $author_avatar = get_user_meta($author_id, 'simple_local_avatar', true);
                        
                            if (!empty($author_avatar) && is_numeric($author_avatar)) {
                                echo wp_get_attachment_image($author_avatar, 'thumbnail');
                            } elseif (!empty($author_avatar)) {
                                echo '<img src="' . esc_url($author_avatar) . '" alt="Avatar" />';
                            } else {
                                echo get_avatar($author_id, 'thumbnail');
                            }
                        ?>
                    </div>
                    <div class="text">
                        <h4><?php echo get_the_author_meta('display_name'); ?></h4>
                        <?php   
                            $funcao = get_the_author_meta('funcao', $author_id);
                            if (!empty($funcao)) :
                            ?> 
                            <?php echo '<span class="tag">',$funcao,'</span>' ?>
                        <?php endif; ?>
                        <?php
                            $author_id = get_the_author_meta('ID');
                            $biografia = get_the_author_meta('description');

                            if (!empty($biografia)) {
                                echo '<p>', esc_html($biografia), '</p>';
                            }
                        ?>
                        <div class="social">
                            <ul>
                                <?php   
                                    $instagram = get_the_author_meta('instagram', $author_id);
                                    if (!empty($instagram)) :
                                    ?> 
                                    <?php echo '<li><a href="',$instagram,'" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>' ?>
                                <?php endif; ?>
                                <?php   
                                    $twitter = get_the_author_meta('twitter', $author_id);
                                    if (!empty($twitter)) :
                                    ?> 
                                    <?php echo '<li><a href="',$twitter,'" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>' ?>
                                <?php endif; ?>
                                <?php   
                                    $linkedin = get_the_author_meta('linkedin', $author_id);
                                    if (!empty($linkedin)) :
                                    ?> 
                                    <?php echo '<li><a href="',$linkedin,'" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>' ?>
                                <?php endif; ?>
                                <?php   
                                    $youtube = get_the_author_meta('youtube', $author_id);
                                    if (!empty($youtube)) :
                                    ?> 
                                    <?php echo '<li><a href="',$youtube,'" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>' ?>
                                <?php endif; ?>
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