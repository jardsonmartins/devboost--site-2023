<section class="newsletter" id="newsletter">
    <div class="container">
        <div class="image">
            <img src="<?php echo get_template_directory_uri() ?>/img/email_newsletter.png" alt="">
        </div>
        <div class="text">
            <h4>Cadastre-se e fique atualizado sobre o mundo da tecnologia ✌️</h4>
            <p>Dicas e novidades direto no seu e-mail.</p>
        </div>
        <form method="POST" onsubmit="redirectNewsletter(event)">
            <input type="email" name="email" id="email" placeholder="nome@seuemail.com" required>
            <button class="btn" type="submit">Cadastrar</button>
        </form>
    </div>
</section>