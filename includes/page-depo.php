<div class="depoimentos js-slidein">
    <div class="container">
        <h4 class="titulo"><?php the_field('titulo-depoimento',10); ?></h4>
        <div class="owl-carousel slide">
        <?php if(have_rows('depoimentos',10)) : while(have_rows('depoimentos',10)) : the_row(); ?>
                <div class="depoimentos-wrap">
                    <p><?php the_sub_field('texto-depoimento',10); ?></p>
                    <span><?php the_sub_field('nome-depo',10); ?></span>
                </div>
        <?php endwhile; else: endif; ?>
        </div>
    </div>
</div>
