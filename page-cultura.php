<?php get_header(); 
//Template Name: Cultura Organizacional
?>
<div class="headline js-slidein">
    <div class="container-fluid-img columns">
        <div class="overlay"></div>
        <img class="img-headline" src="<?php the_field('img-headline-index-cultura'); ?>">
        <h1 class="titulo-headline"><?php the_field('titulo-headline-index-cultura'); ?></h1>
    </div>
</div>

<div class="oque js-slidein">
    <div class="container">
        <h2 class="titulo"><?php the_field('titulo-pagina-que-cultura'); ?></h2>
            <div class="columns">
                <div class="col-4 img-oque">
                    <div class="overlay"></div>
                    <img src="<?php the_field('img-pagina-que-cultura'); ?>">
                </div>
                <div class="col-8 texto-oque">
                    <p>
                    <?php the_field('texto-pagina-que-cultura'); ?>
                    </p>
                </div>
            </div>
    </div>
</div>

<div class="ajuda js-slidein">
    <div class="container">
        <h2 class="titulo"><?php the_field('titulo-pagina-ajuda-cultura'); ?></h2>
            <div class="columns">
            <div class="col-8 texto-ajuda">
                    <p>
                    <?php the_field('texto-pagina-ajuda-cultura'); ?>
                    </p>
                </div>
                <div class="col-4 img-ajuda">
                    <div class="overlay"></div>
                    <img src="<?php the_field('img-pagina-ajuda-cultura'); ?>">
                </div>
            </div>
    </div>
</div>

<div class="interesse js-slidein">
    <div class="container">
        <div class="columns align-items">
            <div class="col6 texto-interesse">
                <p><?php the_field('interesse-cultura'); ?></p>
            </div>
            <div class="col-6 link-interesse">
                <a class="btn-interesse" href="<?php the_field('link-pagina-cultura'); ?>">
                    <?php the_field('btn-rotulo-pagina-cultura'); ?>
                </a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>