<?php get_header(); ?>


<?php
if (have_posts()) :
while (have_posts()) : the_post(); ?>

<div class="header">
    <h2><?php the_title(); ?></h2>
    <p><?php the_date(); echo " "; the_time(); echo " | "; the_author(); ?></p>
</div>
<!-- section -->
<section class="container single-post">
    <?php the_content(); ?>
    
    <hr class="delimiter">

    <h4>Kam dál?</h4>
    <div class="navigation">

        <?php if (get_previous_post_link()) { ?>
            <div class="previous-post">
                <i class="fas fa-hand-point-left"></i> Předchozí
            <?php
                $prevPost = get_previous_post();
                $prevthumbnail = get_the_post_thumbnail($prevPost->ID); ?>
                <?php previous_post_link('<strong>%link</strong>'); ?>
                <div class="link-box">
                    <?php previous_post_link('%link', $prevthumbnail); ?>
                    <a href="<?php the_permalink($prevPost); ?>"><div class="link-overlay-previous">Zobrazit článek</div></a>
                </div>
            </div>
        <?php } ?>

        <?php if (get_next_post_link()) { ?>
            <div class="next-post">
                Následující <i class="fas fa-hand-point-right"></i>
            <?php
                $nextPost = get_next_post();
                $nextthumbnail = get_the_post_thumbnail($nextPost->ID); ?>
                <?php next_post_link('<strong>%link</strong>'); ?>
                <div class="link-box">
                    <?php next_post_link('%link', $nextthumbnail); ?>
                    <a href="<?php the_permalink($nextPost); ?>"><div class="link-overlay-next">Zobrazit článek</div></a>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<?php
endwhile;
endif;
get_footer();
