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
    <div class="nav-logo">

</div>

                <?php wp_nav_menu(['theme_location' => 'navigation']); ?>
            
       
<main class="main">
    <div class="nav-pattern">

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
</body>

</html>
