<?php get_header(); 
//Template Name: Desenvolvimento de líderes
?>
<div class="headline ">
    <div class="container-fluid-img columns">
        <div class="overlay"></div>
        <img class="img-headline" src="<?php the_field('img-headline-index-lideres'); ?>">
        <h1 class="titulo-headline"><?php the_field('titulo-headline-index-lideres'); ?></h1>
    </div>
</div>

<div class="oque js-slidein">
    <div class="container">
        <h2 class="titulo"><?php the_field('titulo-pagina-que-lideres'); ?></h2>
            <div class="columns">
                <div class="col-4 img-oque">
                    <img src="<?php the_field('img-pagina-que-lideres'); ?>">
                </div>
                <div class="col-8 texto-oque">
                    <p>
                    <?php the_field('texto-pagina-que-lideres'); ?>
                    </p>
                </div>
            </div>
    </div>
</div>

<div class="ajuda js-slidein">
    <div class="container">
        <h2 class="titulo"><?php the_field('titulo-pagina-ajuda-lideres'); ?></h2>
            <div class="columns">
            <div class="col-8 texto-ajuda">
                    <p>
                    <?php the_field('texto-pagina-ajuda-lideres'); ?>
                    </p>
                </div>
                <div class="col-4 img-ajuda">
                    <img src="<?php the_field('img-pagina-ajuda-lideres'); ?>">
                </div>
            </div>
    </div>
</div>

<div class="interesse js-slidein">
    <div class="container">
        <div class="columns align-items">
            <div class="col6 texto-interesse">
                <p><?php the_field('interesse-lideres'); ?></p>
            </div>
            <div class="col-6 link-interesse">
                <a class="btn-interesse" href="<?php the_field('link-pagina-lideres'); ?>">
                    <?php the_field('btn-rotulo-pagina-lideres'); ?>
                </a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>