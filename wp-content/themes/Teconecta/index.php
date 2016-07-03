<?php get_header()?>
    <section id="main">
        <?php if(have_posts()):while(have_posts()):the_post();?>
        <article><a href="<?php the_permalink()?>"><?php the_title()?></a></article>
        <?php endwhile;else:?>
        <?php _e("no se encontro lo que buscaba");?>
        <?php endif?>
    </section>
    
<?php get_footer()?>
