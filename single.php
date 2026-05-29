<?php
get_header();
?>
<main id="primary" class="bg-white text-black font-sans">
    <section class="max-w-[900px] mx-auto px-6 md:px-12 py-16">
        <?php
        while (have_posts()) :
            the_post();
            get_template_part('template-parts/content', get_post_type());
            if (comments_open() || get_comments_number()) {
                comments_template();
            }
        endwhile;
        ?>
    </section>
</main>
<?php
get_footer();
