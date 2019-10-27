<?php get_header(); ?>

<h1>O mně</h1>

<!-- section -->
<section class="container">
<?php
    while (have_posts()) {
        the_post();
        the_content();
    }
?>
</section>

<?php get_footer();
