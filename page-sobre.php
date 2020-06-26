<?php get_header(); 
//Template Name: Sobre
?>

<div class="headline js-slidein">
    <div class="container-fluid-img columns">
        <div class="overlay"></div>
        <img class="img-headline" src="<?php the_field('img-headline-sobre'); ?>">
        <h1 class="titulo-headline"><?php the_field('titulo-headline-sobre'); ?></h1>
    </div>
</div>

<div class="sobre-page js-slidein">
    <h2 class="titulo"><?php the_field('titulo-sobre', 10); ?></h2>
    <div class="container">
        <img src="<?php the_field('img-sobre-page'); ?>">
        <p><?php the_field('texto-sobre-page'); ?></p>
    </div>
</div>
<?php get_template_part('includes/page', 'depo'); ?>

<?php get_footer(); ?>