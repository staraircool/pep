<?php
get_header();
?>
<main id="primary" class="bg-white text-black font-sans">
    <section class="max-w-[1000px] mx-auto px-6 md:px-12 py-16">
        <?php
        while (have_posts()) :
            the_post();
            get_template_part('template-parts/content', 'page');
        endwhile;
        ?>
    </section>
</main>
<?php
get_footer();
