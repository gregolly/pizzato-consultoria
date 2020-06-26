<?php get_header(); 
//Template Name: Contato
?>
<div class="headline js-slidein">
    <div class="container-fluid-img columns">
        <div class="overlay"></div>
        <img class="img-headline" src="<?php the_field('img-headline-contato'); ?>">
        <h1 class="titulo-headline"><?php the_field('titulo-headline-contato'); ?></h1>
    </div>
</div>

<div class="bg-contato js-slidein">
    <div class="container-contato">
        <h2><?php the_field('titulo-contato'); ?></h2>
        <p class="texto-contato">
            <?php the_field('texto-contato'); ?>
        </p>
        <?= do_shortcode('[contact-form-7 id="128" title="Formulário de contato 1"]'); ?>
    </div>
</div>

<?php get_footer(); ?>