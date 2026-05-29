<?php
?>
<form role="search" method="get" class="flex flex-col sm:flex-row gap-3 justify-center" action="<?php echo esc_url(home_url('/')); ?>">
    <label class="sr-only" for="search-field"><?php esc_html_e('Search for:', 'best-chem-supplies'); ?></label>
    <input
        type="search"
        id="search-field"
        class="border-2 border-black px-4 py-3 w-full sm:w-72 text-sm"
        placeholder="<?php esc_attr_e('Search...', 'best-chem-supplies'); ?>"
        value="<?php echo get_search_query(); ?>"
        name="s"
    />
    <button type="submit" class="bg-black text-white px-6 py-3 font-bold uppercase tracking-wider text-xs hover:bg-swiss-red transition-colors">
        <?php esc_html_e('Search', 'best-chem-supplies'); ?>
    </button>
</form>
