<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Ahoj! Jmenuji se Gábi a ráda vařím. Na mém blogu narazíte na zajímavé recepty, dočtete se o nejen zdravých a chutných jídlech, ale i o cestování.">
    <?php wp_head(); ?>
</head>

<body id="page-top">

    <div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
            <a href="/" class="nav-title">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" class="logo d-inline-block align-top"
                alt="Gábi v kuchyni">
            </a>
        </div>
        <div class="nav-btn">
            <label for="nav-check">
                <img src="https://gabivkuchyni.cz/wp-content/themes/sgabivkuchyni/img/hamburger-menu.png" alt="hamburger navigation" class="hamburger">
            </label>
        </div>

        <div class="nav-links">
            <div class="left">
                <a class="link" href="<?php echo site_url('/recepty'); ?>">Recepty</a>
                <a class="link" href="<?php echo site_url('/cestovani'); ?>">Cestování</a>
                <a class="link" href="<?php echo site_url('/ze-zivota'); ?>">Ze života</a>
                <a class="link" href="<?php echo site_url('/o-mne'); ?>">O mně</a>
                <a class="link" href="<?php echo site_url('/spoluprace'); ?>">Spolupráce</a>
                <a class="link" href="<?php echo site_url('/kontakt'); ?>">Kontakt</a>
            </div>
            <div class="right">
                <div class="social">
                    <a class="fb" aria-label="Navštivte Facebook stránku Gábi v kuchyni" target="blank" href="https://www.facebook.com/GabiVkuchyni/"><i
                            class="fab fa-facebook-square"></i></a>
                    <a class="insta" aria-label="Navštivte Instagramový profil Gábi v kuchyni" target="blank" href="https://www.instagram.com/gabivkuchyni/?hl=en"><i
                            class="fab fa-instagram"></i></a>
                    <a class="mail" aria-label="Napište Gábi email" href="mailto:pospisilovagabi@gmail.com"><i
                            class="far fa-envelope"></i></a>
                </div>
                <div class="search-container">
                    <form action="/vyhledavani" method="get">
                        <label for="search_text">Vyhledat</label>
                        <input type="text" placeholder="Vyhledat.." id="search_text" name="search_text">
                        <button type="submit" title="search"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
