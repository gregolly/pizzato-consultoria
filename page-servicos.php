<?php get_header(); 
//Template Name: Servicos
?>
<div class="headline js-slidein">
    <div class="container-fluid-img columns">
        <div class="overlay"></div>
        <img class="img-headline" src="<?php the_field('img-headline-servicos'); ?>">
        <h1 class="titulo-headline"><?php the_field('titulo-headline-servicos'); ?></h1>
    </div>
</div>

<?php get_template_part('includes/page', 'servi'); ?>

<?php get_template_part('includes/page', 'newsletter'); ?>

<?php get_footer(); ?>