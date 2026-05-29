<?php
?>
<footer class="bg-black text-white border-t-2 border-zinc-800">
    <div class="max-w-[1400px] mx-auto px-6 md:px-12 py-16 grid grid-cols-1 md:grid-cols-3 gap-10">
        <div>
            <p class="text-sm font-bold uppercase tracking-wider text-zinc-400 mb-4"><?php esc_html_e('About', 'best-chem-supplies'); ?></p>
            <p class="text-zinc-300 leading-relaxed">
                <?php esc_html_e('A clean, monochrome-ready theme built for precision supply workflows and WooCommerce expansion.', 'best-chem-supplies'); ?>
            </p>
        </div>
        <div>
            <p class="text-sm font-bold uppercase tracking-wider text-zinc-400 mb-4"><?php esc_html_e('Explore', 'best-chem-supplies'); ?></p>
            <nav aria-label="<?php esc_attr_e('Footer menu', 'best-chem-supplies'); ?>">
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer',
                    'container'      => false,
                    'menu_class'     => 'flex flex-col gap-3 text-sm font-bold uppercase tracking-wider',
                    'fallback_cb'    => 'bcs_footer_menu_fallback',
                ]);
                ?>
            </nav>
        </div>
        <div>
            <p class="text-sm font-bold uppercase tracking-wider text-zinc-400 mb-4"><?php esc_html_e('Contact', 'best-chem-supplies'); ?></p>
            <p class="text-zinc-300 text-sm"><?php esc_html_e('Email: bestchemsupplies@gmail.com', 'best-chem-supplies'); ?></p>
            <p class="text-zinc-300 text-sm"><?php esc_html_e('Available for qualified buyers.', 'best-chem-supplies'); ?></p>
        </div>
    </div>
    <div class="border-t border-zinc-800 py-6 text-center text-xs uppercase tracking-widest text-zinc-500">
        <?php echo esc_html(sprintf(__('© %1$s %2$s. All rights reserved.', 'best-chem-supplies'), date_i18n('Y'), get_bloginfo('name'))); ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
