<?php
get_header();
?>
<main id="primary" class="bg-white text-black font-sans">
    <section class="max-w-[1100px] mx-auto px-6 md:px-12 py-16">
        <header class="mb-12 border-b-2 border-black pb-6">
            <h1 class="text-4xl md:text-5xl font-display font-bold">
                <?php
                printf(
                    esc_html__('Search results for: %s', 'best-chem-supplies'),
                    '<span class="text-swiss-red">' . esc_html(get_search_query()) . '</span>'
                );
                ?>
            </h1>
        </header>
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
                <?php the_posts_navigation(); ?>
            </div>
        <?php else : ?>
            <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
    </section>
</main>
<?php
get_footer();
