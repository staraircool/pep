<?php
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('border-b-2 border-black pb-12'); ?>>
    <header class="mb-6">
        <?php the_title('<h1 class="text-4xl md:text-5xl font-display font-bold">', '</h1>'); ?>
    </header>
    <div class="space-y-4 text-zinc-700 leading-relaxed">
        <?php the_content(); ?>
    </div>
    <?php wp_link_pages(['before' => '<div class="mt-6 text-sm text-zinc-500">', 'after' => '</div>']); ?>
</article>
