<?php
get_header();
?>
<main id="primary" class="bg-white text-black font-sans">
    <section class="max-w-[1000px] mx-auto px-6 md:px-12 py-16">
        <?php if (have_posts()) : ?>
            <div class="flex flex-col gap-12">
                <?php
                while (have_posts()) :
                    the_post();
                    get_template_part('template-parts/content', get_post_type());
                endwhile;
                ?>
            </div>
            <div class="mt-12">
                <?php
                the_posts_navigation([
                    'prev_text' => __('Older posts', 'best-chem-supplies'),
                    'next_text' => __('Newer posts', 'best-chem-supplies'),
                ]);
                ?>
            </div>
        <?php else : ?>
            <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
    </section>
</main>
<?php
get_footer();
