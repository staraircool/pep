<?php
$bcs_asset_uri = get_template_directory_uri() . '/assets';
$bcs_video_primary = $bcs_asset_uri . '/8533369-uhd_2160_3840_30fps (1).mp4';
$bcs_video_secondary = $bcs_asset_uri . '/8863362-hd_1080_1920_30fps.mp4';
get_header();
?>
<main id="primary" class="bg-white text-zinc-900 font-sans">

    <!-- Hero -->
    <section class="bg-white">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12 py-20 lg:py-28 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-7">
                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-swiss-red mb-6">
                    <?php esc_html_e('Precision Supply Desk', 'best-chem-supplies'); ?>
                </p>
                <h1 class="font-display font-bold text-5xl md:text-6xl leading-tight mb-6">
                    <?php esc_html_e('Plain, fast, and designed for qualified buyers.', 'best-chem-supplies'); ?>
                </h1>
                <p class="text-zinc-600 text-lg md:text-xl leading-relaxed max-w-2xl mb-10">
                    <?php esc_html_e('A clean storefront that removes friction, keeps product access controlled, and makes every request feel precise.', 'best-chem-supplies'); ?>
                </p>
                <div class="flex flex-wrap gap-4 mb-8">
                    <a class="bg-black text-white px-8 py-4 font-semibold uppercase tracking-wider text-xs hover:bg-zinc-800 transition-colors duration-300" href="<?php echo esc_url(home_url('/shop/')); ?>">
                        <?php esc_html_e('Browse categories', 'best-chem-supplies'); ?>
                    </a>
                    <a class="border border-zinc-300 text-zinc-800 px-8 py-4 font-semibold uppercase tracking-wider text-xs hover:border-zinc-500 transition-colors duration-300" href="mailto:bestchemsupplies@gmail.com">
                        <?php esc_html_e('Request availability', 'best-chem-supplies'); ?>
                    </a>
                </div>
                <div class="flex flex-wrap gap-6 text-xs font-semibold uppercase tracking-widest text-zinc-500">
                    <span class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-swiss-red rounded-full"></span>
                        <?php esc_html_e('Qualified buyers only', 'best-chem-supplies'); ?>
                    </span>
                    <span class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-swiss-red rounded-full"></span>
                        <?php esc_html_e('Documentation ready', 'best-chem-supplies'); ?>
                    </span>
                    <span class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-swiss-red rounded-full"></span>
                        <?php esc_html_e('Fast request reviews', 'best-chem-supplies'); ?>
                    </span>
                </div>
            </div>
            <div class="lg:col-span-5">
                <div class="bg-zinc-50 border border-zinc-200 rounded-3xl p-6">
                    <img class="w-full h-[520px] object-cover rounded-2xl" src="<?php echo esc_url($bcs_asset_uri . '/hero-image.jpg'); ?>" alt="<?php esc_attr_e('Laboratory overview', 'best-chem-supplies'); ?>">
                    <div class="mt-6 flex items-center justify-between text-sm text-zinc-600">
                        <span class="font-semibold uppercase tracking-widest text-xs text-swiss-red"><?php esc_html_e('Minimal design', 'best-chem-supplies'); ?></span>
                        <span><?php esc_html_e('Neutral palette, high clarity', 'best-chem-supplies'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Intro -->
    <section class="bg-white border-t border-zinc-100">
        <div class="max-w-[1200px] mx-auto px-6 md:px-12 py-16 text-center">
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-swiss-red mb-4">
                <?php esc_html_e('Introduction', 'best-chem-supplies'); ?>
            </p>
            <h2 class="font-display font-semibold text-4xl md:text-5xl mb-6">
                <?php esc_html_e('Plain layout, strong structure, clear action.', 'best-chem-supplies'); ?>
            </h2>
            <p class="text-zinc-600 text-lg max-w-3xl mx-auto">
                <?php esc_html_e('Every section is built to answer a buyer question quickly and move them toward the right category or request path.', 'best-chem-supplies'); ?>
            </p>
        </div>
    </section>

    <!-- Trust Bar -->
    <section class="bg-zinc-50 border-t border-zinc-100 border-b border-zinc-100">
        <div class="max-w-[1200px] mx-auto px-6 md:px-12 py-10">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-6 text-center text-xs uppercase tracking-widest text-zinc-500">
                <span><?php esc_html_e('ISO-aligned', 'best-chem-supplies'); ?></span>
                <span><?php esc_html_e('Safe handling', 'best-chem-supplies'); ?></span>
                <span><?php esc_html_e('Lot tracking', 'best-chem-supplies'); ?></span>
                <span><?php esc_html_e('Verified sources', 'best-chem-supplies'); ?></span>
                <span><?php esc_html_e('Fast response', 'best-chem-supplies'); ?></span>
            </div>
        </div>
    </section>

    <!-- Metrics -->
    <section class="bg-white">
        <div class="max-w-[1200px] mx-auto px-6 md:px-12 py-16 grid grid-cols-1 md:grid-cols-4 gap-10">
            <div class="text-center">
                <p class="text-4xl font-display font-semibold text-zinc-900">01</p>
                <p class="text-xs uppercase tracking-widest text-zinc-500 mt-2"><?php esc_html_e('Request intake', 'best-chem-supplies'); ?></p>
            </div>
            <div class="text-center">
                <p class="text-4xl font-display font-semibold text-zinc-900">02</p>
                <p class="text-xs uppercase tracking-widest text-zinc-500 mt-2"><?php esc_html_e('Qualification review', 'best-chem-supplies'); ?></p>
            </div>
            <div class="text-center">
                <p class="text-4xl font-display font-semibold text-zinc-900">03</p>
                <p class="text-xs uppercase tracking-widest text-zinc-500 mt-2"><?php esc_html_e('Availability check', 'best-chem-supplies'); ?></p>
            </div>
            <div class="text-center">
                <p class="text-4xl font-display font-semibold text-zinc-900">04</p>
                <p class="text-xs uppercase tracking-widest text-zinc-500 mt-2"><?php esc_html_e('Controlled dispatch', 'best-chem-supplies'); ?></p>
            </div>
        </div>
    </section>

    <!-- Highlights -->
    <section class="bg-zinc-50 border-t border-zinc-100">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12 py-20">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-8 mb-12">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-swiss-red mb-4">
                        <?php esc_html_e('Highlights', 'best-chem-supplies'); ?>
                    </p>
                    <h2 class="font-display font-semibold text-4xl md:text-5xl">
                        <?php esc_html_e('Clean sections. Fast decisions.', 'best-chem-supplies'); ?>
                    </h2>
                </div>
                <p class="text-zinc-600 text-lg max-w-xl">
                    <?php esc_html_e('A simple grid that keeps everything readable while staying visually calm.', 'best-chem-supplies'); ?>
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white border border-zinc-200 rounded-2xl p-6">
                    <p class="text-xs uppercase tracking-widest text-swiss-red mb-3"><?php esc_html_e('Focus', 'best-chem-supplies'); ?></p>
                    <h3 class="font-display text-2xl font-semibold mb-4"><?php esc_html_e('Minimal content blocks', 'best-chem-supplies'); ?></h3>
                    <p class="text-zinc-600"><?php esc_html_e('Each block answers one question so the user stays oriented.', 'best-chem-supplies'); ?></p>
                </div>
                <div class="bg-white border border-zinc-200 rounded-2xl p-6">
                    <p class="text-xs uppercase tracking-widest text-swiss-red mb-3"><?php esc_html_e('Speed', 'best-chem-supplies'); ?></p>
                    <h3 class="font-display text-2xl font-semibold mb-4"><?php esc_html_e('Straight to category', 'best-chem-supplies'); ?></h3>
                    <p class="text-zinc-600"><?php esc_html_e('Primary actions always point to product grouping or request forms.', 'best-chem-supplies'); ?></p>
                </div>
                <div class="bg-white border border-zinc-200 rounded-2xl p-6">
                    <p class="text-xs uppercase tracking-widest text-swiss-red mb-3"><?php esc_html_e('Clarity', 'best-chem-supplies'); ?></p>
                    <h3 class="font-display text-2xl font-semibold mb-4"><?php esc_html_e('Plain text hierarchy', 'best-chem-supplies'); ?></h3>
                    <p class="text-zinc-600"><?php esc_html_e('Large typography and muted color keep attention on the essentials.', 'best-chem-supplies'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process -->
    <section class="bg-white border-t border-zinc-100">
        <div class="max-w-[1200px] mx-auto px-6 md:px-12 py-20">
            <div class="mb-12">
                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-swiss-red mb-4">
                    <?php esc_html_e('Process', 'best-chem-supplies'); ?>
                </p>
                <h2 class="font-display font-semibold text-4xl md:text-5xl">
                    <?php esc_html_e('A controlled intake, step by step.', 'best-chem-supplies'); ?>
                </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="border border-zinc-200 rounded-2xl p-6">
                    <p class="text-sm font-semibold text-zinc-900 mb-2"><?php esc_html_e('Step 01', 'best-chem-supplies'); ?></p>
                    <h3 class="font-display text-2xl font-semibold mb-3"><?php esc_html_e('Request details', 'best-chem-supplies'); ?></h3>
                    <p class="text-zinc-600"><?php esc_html_e('We capture intended use, volume, and timeline before confirming availability.', 'best-chem-supplies'); ?></p>
                </div>
                <div class="border border-zinc-200 rounded-2xl p-6">
                    <p class="text-sm font-semibold text-zinc-900 mb-2"><?php esc_html_e('Step 02', 'best-chem-supplies'); ?></p>
                    <h3 class="font-display text-2xl font-semibold mb-3"><?php esc_html_e('Qualification review', 'best-chem-supplies'); ?></h3>
                    <p class="text-zinc-600"><?php esc_html_e('Every inquiry is reviewed to ensure compliance with lawful and safe usage.', 'best-chem-supplies'); ?></p>
                </div>
                <div class="border border-zinc-200 rounded-2xl p-6">
                    <p class="text-sm font-semibold text-zinc-900 mb-2"><?php esc_html_e('Step 03', 'best-chem-supplies'); ?></p>
                    <h3 class="font-display text-2xl font-semibold mb-3"><?php esc_html_e('Supply match', 'best-chem-supplies'); ?></h3>
                    <p class="text-zinc-600"><?php esc_html_e('We confirm the right grade, documentation, and handling notes before fulfillment.', 'best-chem-supplies'); ?></p>
                </div>
                <div class="border border-zinc-200 rounded-2xl p-6">
                    <p class="text-sm font-semibold text-zinc-900 mb-2"><?php esc_html_e('Step 04', 'best-chem-supplies'); ?></p>
                    <h3 class="font-display text-2xl font-semibold mb-3"><?php esc_html_e('Dispatch and follow-up', 'best-chem-supplies'); ?></h3>
                    <p class="text-zinc-600"><?php esc_html_e('Orders ship with documentation and clear updates throughout transit.', 'best-chem-supplies'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Gallery -->
    <section class="bg-zinc-50 border-t border-zinc-100 border-b border-zinc-100">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12 py-20">
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8 mb-12">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-swiss-red mb-4">
                        <?php esc_html_e('Motion', 'best-chem-supplies'); ?>
                    </p>
                    <h2 class="font-display font-semibold text-4xl md:text-5xl">
                        <?php esc_html_e('Vertical video, full-frame display.', 'best-chem-supplies'); ?>
                    </h2>
                </div>
                <p class="text-zinc-600 text-lg max-w-xl">
                    <?php esc_html_e('Vertical footage is presented without cropping so the entire frame remains visible.', 'best-chem-supplies'); ?>
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="bg-white border border-zinc-200 rounded-3xl p-6">
                    <div class="bg-zinc-100 rounded-2xl overflow-hidden h-[520px] md:h-[640px] flex items-center justify-center">
                        <video class="w-full h-full object-contain" autoplay muted loop playsinline preload="metadata">
                            <source src="<?php echo esc_url($bcs_video_primary); ?>" type="video/mp4">
                        </video>
                    </div>
                    <div class="mt-6 flex items-center justify-between text-sm text-zinc-600">
                        <span class="uppercase tracking-widest text-xs text-swiss-red"><?php esc_html_e('Full frame', 'best-chem-supplies'); ?></span>
                        <span><?php esc_html_e('Primary lab motion', 'best-chem-supplies'); ?></span>
                    </div>
                </div>
                <div class="bg-white border border-zinc-200 rounded-3xl p-6">
                    <div class="bg-zinc-100 rounded-2xl overflow-hidden h-[520px] md:h-[640px] flex items-center justify-center">
                        <video class="w-full h-full object-contain" autoplay muted loop playsinline preload="metadata">
                            <source src="<?php echo esc_url($bcs_video_secondary); ?>" type="video/mp4">
                        </video>
                    </div>
                    <div class="mt-6 flex items-center justify-between text-sm text-zinc-600">
                        <span class="uppercase tracking-widest text-xs text-swiss-red"><?php esc_html_e('Full frame', 'best-chem-supplies'); ?></span>
                        <span><?php esc_html_e('Secondary lab motion', 'best-chem-supplies'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Story -->
    <section class="bg-white">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12 py-20 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-swiss-red mb-4">
                    <?php esc_html_e('Story', 'best-chem-supplies'); ?>
                </p>
                <h2 class="font-display font-semibold text-4xl md:text-5xl mb-6">
                    <?php esc_html_e('Images keep the tone calm and professional.', 'best-chem-supplies'); ?>
                </h2>
                <p class="text-zinc-600 text-lg mb-8">
                    <?php esc_html_e('Balanced imagery keeps the experience clean while reinforcing the technical focus.', 'best-chem-supplies'); ?>
                </p>
                <ul class="space-y-4 text-zinc-600">
                    <li class="flex items-start gap-3">
                        <span class="mt-2 w-2 h-2 bg-swiss-red rounded-full"></span>
                        <?php esc_html_e('Neutral lighting and soft backgrounds for clarity.', 'best-chem-supplies'); ?>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-2 w-2 h-2 bg-swiss-red rounded-full"></span>
                        <?php esc_html_e('Focused compositions that feel controlled, not busy.', 'best-chem-supplies'); ?>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-2 w-2 h-2 bg-swiss-red rounded-full"></span>
                        <?php esc_html_e('Consistent subject matter aligned with lab workflows.', 'best-chem-supplies'); ?>
                    </li>
                </ul>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <img class="w-full h-[320px] object-cover rounded-2xl" src="<?php echo esc_url($bcs_asset_uri . '/woman-laboratory-doing-experiments.jpg'); ?>" alt="<?php esc_attr_e('Lab researcher', 'best-chem-supplies'); ?>">
                <img class="w-full h-[320px] object-cover rounded-2xl" src="<?php echo esc_url($bcs_asset_uri . '/laboratory-glassware-with-green-liquid-arrangement.jpg'); ?>" alt="<?php esc_attr_e('Lab glassware', 'best-chem-supplies'); ?>">
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="bg-zinc-50 border-t border-zinc-100 border-b border-zinc-100">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12 py-20">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-8 mb-12">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-swiss-red mb-4">
                        <?php esc_html_e('Categories', 'best-chem-supplies'); ?>
                    </p>
                    <h2 class="font-display font-semibold text-4xl md:text-5xl">
                        <?php esc_html_e('Choose the right supply path.', 'best-chem-supplies'); ?>
                    </h2>
                </div>
                <p class="text-zinc-600 text-lg max-w-xl">
                    <?php esc_html_e('Plain cards guide buyers into WooCommerce without unnecessary noise.', 'best-chem-supplies'); ?>
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <article class="bg-white border border-zinc-200 rounded-2xl p-6 flex flex-col">
                    <img class="w-full h-40 object-cover rounded-xl mb-5" src="<?php echo esc_url($bcs_asset_uri . '/laboratory-glassware-with-green-liquid-arrangement.jpg'); ?>" alt="<?php esc_attr_e('Analytical reagents', 'best-chem-supplies'); ?>">
                    <h3 class="font-display text-xl font-semibold mb-3"><?php esc_html_e('Analytical Reagents', 'best-chem-supplies'); ?></h3>
                    <p class="text-sm text-zinc-600 mb-6 flex-grow"><?php esc_html_e('Testing and analysis reagents for precision workflows.', 'best-chem-supplies'); ?></p>
                    <a class="text-xs font-semibold uppercase tracking-wider text-swiss-red" href="<?php echo esc_url(home_url('/product-category/analytical-reagents/')); ?>">
                        <?php esc_html_e('Explore', 'best-chem-supplies'); ?>
                    </a>
                </article>
                <article class="bg-white border border-zinc-200 rounded-2xl p-6 flex flex-col">
                    <img class="w-full h-40 object-cover rounded-xl mb-5" src="<?php echo esc_url($bcs_asset_uri . '/close-up-hand-holding-tube-with-solution.jpg'); ?>" alt="<?php esc_attr_e('Solvents and solutions', 'best-chem-supplies'); ?>">
                    <h3 class="font-display text-xl font-semibold mb-3"><?php esc_html_e('Solvents & Solutions', 'best-chem-supplies'); ?></h3>
                    <p class="text-sm text-zinc-600 mb-6 flex-grow"><?php esc_html_e('Prepared solutions and solvent stock for approved use.', 'best-chem-supplies'); ?></p>
                    <a class="text-xs font-semibold uppercase tracking-wider text-swiss-red" href="<?php echo esc_url(home_url('/product-category/solvents-solutions/')); ?>">
                        <?php esc_html_e('Explore', 'best-chem-supplies'); ?>
                    </a>
                </article>
                <article class="bg-white border border-zinc-200 rounded-2xl p-6 flex flex-col">
                    <img class="w-full h-40 object-cover rounded-xl mb-5" src="<?php echo esc_url($bcs_asset_uri . '/woman-laboratory-doing-experiments.jpg'); ?>" alt="<?php esc_attr_e('Lab equipment', 'best-chem-supplies'); ?>">
                    <h3 class="font-display text-xl font-semibold mb-3"><?php esc_html_e('Lab Equipment', 'best-chem-supplies'); ?></h3>
                    <p class="text-sm text-zinc-600 mb-6 flex-grow"><?php esc_html_e('Practical equipment that supports research routines.', 'best-chem-supplies'); ?></p>
                    <a class="text-xs font-semibold uppercase tracking-wider text-swiss-red" href="<?php echo esc_url(home_url('/product-category/lab-equipment/')); ?>">
                        <?php esc_html_e('Explore', 'best-chem-supplies'); ?>
                    </a>
                </article>
                <article class="bg-white border border-zinc-200 rounded-2xl p-6 flex flex-col">
                    <img class="w-full h-40 object-cover rounded-xl mb-5" src="<?php echo esc_url($bcs_asset_uri . '/portrait-highly-professional-medical-worker.jpg'); ?>" alt="<?php esc_attr_e('Specialty chemicals', 'best-chem-supplies'); ?>">
                    <h3 class="font-display text-xl font-semibold mb-3"><?php esc_html_e('Specialty Chemicals', 'best-chem-supplies'); ?></h3>
                    <p class="text-sm text-zinc-600 mb-6 flex-grow"><?php esc_html_e('Special-use supply for defined research requirements.', 'best-chem-supplies'); ?></p>
                    <a class="text-xs font-semibold uppercase tracking-wider text-swiss-red" href="<?php echo esc_url(home_url('/product-category/specialty-chemicals/')); ?>">
                        <?php esc_html_e('Explore', 'best-chem-supplies'); ?>
                    </a>
                </article>
            </div>
        </div>
    </section>

    <!-- Compliance -->
    <section class="bg-white">
        <div class="max-w-[1200px] mx-auto px-6 md:px-12 py-20">
            <div class="text-center mb-12">
                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-swiss-red mb-4">
                    <?php esc_html_e('Compliance', 'best-chem-supplies'); ?>
                </p>
                <h2 class="font-display font-semibold text-4xl md:text-5xl">
                    <?php esc_html_e('Safety and documentation built in.', 'best-chem-supplies'); ?>
                </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="border border-zinc-200 rounded-2xl p-6">
                    <h3 class="font-display text-2xl font-semibold mb-4"><?php esc_html_e('Verification', 'best-chem-supplies'); ?></h3>
                    <p class="text-zinc-600"><?php esc_html_e('We verify source, grade, and intended use before confirming supply.', 'best-chem-supplies'); ?></p>
                </div>
                <div class="border border-zinc-200 rounded-2xl p-6">
                    <h3 class="font-display text-2xl font-semibold mb-4"><?php esc_html_e('Traceability', 'best-chem-supplies'); ?></h3>
                    <p class="text-zinc-600"><?php esc_html_e('Lot numbers and documentation remain linked to every order.', 'best-chem-supplies'); ?></p>
                </div>
                <div class="border border-zinc-200 rounded-2xl p-6">
                    <h3 class="font-display text-2xl font-semibold mb-4"><?php esc_html_e('Handling', 'best-chem-supplies'); ?></h3>
                    <p class="text-zinc-600"><?php esc_html_e('Packaging, labeling, and storage notes are provided with each shipment.', 'best-chem-supplies'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Documentation -->
    <section class="bg-zinc-50 border-t border-zinc-100 border-b border-zinc-100">
        <div class="max-w-[1200px] mx-auto px-6 md:px-12 py-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-swiss-red mb-4">
                        <?php esc_html_e('Documentation', 'best-chem-supplies'); ?>
                    </p>
                    <h2 class="font-display font-semibold text-4xl md:text-5xl mb-6">
                        <?php esc_html_e('Every order ships with the right paperwork.', 'best-chem-supplies'); ?>
                    </h2>
                    <p class="text-zinc-600 text-lg mb-8">
                        <?php esc_html_e('We keep documentation minimal but complete, so lab teams can move fast without risk.', 'best-chem-supplies'); ?>
                    </p>
                    <ul class="space-y-4 text-zinc-600">
                        <li class="flex items-start gap-3">
                            <span class="mt-2 w-2 h-2 bg-swiss-red rounded-full"></span>
                            <?php esc_html_e('Specification sheets available on request.', 'best-chem-supplies'); ?>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-2 w-2 h-2 bg-swiss-red rounded-full"></span>
                            <?php esc_html_e('Batch and lot references included where possible.', 'best-chem-supplies'); ?>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-2 w-2 h-2 bg-swiss-red rounded-full"></span>
                            <?php esc_html_e('Shipping notes tailored to storage and handling.', 'best-chem-supplies'); ?>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-2 w-2 h-2 bg-swiss-red rounded-full"></span>
                            <?php esc_html_e('Clear contact path for post-delivery support.', 'best-chem-supplies'); ?>
                        </li>
                    </ul>
                </div>
                <div class="bg-white border border-zinc-200 rounded-3xl p-6">
                    <img class="w-full h-[420px] object-cover rounded-2xl" src="<?php echo esc_url($bcs_asset_uri . '/close-up-hand-holding-tube-with-solution.jpg'); ?>" alt="<?php esc_attr_e('Documentation kit', 'best-chem-supplies'); ?>">
                    <div class="mt-6 text-sm text-zinc-600">
                        <?php esc_html_e('Documentation is kept concise, readable, and aligned to each order.', 'best-chem-supplies'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Use Cases -->
    <section class="bg-white">
        <div class="max-w-[1200px] mx-auto px-6 md:px-12 py-20">
            <div class="text-center mb-12">
                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-swiss-red mb-4">
                    <?php esc_html_e('Use Cases', 'best-chem-supplies'); ?>
                </p>
                <h2 class="font-display font-semibold text-4xl md:text-5xl">
                    <?php esc_html_e('Designed for real lab workflows.', 'best-chem-supplies'); ?>
                </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="border border-zinc-200 rounded-2xl p-6">
                    <h3 class="font-display text-2xl font-semibold mb-4"><?php esc_html_e('Analytical labs', 'best-chem-supplies'); ?></h3>
                    <p class="text-zinc-600"><?php esc_html_e('Supply access that matches testing schedules and regulatory needs.', 'best-chem-supplies'); ?></p>
                </div>
                <div class="border border-zinc-200 rounded-2xl p-6">
                    <h3 class="font-display text-2xl font-semibold mb-4"><?php esc_html_e('Research teams', 'best-chem-supplies'); ?></h3>
                    <p class="text-zinc-600"><?php esc_html_e('Specialty supply requests routed through a controlled workflow.', 'best-chem-supplies'); ?></p>
                </div>
                <div class="border border-zinc-200 rounded-2xl p-6">
                    <h3 class="font-display text-2xl font-semibold mb-4"><?php esc_html_e('Industrial buyers', 'best-chem-supplies'); ?></h3>
                    <p class="text-zinc-600"><?php esc_html_e('Documented sourcing for routine production and maintenance needs.', 'best-chem-supplies'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Supply Desk -->
    <section class="bg-zinc-50 border-t border-zinc-100 border-b border-zinc-100">
        <div class="max-w-[1200px] mx-auto px-6 md:px-12 py-20">
            <div class="mb-12">
                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-swiss-red mb-4">
                    <?php esc_html_e('Supply Desk', 'best-chem-supplies'); ?>
                </p>
                <h2 class="font-display font-semibold text-4xl md:text-5xl">
                    <?php esc_html_e('A calm workflow from request to delivery.', 'best-chem-supplies'); ?>
                </h2>
            </div>
            <div class="space-y-6">
                <div class="bg-white border border-zinc-200 rounded-2xl p-6 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                    <div>
                        <p class="text-xs uppercase tracking-widest text-swiss-red mb-2"><?php esc_html_e('Stage 01', 'best-chem-supplies'); ?></p>
                        <h3 class="font-display text-2xl font-semibold"><?php esc_html_e('Request intake', 'best-chem-supplies'); ?></h3>
                    </div>
                    <p class="text-zinc-600 max-w-xl"><?php esc_html_e('We gather specs, quantity, and timelines before confirming availability.', 'best-chem-supplies'); ?></p>
                </div>
                <div class="bg-white border border-zinc-200 rounded-2xl p-6 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                    <div>
                        <p class="text-xs uppercase tracking-widest text-swiss-red mb-2"><?php esc_html_e('Stage 02', 'best-chem-supplies'); ?></p>
                        <h3 class="font-display text-2xl font-semibold"><?php esc_html_e('Review and approval', 'best-chem-supplies'); ?></h3>
                    </div>
                    <p class="text-zinc-600 max-w-xl"><?php esc_html_e('Qualification checks protect against improper or unclear usage.', 'best-chem-supplies'); ?></p>
                </div>
                <div class="bg-white border border-zinc-200 rounded-2xl p-6 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                    <div>
                        <p class="text-xs uppercase tracking-widest text-swiss-red mb-2"><?php esc_html_e('Stage 03', 'best-chem-supplies'); ?></p>
                        <h3 class="font-display text-2xl font-semibold"><?php esc_html_e('Supply confirmation', 'best-chem-supplies'); ?></h3>
                    </div>
                    <p class="text-zinc-600 max-w-xl"><?php esc_html_e('We confirm stock, lead time, and documentation before dispatch.', 'best-chem-supplies'); ?></p>
                </div>
                <div class="bg-white border border-zinc-200 rounded-2xl p-6 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                    <div>
                        <p class="text-xs uppercase tracking-widest text-swiss-red mb-2"><?php esc_html_e('Stage 04', 'best-chem-supplies'); ?></p>
                        <h3 class="font-display text-2xl font-semibold"><?php esc_html_e('Packing and dispatch', 'best-chem-supplies'); ?></h3>
                    </div>
                    <p class="text-zinc-600 max-w-xl"><?php esc_html_e('Orders are prepared for stability and transport requirements.', 'best-chem-supplies'); ?></p>
                </div>
                <div class="bg-white border border-zinc-200 rounded-2xl p-6 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                    <div>
                        <p class="text-xs uppercase tracking-widest text-swiss-red mb-2"><?php esc_html_e('Stage 05', 'best-chem-supplies'); ?></p>
                        <h3 class="font-display text-2xl font-semibold"><?php esc_html_e('Delivery updates', 'best-chem-supplies'); ?></h3>
                    </div>
                    <p class="text-zinc-600 max-w-xl"><?php esc_html_e('Tracking and delivery confirmation keep teams informed.', 'best-chem-supplies'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="bg-white">
        <div class="max-w-[1200px] mx-auto px-6 md:px-12 py-20">
            <div class="text-center mb-12">
                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-swiss-red mb-4">
                    <?php esc_html_e('Feedback', 'best-chem-supplies'); ?>
                </p>
                <h2 class="font-display font-semibold text-4xl md:text-5xl">
                    <?php esc_html_e('Clear, professional, reliable.', 'best-chem-supplies'); ?>
                </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="border border-zinc-200 rounded-2xl p-6">
                    <p class="text-zinc-600 mb-6"><?php esc_html_e('“The request flow is fast and the documentation arrives exactly as promised.”', 'best-chem-supplies'); ?></p>
                    <p class="text-sm font-semibold text-zinc-900"><?php esc_html_e('Lab Manager, NYC', 'best-chem-supplies'); ?></p>
                </div>
                <div class="border border-zinc-200 rounded-2xl p-6">
                    <p class="text-zinc-600 mb-6"><?php esc_html_e('“The site is clean and straightforward. We always know where to go next.”', 'best-chem-supplies'); ?></p>
                    <p class="text-sm font-semibold text-zinc-900"><?php esc_html_e('Research Director, Boston', 'best-chem-supplies'); ?></p>
                </div>
                <div class="border border-zinc-200 rounded-2xl p-6">
                    <p class="text-zinc-600 mb-6"><?php esc_html_e('“Qualification checks feel professional and keep everything controlled.”', 'best-chem-supplies'); ?></p>
                    <p class="text-sm font-semibold text-zinc-900"><?php esc_html_e('Operations Lead, Denver', 'best-chem-supplies'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="bg-zinc-50 border-t border-zinc-100 border-b border-zinc-100">
        <div class="max-w-[1200px] mx-auto px-6 md:px-12 py-20">
            <div class="text-center mb-12">
                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-swiss-red mb-4">
                    <?php esc_html_e('FAQ', 'best-chem-supplies'); ?>
                </p>
                <h2 class="font-display font-semibold text-4xl md:text-5xl">
                    <?php esc_html_e('Answers, kept short and clear.', 'best-chem-supplies'); ?>
                </h2>
            </div>
            <div class="space-y-4">
                <details class="bg-white border border-zinc-200 rounded-2xl p-6">
                    <summary class="font-semibold text-lg cursor-pointer">
                        <?php esc_html_e('Do you ship internationally?', 'best-chem-supplies'); ?>
                    </summary>
                    <p class="mt-3 text-zinc-600"><?php esc_html_e('International shipments are reviewed case by case based on product and destination.', 'best-chem-supplies'); ?></p>
                </details>
                <details class="bg-white border border-zinc-200 rounded-2xl p-6">
                    <summary class="font-semibold text-lg cursor-pointer">
                        <?php esc_html_e('Can I request specification sheets?', 'best-chem-supplies'); ?>
                    </summary>
                    <p class="mt-3 text-zinc-600"><?php esc_html_e('Yes. We provide specification sheets when available from the supplier.', 'best-chem-supplies'); ?></p>
                </details>
                <details class="bg-white border border-zinc-200 rounded-2xl p-6">
                    <summary class="font-semibold text-lg cursor-pointer">
                        <?php esc_html_e('How fast is the request review?', 'best-chem-supplies'); ?>
                    </summary>
                    <p class="mt-3 text-zinc-600"><?php esc_html_e('Most requests are reviewed within one business day.', 'best-chem-supplies'); ?></p>
                </details>
                <details class="bg-white border border-zinc-200 rounded-2xl p-6">
                    <summary class="font-semibold text-lg cursor-pointer">
                        <?php esc_html_e('Who can order from BCS?', 'best-chem-supplies'); ?>
                    </summary>
                    <p class="mt-3 text-zinc-600"><?php esc_html_e('BCS serves qualified buyers with legitimate lab, research, or industrial use cases.', 'best-chem-supplies'); ?></p>
                </details>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="bg-white">
        <div class="max-w-[1200px] mx-auto px-6 md:px-12 py-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-swiss-red mb-4">
                        <?php esc_html_e('Updates', 'best-chem-supplies'); ?>
                    </p>
                    <h2 class="font-display font-semibold text-4xl md:text-5xl mb-6">
                        <?php esc_html_e('Get availability updates.', 'best-chem-supplies'); ?>
                    </h2>
                    <p class="text-zinc-600 text-lg">
                        <?php esc_html_e('Join the list for new category additions, availability notes, and documentation updates.', 'best-chem-supplies'); ?>
                    </p>
                </div>
                <div class="bg-zinc-50 border border-zinc-200 rounded-3xl p-6">
                    <form class="grid grid-cols-1 sm:grid-cols-[1fr_auto] gap-4">
                        <input class="border border-zinc-300 rounded-xl px-4 py-3 text-sm" type="email" placeholder="<?php esc_attr_e('Email address', 'best-chem-supplies'); ?>">
                        <button class="bg-black text-white px-6 py-3 text-xs font-semibold uppercase tracking-wider rounded-xl" type="button">
                            <?php esc_html_e('Join list', 'best-chem-supplies'); ?>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="bg-zinc-50 border-t border-zinc-100">
        <div class="max-w-[1200px] mx-auto px-6 md:px-12 py-20 text-center">
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-swiss-red mb-4">
                <?php esc_html_e('Contact', 'best-chem-supplies'); ?>
            </p>
            <h2 class="font-display font-semibold text-4xl md:text-5xl mb-6">
                <?php esc_html_e('Ready to submit a request?', 'best-chem-supplies'); ?>
            </h2>
            <p class="text-zinc-600 text-lg mb-10">
                <?php esc_html_e('Send us the details and we will confirm the next step.', 'best-chem-supplies'); ?>
            </p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a class="bg-black text-white px-8 py-4 font-semibold uppercase tracking-wider text-xs rounded-xl" href="mailto:bestchemsupplies@gmail.com">
                    <?php esc_html_e('Email the desk', 'best-chem-supplies'); ?>
                </a>
                <a class="border border-zinc-300 text-zinc-800 px-8 py-4 font-semibold uppercase tracking-wider text-xs rounded-xl" href="<?php echo esc_url(home_url('/shop/')); ?>">
                    <?php esc_html_e('View categories', 'best-chem-supplies'); ?>
                </a>
            </div>
        </div>
    </section>

    <!-- Location -->
    <section class="bg-white border-t border-zinc-100">
        <div class="max-w-[1200px] mx-auto px-6 md:px-12 py-20 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="border border-zinc-200 rounded-2xl p-6">
                <p class="text-xs uppercase tracking-widest text-swiss-red mb-2"><?php esc_html_e('Office', 'best-chem-supplies'); ?></p>
                <h3 class="font-display text-2xl font-semibold mb-3"><?php esc_html_e('Supply desk', 'best-chem-supplies'); ?></h3>
                <p class="text-zinc-600"><?php esc_html_e('Remote-first with direct fulfillment partners.', 'best-chem-supplies'); ?></p>
            </div>
            <div class="border border-zinc-200 rounded-2xl p-6">
                <p class="text-xs uppercase tracking-widest text-swiss-red mb-2"><?php esc_html_e('Hours', 'best-chem-supplies'); ?></p>
                <h3 class="font-display text-2xl font-semibold mb-3"><?php esc_html_e('Mon - Fri', 'best-chem-supplies'); ?></h3>
                <p class="text-zinc-600"><?php esc_html_e('8:00 AM - 6:00 PM EST', 'best-chem-supplies'); ?></p>
            </div>
            <div class="border border-zinc-200 rounded-2xl p-6">
                <p class="text-xs uppercase tracking-widest text-swiss-red mb-2"><?php esc_html_e('Support', 'best-chem-supplies'); ?></p>
                <h3 class="font-display text-2xl font-semibold mb-3"><?php esc_html_e('Response time', 'best-chem-supplies'); ?></h3>
                <p class="text-zinc-600"><?php esc_html_e('Same-day replies for active requests.', 'best-chem-supplies'); ?></p>
            </div>
        </div>
    </section>

    <!-- Materials -->
    <section class="bg-zinc-50 border-t border-zinc-100 border-b border-zinc-100">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12 py-20">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-8 mb-12">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-swiss-red mb-4">
                        <?php esc_html_e('Materials', 'best-chem-supplies'); ?>
                    </p>
                    <h2 class="font-display font-semibold text-4xl md:text-5xl">
                        <?php esc_html_e('Balanced inventory, clearly grouped.', 'best-chem-supplies'); ?>
                    </h2>
                </div>
                <p class="text-zinc-600 text-lg max-w-xl">
                    <?php esc_html_e('We present supply ranges in simple blocks so buyers can move with confidence.', 'best-chem-supplies'); ?>
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white border border-zinc-200 rounded-2xl p-6">
                    <h3 class="font-display text-xl font-semibold mb-3"><?php esc_html_e('Reagents', 'best-chem-supplies'); ?></h3>
                    <p class="text-sm text-zinc-600"><?php esc_html_e('Analytical and research-grade reagents with traceable sourcing.', 'best-chem-supplies'); ?></p>
                </div>
                <div class="bg-white border border-zinc-200 rounded-2xl p-6">
                    <h3 class="font-display text-xl font-semibold mb-3"><?php esc_html_e('Solvents', 'best-chem-supplies'); ?></h3>
                    <p class="text-sm text-zinc-600"><?php esc_html_e('Prepared solvent blends and single-source options.', 'best-chem-supplies'); ?></p>
                </div>
                <div class="bg-white border border-zinc-200 rounded-2xl p-6">
                    <h3 class="font-display text-xl font-semibold mb-3"><?php esc_html_e('Equipment', 'best-chem-supplies'); ?></h3>
                    <p class="text-sm text-zinc-600"><?php esc_html_e('Bench tools and accessories needed for daily lab work.', 'best-chem-supplies'); ?></p>
                </div>
                <div class="bg-white border border-zinc-200 rounded-2xl p-6">
                    <h3 class="font-display text-xl font-semibold mb-3"><?php esc_html_e('Specialty', 'best-chem-supplies'); ?></h3>
                    <p class="text-sm text-zinc-600"><?php esc_html_e('Specialized chemicals for defined research requirements.', 'best-chem-supplies'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Quality Checklist -->
    <section class="bg-white">
        <div class="max-w-[1200px] mx-auto px-6 md:px-12 py-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-swiss-red mb-4">
                        <?php esc_html_e('Quality', 'best-chem-supplies'); ?>
                    </p>
                    <h2 class="font-display font-semibold text-4xl md:text-5xl mb-6">
                        <?php esc_html_e('A simple checklist keeps everything aligned.', 'best-chem-supplies'); ?>
                    </h2>
                    <p class="text-zinc-600 text-lg mb-8">
                        <?php esc_html_e('We validate each request against a clear set of checkpoints before shipment.', 'best-chem-supplies'); ?>
                    </p>
                    <ul class="space-y-4 text-zinc-600">
                        <li class="flex items-start gap-3">
                            <span class="mt-2 w-2 h-2 bg-swiss-red rounded-full"></span>
                            <?php esc_html_e('Grade verification and documentation status.', 'best-chem-supplies'); ?>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-2 w-2 h-2 bg-swiss-red rounded-full"></span>
                            <?php esc_html_e('Packaging stability and transport review.', 'best-chem-supplies'); ?>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-2 w-2 h-2 bg-swiss-red rounded-full"></span>
                            <?php esc_html_e('Fulfillment timing confirmation.', 'best-chem-supplies'); ?>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-2 w-2 h-2 bg-swiss-red rounded-full"></span>
                            <?php esc_html_e('Post-delivery communication path.', 'best-chem-supplies'); ?>
                        </li>
                    </ul>
                </div>
                <div class="bg-zinc-50 border border-zinc-200 rounded-3xl p-6">
                    <img class="w-full h-[420px] object-cover rounded-2xl" src="<?php echo esc_url($bcs_asset_uri . '/portrait-highly-professional-medical-worker.jpg'); ?>" alt="<?php esc_attr_e('Quality checklist', 'best-chem-supplies'); ?>">
                    <div class="mt-6 text-sm text-zinc-600">
                        <?php esc_html_e('Each order includes clear checkpoints and a short response path.', 'best-chem-supplies'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="bg-zinc-50 border-t border-zinc-100">
        <div class="max-w-[1200px] mx-auto px-6 md:px-12 py-20 text-center">
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-swiss-red mb-4">
                <?php esc_html_e('Start Now', 'best-chem-supplies'); ?>
            </p>
            <h2 class="font-display font-semibold text-4xl md:text-5xl mb-6">
                <?php esc_html_e('Move from request to delivery without clutter.', 'best-chem-supplies'); ?>
            </h2>
            <p class="text-zinc-600 text-lg mb-10">
                <?php esc_html_e('A plain, modern layout that keeps attention on the essential steps.', 'best-chem-supplies'); ?>
            </p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a class="bg-black text-white px-8 py-4 font-semibold uppercase tracking-wider text-xs rounded-xl" href="<?php echo esc_url(home_url('/shop/')); ?>">
                    <?php esc_html_e('Go to categories', 'best-chem-supplies'); ?>
                </a>
                <a class="border border-zinc-300 text-zinc-800 px-8 py-4 font-semibold uppercase tracking-wider text-xs rounded-xl" href="mailto:bestchemsupplies@gmail.com">
                    <?php esc_html_e('Request support', 'best-chem-supplies'); ?>
                </a>
            </div>
        </div>
    </section>

</main>
<?php
get_footer();
