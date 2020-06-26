<?php get_header(); 
//Template Name: Home
?>

<main class="main">
    <div class="container">
        <div class="columns">
            <div class="col-6">
                <div class="main-texts">
                    <h1 class="title-main"><?php the_field('title-main'); ?></h1>
                    <p class="p-main"><?php the_field('p-main'); ?></p>
                </div>
            </div>
        
            <div class="col-6">
                <div class="img-absoluta">
                    <img src="<?php the_field('img-main'); ?>">
                </div>
            </div>
        </div><!--columens-->
    </div><!--container -->
    <div></div>
</main>

<div class="sobre js-slidein">
    <div class="container">
        <h2 class="titulo"><?php the_field('titulo-sobre', 10); ?></h2>
        <div class="columns align-items">
            <div class="col-6">
                <img src="<?php the_field('sobre-img'); ?>">
            </div>
            <div class="col-6">
                <div class="texto-sobre">
                    <p>
                        <?php the_field('sobre-texto'); ?>
                    </p>
                </div>
            </div>
        </div><!--columns-->
        <a class="btn-main" href="<?php the_field('link-sobre'); ?>"><?php the_field('rotulo-botao-sobre'); ?></a>
    </div><!--container-->
</div>

<?php get_template_part('includes/page', 'servi'); ?>

<?php get_template_part('includes/page', 'depo'); ?>

<?php get_template_part('includes/page', 'newsletter'); ?>

<div class="equipe js-slidein">
    <div class="container">
        <h5 class="titulo"><?php the_field('titulo-equipe'); ?></h5>
    </div>
    <div class="owl-carousel container-fluid">
    <?php if(have_rows('equipe')) : while(have_rows('equipe')) : the_row(); ?>
        <div class="equipe-wrap">
            <img src="<?php the_sub_field('foto-membro-equipe'); ?>">
        </div>
    <?php endwhile; else: endif; ?>
    </div>
</div>

<div class="parceiros js-slidein">
    <h5 class="titulo"><?php the_field('titulo-parceiros'); ?></h5>
    <div class="owl-carousel container-fluid-parceiros">
    <?php if(have_rows('parceiros')) : while(have_rows('parceiros')) : the_row(); ?>
        <div>
            <img src="<?php the_sub_field('parceiros-img'); ?>">
        </div>
    <?php endwhile; else: endif; ?>
    </div>
</div>




    <div class="blog-wrap js-slidein">
        <div class="container">
            <h6 class="titulo"><?php the_field('blog-titulo'); ?></h6>
            <div class="columns">
        <?php
            global $post;
            $args = array( 'numberposts' => 6 );
            $myposts = get_posts( $args );
            foreach( $myposts as $post ) : setup_postdata($post); ?>
            <div class="col-4">
                <div class="noticias">
                    <ul>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <article style="display: flex">
                                    <div class="col-8">
                                        <?php the_post_thumbnail(array(400,400)); ?>
                                    </div>
                                    <div class="col-4">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </article>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php endforeach;  ?>
            <?php wp_reset_postdata(); ?>
            </div>
            <a class="btn-main "href="<?php the_field('link-btn-blog-home'); ?>">
            <?php the_field('rotulo-btn-blog-home'); ?></a>
        </div><!--container-->
    </div><!--blog-->





<?php get_footer(); ?>