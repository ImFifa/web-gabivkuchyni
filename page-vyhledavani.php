<?php get_header();

if ($_GET['search_text'] && !empty($_GET['search_text'])) {
    $text = $_GET['search_text'];
}

?>

<!-- section -->
<section class="container search">
<?php
if (!empty($text)) {
?>
    <h3>Výsledky hledání pro: <?php echo $text ?></h3>
<?php
} else {
?>
    <h3>Nezadali jste žádný výraz</h3>
<?php
}
?>
<?php

    $args = array(
        'posts_per_page' => -1,
        's' => $text

    );
    $query = new WP_Query($args);
    if (!empty($text)) {
        if ($query -> have_posts()) {
            while ($query -> have_posts()) {
                $query -> the_post();
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
            }
        } else {
            echo '<span>Je nám líto, zadaný výraz se nevyskytuje v žádném příspěvku.</span>';
        }
    }
?>
</section>

<?php get_footer();
