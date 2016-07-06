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

<div class="navi">
    <?php previous_posts_link("Anteriores")?>
    <?php next_posts_link("siguientes")?>
</div>
<!-- facebok script -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=196345770768046";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- finaliza el facebook script-->