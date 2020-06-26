
<div class="servicos js-slidein">
    <div class="container">
        <h3 class="titulo"><?php the_field('servicos-titulo',10); ?></h3>
        <div class="columns">
        <?php if(have_rows('servicos',10)) : while(have_rows('servicos',10)) : the_row(); ?>
            <div class="col-6">
                <div class="servicos-wrap">
                    <img src="<?php the_sub_field('img-servicos',10); ?>">
                    <div class="desc-servicos">
                        <header class="titulo-desc-servicos"><?php the_sub_field('titulo-desc-servicos',10); ?></header>
                        <p class="resumo-desc-servicos"><?php the_sub_field('resumo-desc-servicos',10); ?></p>
                        <a class="btn-servicos" href="<?php the_sub_field('link-servicos',10); ?>">
                        <?php the_sub_field('rotulo-botao-servicos',10); ?>
                        </a>
                    </div>
                </div>
            </div>
        <?php endwhile; else: endif; ?> 
        </div><!--columns-->
    </div><!--container-->
</div>