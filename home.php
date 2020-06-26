<?php get_header(); ?>
<div class="headline js-slidein">
    <div class="container-fluid-img columns">
        <div class="overlay"></div>
        <img class="img-headline" src="<?php the_field('img-headline-index-blog', 82); ?>">
        <h1 class="titulo-headline"><?php the_field('titulo-headline-index-blog', 82); ?></h1>
    </div>
</div>

<div class="container blog-container js-slidein">
    <div class="columns">
            <div class="blog-wrap col-8">
                <div class="container">
                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                        <div class="noticias">
                            <ul>
                                <li>
                                    <a href="<?php the_permalink(); ?>">
                                        <article class="columns">
                                            <div class="col-8">
                                                <?php the_post_thumbnail('large'); ?>
                                            </div>
                                            <div class="col-4 texto-blog">
                                                <h2><?php the_excerpt(); ?></h2>
                                            </div>
                                        </article>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    <?php endwhile; else: endif; ?>
                </div><!--container-->
            </div><!--blog-->

            <ul id="sidebar col-4">
                <?php if ( ! dynamic_sidebar() ) : ?>
                    
                <?php endif; ?>
            </ul>
    </div>  
</div>  
<?php get_footer(); ?>