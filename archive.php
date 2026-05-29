<?php
get_header();
?>
<main id="primary" class="bg-white text-black font-sans">
    <section class="max-w-[1100px] mx-auto px-6 md:px-12 py-16">
        <header class="mb-12 border-b-2 border-black pb-6">
            <?php the_archive_title('<h1 class="text-4xl md:text-5xl font-display font-bold mb-3">', '</h1>'); ?>
            <?php the_archive_description('<p class="text-zinc-600 text-lg">', '</p>'); ?>
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
