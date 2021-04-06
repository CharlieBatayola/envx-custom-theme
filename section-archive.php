<?php if( have_posts() ): while( have_posts() ): the_post();?>

    <div class="blgcard">
        <div class="blgcard__div blgcard-info">
            <h3 class="blgcard-info__title"><?php the_title();?></h3>
            <?php the_excerpt();?>

            <a class="link-setup link-setup--orange" href="<?php the_permalink();?>">Read more</a>
        </div>
    </div>

<?php endwhile; else: endif;?>