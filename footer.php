<footer class="rodape js-slidein">
    <div class="container">
        <h6 class="titulo-rodape"><?php the_field('titulo-rodape', 10); ?></h6>
        <ul class="columns">
            <?php if(have_rows('sociais', 10)) : while(have_rows('sociais', 10)) : the_row(); ?>
            <li>
                <a href="<?php the_sub_field('link-rede-social', 10); ?>">
                    <i class="<?php the_sub_field('icone-rede-social', 10); ?>"></i>
                </a>
            </li>
            <?php endwhile; else: endif; ?>
        </ul>
    </div>
    <div class="copy">
        todos os direitos reservados pizzato consultoria.
    </div>
</footer>

<a class="back-to-top" href="#">
    voltar ao topo <i class="fas fa-chevron-right"></i>
</a>
    <?php wp_footer(); ?>
</body>
</html>