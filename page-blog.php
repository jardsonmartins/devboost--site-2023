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
                    <button><img src="<?php echo get_template_directory_uri()?>/img/icons/icon_search.svg" alt=""></button>
                </form>
            </div>
        </section>

        <section class="mostSeen">
            <div class="container">
                <div class="left-content">
                    <a href="" class="card-post-lg">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri()?>/img/img_blog.jpg" alt="">
                        </div>
                        <span class="title">Notícias</span>
                        <h4>Lorem ipsum dolor sit amet consectetur. Ullamcorper id pharetra auctor a augue. Iaculis sit nunc nam adipiscing.</h4>
                    </a> 
                </div>   
                <div class="right-content">
                    <a href="" class="card-post-xs">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri()?>/img/img_blog.jpg" alt="">
                        </div>
                        <div class="info">
                            <span class="title">Notícias</span>
                            <h5>A importância do microcrédito produtivo orientado</h5>
                        </div>
                    </a>
                    <a href="" class="card-post-xs">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri()?>/img/img_blog.jpg" alt="">
                        </div>
                        <div class="info">
                            <span class="title">Notícias</span>
                            <h5>A importância do microcrédito produtivo orientado</h5>
                        </div>
                    </a>
                    <a href="" class="card-post-xs">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri()?>/img/img_blog.jpg" alt="">
                        </div>
                        <div class="info">
                            <span class="title">Notícias</span>
                            <h5>A importância do microcrédito produtivo orientado</h5>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </div>

<?php get_footer() ?>