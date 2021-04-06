<?php get_header();?>

<section class="blogsads" >
    <div class="container blogsads__container">

        
    <div class="blgcard__div blgcard-info">
            <h1 class="blogs-header__title"><?php the_title();?></h1>
            <?php get_template_part('section','content');?>

        </div>

    </div>
</section>

<?php get_footer();?>