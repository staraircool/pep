<?php
if (!defined('ABSPATH')) {
    exit;
}

function bcs_theme_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', [
        'height'      => 80,
        'width'       => 240,
        'flex-width'  => true,
        'flex-height' => true,
    ]);
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);
    add_theme_support('woocommerce');

    register_nav_menus([
        'primary' => __('Primary Menu', 'best-chem-supplies'),
        'footer'  => __('Footer Menu', 'best-chem-supplies'),
    ]);
}
add_action('after_setup_theme', 'bcs_theme_setup');

function bcs_register_assets(): void
{
    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'bcs-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@600;700;800&display=swap',
        [],
        null
    );
    wp_enqueue_style('bcs-style', get_stylesheet_uri(), ['bcs-fonts'], $theme_version);

    wp_enqueue_script('bcs-tailwind', 'https://cdn.tailwindcss.com', [], null, false);

    $tailwind_config = <<<JS
tailwind.config = {
  theme: {
    fontFamily: {
      sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
      display: ['"Playfair Display"', 'ui-serif', 'Georgia', 'serif']
    },
    extend: {
      colors: {
        'swiss-red': '#d1111c'
      }
    }
  }
};
JS;
    wp_add_inline_script('bcs-tailwind', $tailwind_config, 'before');
}
add_action('wp_enqueue_scripts', 'bcs_register_assets');

function bcs_widgets_init(): void
{
    register_sidebar([
        'name'          => __('Sidebar', 'best-chem-supplies'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'best-chem-supplies'),
        'before_widget' => '<section id="%1$s" class="widget %2$s mb-6">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="font-display text-xl mb-3">',
        'after_title'   => '</h2>',
    ]);
}
add_action('widgets_init', 'bcs_widgets_init');

function bcs_primary_menu_fallback(): void
{
    echo '<ul class="flex flex-wrap gap-6 text-sm font-bold uppercase tracking-wider">';
    wp_list_pages(['title_li' => '']);
    echo '</ul>';
}

function bcs_footer_menu_fallback(): void
{
    echo '<ul class="flex flex-wrap gap-4 text-xs font-bold uppercase tracking-wider">';
    wp_list_pages(['title_li' => '']);
    echo '</ul>';
}
