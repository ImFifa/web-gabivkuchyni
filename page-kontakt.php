<?php get_header(); ?>

<h1>Kontakt</h1>

<!-- section -->
<section class="container contact">
<?php
    while (have_posts()) {
        the_post();
        the_content();
    }
?>

</section>

<?php get_footer();
