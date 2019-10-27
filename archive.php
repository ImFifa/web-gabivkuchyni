<?php get_header(); ?>
<head>
    <title>Archiv příspěvků - Gábi v kuchyni</title>
</head>

<h1>Archiv příspěvků</h1>

<!-- section -->
<section class="container">
<?php

    $ourCurrentPage = get_query_var( 'paged' );
    $services = new WP_Query(array(
        'posts_per_page' => 10,
        'post_type' => array('post', 'gk_recepty', 'gk_cestovani'),
        'paged' => $ourCurrentPage
    ));

    while ($services->have_posts()) {
        $services->the_post();
    ?>
    <div class="post-excerpt">
        <?php
            if (has_post_thumbnail()) {
        ?>
        <div class="the-thumbnail">
            <?php the_post_thumbnail('medium-thumbnail'); ?>
        </div>
        <?php
        }
        ?>
        <div class="the-text">
            <h3><?php the_title(); ?></h3>
            <i><?php the_date(); echo " "; the_time(); echo " | "; the_author(); ?></i>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn">Číst více</a>
        </div>
    </div>

    <?php
    } ?>
    <div class="pagination">
        <?php echo paginate_links(); ?>
    </div>
</section>

<?php get_footer();
