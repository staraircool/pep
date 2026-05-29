<?php
get_header();
?>
<main id="primary" class="bg-white text-black font-sans">
    <section class="max-w-[900px] mx-auto px-6 md:px-12 py-24 text-center">
        <p class="text-swiss-red font-bold uppercase tracking-widest mb-4"><?php esc_html_e('404 Error', 'best-chem-supplies'); ?></p>
        <h1 class="text-5xl md:text-6xl font-display font-bold mb-6"><?php esc_html_e('Page not found.', 'best-chem-supplies'); ?></h1>
        <p class="text-zinc-600 text-lg mb-10"><?php esc_html_e('The page you are looking for does not exist. Try searching or return home.', 'best-chem-supplies'); ?></p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a class="bg-black text-white px-8 py-4 font-bold uppercase tracking-wider text-sm hover:bg-swiss-red transition-colors" href="<?php echo esc_url(home_url('/')); ?>">
                <?php esc_html_e('Go to homepage', 'best-chem-supplies'); ?>
            </a>
            <?php get_search_form(); ?>
        </div>
    </section>
</main>
<?php
get_footer();
