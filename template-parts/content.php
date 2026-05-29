<?php
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('border-b-2 border-black pb-12'); ?>>
    <header class="mb-6">
        <?php if (is_singular()) : ?>
            <?php the_title('<h1 class="text-4xl md:text-5xl font-display font-bold mb-3">', '</h1>'); ?>
        <?php else : ?>
            <?php the_title('<h2 class="text-3xl font-display font-bold mb-3"><a class="hover:text-swiss-red transition-colors" href="' . esc_url(get_permalink()) . '">', '</a></h2>'); ?>
        <?php endif; ?>
        <?php if ('post' === get_post_type()) : ?>
            <p class="text-xs uppercase tracking-widest text-zinc-500">
                <?php echo esc_html(get_the_date()); ?>
            </p>
        <?php endif; ?>
    </header>
    <div class="space-y-4 text-zinc-700 leading-relaxed">
        <?php
        if (is_singular()) {
            the_content();
        } else {
            the_excerpt();
        }
        ?>
    </div>
    <?php if (is_singular()) : ?>
        <?php wp_link_pages(['before' => '<div class="mt-6 text-sm text-zinc-500">', 'after' => '</div>']); ?>
    <?php endif; ?>
</article>
