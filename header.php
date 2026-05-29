<?php
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-white text-black'); ?>>
<?php wp_body_open(); ?>
<a class="screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'best-chem-supplies'); ?></a>
<header class="bg-white border-b-2 border-black">
    <div class="max-w-[1400px] mx-auto px-6 md:px-12 py-6 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
        <div class="flex items-center gap-4">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="text-2xl font-display font-bold tracking-wide">
                    <?php bloginfo('name'); ?>
                </a>
            <?php endif; ?>
        </div>
        <nav aria-label="<?php esc_attr_e('Primary menu', 'best-chem-supplies'); ?>">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'flex flex-wrap gap-6 text-sm font-bold uppercase tracking-wider',
                'fallback_cb'    => 'bcs_primary_menu_fallback',
            ]);
            ?>
        </nav>
    </div>
</header>
