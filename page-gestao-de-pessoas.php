<?php get_header();
//Template Name: gestão de pessoas
?>
<div class="headline js-slidein">
    <div class="container-fluid-img columns">
        <div class="overlay"></div>
        <img class="img-headline" src="<?php the_field('img-headline-index-pessoas'); ?>">
        <h1 class="titulo-headline"><?php the_field('titulo-headline-index-pessoas'); ?></h1>
    </div>
</div>

<div class="oque js-slidein">
    <div class="container">
        <h2 class="titulo"><?php the_field('titulo-pagina-que-pessoas'); ?></h2>
            <div class="columns">
                <div class="col-4 img-oque">
                    <img src="<?php the_field('img-pagina-que-pessoas'); ?>">
                </div>
                <div class="col-8 texto-oque">
                    <p>
                    <?php the_field('texto-pagina-que-pessoas'); ?>
                    </p>
                </div>
            </div>
    </div>
</div>

<div class="ajuda js-slidein">
    <div class="container">
        <h2 class="titulo"><?php the_field('titulo-pagina-ajuda-pessoas'); ?></h2>
            <div class="columns">
            <div class="col-8 texto-ajuda">
                    <p>
                    <?php the_field('texto-pagina-ajuda-pessoas'); ?>
                    </p>
                </div>
                <div class="col-4 img-ajuda">
                    <img src="<?php the_field('img-pagina-ajuda-pessoas'); ?>">
                </div>
            </div>
    </div>
</div>

<div class="interesse js-slidein">
    <div class="container">
        <div class="columns align-items">
            <div class="col6 texto-interesse">
                <p><?php the_field('interesse-pessoas'); ?></p>
            </div>
            <div class="col-6 link-interesse">
                <a class="btn-interesse" href="<?php the_field('link-pagina-pessoas'); ?>">
                    <?php the_field('btn-rotulo-pagina-pessoas'); ?>
                </a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>