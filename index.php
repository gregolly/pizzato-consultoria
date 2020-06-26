<?php get_header(); ?>
<div class="headline">
    <div class="container-fluid-img columns">
        <div class="overlay"></div>
        <img class="img-headline" src="<?php the_field('img-headline-index'); ?>">
        <h1 class="titulo-headline"><?php the_field('titulo-headline-index'); ?></h1>
    </div>
</div>

<div class="oque">
    <div class="container">
        <h2 class="titulo"><?php the_field('titulo-pagina-que'); ?></h2>
            <div class="columns">
                <div class="col-4 img-oque">
                    <div class="overlay"></div>
                    <img src="<?php the_field('img-pagina-que'); ?>">
                </div>
                <div class="col-8 texto-oque">
                    <p>
                    <?php the_field('texto-pagina-que'); ?>
                    </p>
                </div>
            </div>
    </div>
</div>

<div class="ajuda">
    <div class="container">
        <h2 class="titulo"><?php the_field('titulo-pagina-ajuda'); ?></h2>
            <div class="columns">
            <div class="col-8 texto-ajuda">
                    <p>
                    <?php the_field('texto-pagina-ajuda'); ?>
                    </p>
                </div>
                <div class="col-4 img-ajuda">
                    <div class="overlay"></div>
                    <img src="<?php the_field('img-pagina-ajuda'); ?>">
                </div>
            </div>
    </div>
</div>

<div class="interesse">
    <div class="container">
        <div class="columns align-items">
            <div class="col6 texto-interesse">
                <p><?php the_field('interesse'); ?></p>
            </div>
            <div class="col-6 link-interesse">
                <a class="btn-interesse" href="<?php the_field('link-pagina'); ?>">
                    <?php the_field('btn-rotulo-pagina'); ?>
                </a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>