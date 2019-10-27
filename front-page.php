<?php get_header(); ?>
<head>
<title>Gábi v kuchyni</title>
</head>



<!-- recepies -->

<section id="recepies">

    <h2>Recepty <a href="<?php echo site_url('/recepty'); ?>" class="see-more-btn">archiv</a></h2>

    <div class="postbox">
        <?php
        $recepiesPosts = new WP_Query(array(
            'post_type' => 'gk_recepty',
            'posts_per_page' => '3'
        ));

        while ($recepiesPosts->have_posts()) :
            $recepiesPosts->the_post();
        ?>
        <div class="post">
            <a href="<?php the_permalink(); ?>">
                <div class="image-box">
                    <?php the_post_thumbnail('medium-thumbnail'); ?>
                    <div class="image-overlay">Zobrazit článek</div>
                </div>
                <h3><?php echo the_title(); ?></h3>
                <div class="date"><?php echo the_date(); ?></div>
            </a>
        </div>
        <?php
        endwhile; ?>
    </div>
</section>

<!-- traveling -->

<section id="traveling">

    <h2>Cestování <a href="<?php echo site_url('/cestovani'); ?>" class="see-more-btn">archiv</a></h2>

    <div class="postbox">
        <?php $args = array(
            'post_type' => 'gk_cestovani',
            'posts_per_page' => '3'
                );

        query_posts( $args );
        while ( have_posts() ) : the_post(); ?>
            <div class="post">
                <a href="<?php the_permalink(); ?>">
                    <div class="image-box">
                        <?php the_post_thumbnail('medium-thumbnail'); ?>
                        <div class="image-overlay">Zobrazit článek</div>
                    </div>
                    <h3><?php echo the_title(); ?></h3>
                    <div class="date"><?php echo the_date(); ?></div>
                </a>
            </div>
        <?php   endwhile; ?>
    </div>

</section>

<!-- about -->

<section id="about">

    <img src="<?php echo get_template_directory_uri(); ?>/img/gabi.jpg" alt="Gábi">

    <div class="about-text">
        <div class="about-text-content">
            <h2>Ahoj, já jsem Gábi</h2>
            <p>Jsem jen obyčejná holka, která se rozhodla změnit svůj život. Ráda vařím a peču ve své milované kuchyni v souladu se zdravým životním stylem. Miluju kavárny, co mají kouzlo. Miluju bistra, kde myslí na zdraví lidí. Miluju zabalit si svůj batoh a vyrazit kamkoliv. Miluju překvapení. Miluju a jsem milována.</p>
            <a href="<?php echo site_url('/o-mne'); ?>" class="about-btn">O mně</a>
        </div>
    </div>

</section>

<!-- instagram -->

<section id="instagram">

    <h2>Můj Instagram</h2>

    <div class="insta-grid">
    </div>

    <div class="hashtag">#gabivkuchyni</div>

</section>


<?php get_footer(); ?>
