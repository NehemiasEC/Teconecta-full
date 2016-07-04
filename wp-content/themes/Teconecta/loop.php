<section id="main">
    <?php if(have_posts()):while(have_posts()):the_post();?>
        <article>
            <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
            <p><?php the_excerpt()?></p>
            <time><?php the_time("l f d")?></time>
            <span>Autor: <?php $email=get_the_author_meta("email");?>
                <img src="<?php print get_gravatar($email,40,"mm","g")?>" alt="">
                <?php the_author_posts_link()?>
            </span>
        </article>
    <?php endwhile;else:?>
        <?php _e("no se encontro lo que buscaba");?>
    <?php endif?>
</section>