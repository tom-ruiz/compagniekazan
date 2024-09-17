<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/les1ymj.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="body-container">
    
    <!-- Bouton pour le menu (menu icon) -->
    <div class="menu-toggle">
        <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 80" width="20" height="20">
            <rect width="100" height="10" fill="#fff"></rect>
            <rect y="30" width="100" height="10" fill="#fff"></rect>
            <rect y="60" width="100" height="10" fill="#fff"></rect>
        </svg>
        <svg class="close-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 80" width="20" height="20">
            <line x1="10" y1="10" x2="90" y2="90" stroke="#fff" stroke-width="10"></line>
            <line x1="90" y1="10" x2="10" y2="90" stroke="#fff" stroke-width="10"></line>
        </svg>
    </div>

    <div class="nav-logo">
        <div class="nav-logo-text">CIE KAZAN</div>
    </div>

    <?php wp_nav_menu(['theme_location' => 'navigation']); ?>
            
    <main class="main">
        <div class="nav-pattern">
            <div class="nav-pattern-bg"></div>
        </div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div>
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <?php else : ?>
        <article>
            <p>Nothing to see.</p>
        </article>
        <?php endif; ?>
    </main>

    <div>
        <?php wp_footer(); ?>
    </div>
</body>

</html>
