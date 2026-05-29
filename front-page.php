<?php
$bcs_asset_uri = get_template_directory_uri() . '/assets';
$bcs_video_primary = $bcs_asset_uri . '/8533369-uhd_2160_3840_30fps (1).mp4';
$bcs_video_secondary = $bcs_asset_uri . '/8863362-hd_1080_1920_30fps.mp4';
get_header();
?>
<main id="primary" class="bg-white text-black font-sans">

    <!-- Hero -->
    <section class="relative bg-black text-white border-b-2 border-zinc-800">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12 py-24 lg:py-32 grid grid-cols-1 lg:grid-cols-12 gap-14 items-center">
            <div class="lg:col-span-7">
                <p class="text-xs font-bold uppercase tracking-[0.35em] text-swiss-red mb-6"><?php esc_html_e('Precision Supply Desk', 'best-chem-supplies'); ?></p>
                <h1 class="font-display font-bold text-5xl md:text-7xl leading-tight mb-8"><?php esc_html_e('Minimal. Precise. Built for serious lab buyers.', 'best-chem-supplies'); ?></h1>
                <p class="text-zinc-300 text-lg md:text-xl leading-relaxed max-w-2xl mb-10"><?php esc_html_e('A clean interface that removes noise, focuses on qualification, and keeps every request controlled from review to dispatch.', 'best-chem-supplies'); ?></p>
                <div class="flex flex-wrap gap-4 mb-12">
                    <a class="bg-white text-black px-8 py-4 font-bold uppercase tracking-wider text-xs hover:bg-swiss-red hover:text-white transition-colors duration-300" href="<?php echo esc_url(home_url('/shop/')); ?>"><?php esc_html_e('Explore Supply', 'best-chem-supplies'); ?></a>
                    <a class="border-2 border-white text-white px-8 py-4 font-bold uppercase tracking-wider text-xs hover:bg-white hover:text-black transition-colors duration-300" href="mailto:bestchemsupplies@gmail.com"><?php esc_html_e('Request a Quote', 'best-chem-supplies'); ?></a>
                </div>
                <div class="flex flex-wrap gap-6 text-xs font-bold uppercase tracking-widest text-zinc-500">
                    <span class="flex items-center gap-2"><span class="w-2 h-2 bg-swiss-red"></span><?php esc_html_e('Qualified buyers only', 'best-chem-supplies'); ?></span>
                    <span class="flex items-center gap-2"><span class="w-2 h-2 bg-swiss-red"></span><?php esc_html_e('Documented fulfillment', 'best-chem-supplies'); ?></span>
                    <span class="flex items-center gap-2"><span class="w-2 h-2 bg-swiss-red"></span><?php esc_html_e('Fast request review', 'best-chem-supplies'); ?></span>
                </div>
            </div>
            <div class="lg:col-span-5">
                <div class="relative">
                    <img class="w-full h-[520px] object-cover border-4 border-white shadow-[18px_18px_0_0_rgba(255,255,255,0.08)]" src="<?php echo esc_url($bcs_asset_uri . '/hero-image.jpg'); ?>" alt="">
                    <div class="absolute -bottom-6 -left-6 bg-white text-black border-2 border-black p-5 shadow-[10px_10px_0_0_rgba(0,0,0,1)]">
                        <p class="text-xs font-bold uppercase tracking-widest text-swiss-red mb-2"><?php esc_html_e('Design stance', 'best-chem-supplies'); ?></p>
                        <strong class="font-display text-lg"><?php esc_html_e('Quiet interface, strong control.', 'best-chem-supplies'); ?></strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Manifesto -->
    <section class="py-20 md:py-28 bg-white border-b-2 border-black">
        <div class="max-w-[1200px] mx-auto px-6 md:px-12 text-center">
            <p class="text-xs font-bold uppercase tracking-[0.35em] text-swiss-red mb-6"><?php esc_html_e('Manifesto', 'best-chem-supplies'); ?></p>
            <h2 class="font-display font-bold text-4xl md:text-5xl leading-tight mb-6"><?php esc_html_e('A landing page that feels like a lab bench — clean, direct, and engineered for confidence.', 'best-chem-supplies'); ?></h2>
            <p class="text-zinc-600 text-lg max-w-3xl mx-auto"><?php esc_html_e('We strip the clutter, keep only essential information, and let the product category system do the heavy lifting once a buyer is qualified.', 'best-chem-supplies'); ?></p>
        </div>
    </section>

    <!-- Motion -->
    <section class="py-20 md:py-28 bg-zinc-50 border-b-2 border-black">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12">
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8 mb-12">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.35em] text-swiss-red mb-4"><?php esc_html_e('Motion', 'best-chem-supplies'); ?></p>
                    <h2 class="font-display font-bold text-4xl md:text-5xl"><?php esc_html_e('Fast, cinematic, and minimal.', 'best-chem-supplies'); ?></h2>
                </div>
                <p class="text-zinc-600 text-lg max-w-xl"><?php esc_html_e('Short loops add life without slowing the page. Subtle movement keeps the interface premium and focused.', 'best-chem-supplies'); ?></p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white border-2 border-black p-4 hover:-translate-y-2 transition-transform duration-300">
                    <video class="w-full h-[420px] object-cover border-2 border-black" autoplay muted loop playsinline preload="metadata">
                        <source src="<?php echo esc_url($bcs_video_primary); ?>" type="video/mp4">
                    </video>
                    <div class="mt-4 flex items-center justify-between text-xs font-bold uppercase tracking-widest text-zinc-500">
                        <span><?php esc_html_e('Primary Loop', 'best-chem-supplies'); ?></span>
                        <span class="text-swiss-red"><?php esc_html_e('4K', 'best-chem-supplies'); ?></span>
                    </div>
                </div>
                <div class="bg-white border-2 border-black p-4 hover:-translate-y-2 transition-transform duration-300">
                    <video class="w-full h-[420px] object-cover border-2 border-black" autoplay muted loop playsinline preload="metadata">
                        <source src="<?php echo esc_url($bcs_video_secondary); ?>" type="video/mp4">
                    </video>
                    <div class="mt-4 flex items-center justify-between text-xs font-bold uppercase tracking-widest text-zinc-500">
                        <span><?php esc_html_e('Secondary Loop', 'best-chem-supplies'); ?></span>
                        <span class="text-swiss-red"><?php esc_html_e('1080p', 'best-chem-supplies'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="py-20 md:py-28 bg-white border-b-2 border-black">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-8 mb-12">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.35em] text-swiss-red mb-4"><?php esc_html_e('Categories', 'best-chem-supplies'); ?></p>
                    <h2 class="font-display font-bold text-4xl md:text-5xl"><?php esc_html_e('Four precise entry points.', 'best-chem-supplies'); ?></h2>
                </div>
                <p class="text-zinc-600 text-lg max-w-xl"><?php esc_html_e('Minimal cards, fast decisions, and clear paths into WooCommerce.', 'best-chem-supplies'); ?></p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <article class="border-2 border-black p-6 bg-zinc-50 flex flex-col hover:bg-black hover:text-white transition-colors duration-300">
                    <img class="w-full h-40 object-cover border border-black mb-6" src="<?php echo esc_url($bcs_asset_uri . '/laboratory-glassware-with-green-liquid-arrangement.jpg'); ?>" alt="">
                    <h3 class="font-display font-bold text-xl mb-3"><?php esc_html_e('Analytical Reagents', 'best-chem-supplies'); ?></h3>
                    <p class="text-sm text-zinc-600 mb-6 flex-grow"><?php esc_html_e('Reagents selected for testing, analysis, and precision workflows.', 'best-chem-supplies'); ?></p>
                    <a class="text-xs font-bold uppercase tracking-wider text-swiss-red hover:text-white" href="<?php echo esc_url(home_url('/product-category/analytical-reagents/')); ?>"><?php esc_html_e('Explore', 'best-chem-supplies'); ?></a>
                </article>
                <article class="border-2 border-black p-6 bg-zinc-50 flex flex-col hover:bg-black hover:text-white transition-colors duration-300">
                    <img class="w-full h-40 object-cover border border-black mb-6" src="<?php echo esc_url($bcs_asset_uri . '/close-up-hand-holding-tube-with-solution.jpg'); ?>" alt="">
                    <h3 class="font-display font-bold text-xl mb-3"><?php esc_html_e('Solvents & Solutions', 'best-chem-supplies'); ?></h3>
                    <p class="text-sm text-zinc-600 mb-6 flex-grow"><?php esc_html_e('Prepared solutions and solvent supply for qualified use.', 'best-chem-supplies'); ?></p>
                    <a class="text-xs font-bold uppercase tracking-wider text-swiss-red hover:text-white" href="<?php echo esc_url(home_url('/product-category/solvents-solutions/')); ?>"><?php esc_html_e('Explore', 'best-chem-supplies'); ?></a>
                </article>
                <article class="border-2 border-black p-6 bg-zinc-50 flex flex-col hover:bg-black hover:text-white transition-colors duration-300">
                    <img class="w-full h-40 object-cover border border-black mb-6" src="<?php echo esc_url($bcs_asset_uri . '/woman-laboratory-doing-experiments.jpg'); ?>" alt="">
                    <h3 class="font-display font-bold text-xl mb-3"><?php esc_html_e('Lab Equipment', 'best-chem-supplies'); ?></h3>
                    <p class="text-sm text-zinc-600 mb-6 flex-grow"><?php esc_html_e('Precision equipment to support daily lab work.', 'best-chem-supplies'); ?></p>
                    <a class="text-xs font-bold uppercase tracking-wider text-swiss-red hover:text-white" href="<?php echo esc_url(home_url('/product-category/lab-equipment/')); ?>"><?php esc_html_e('Explore', 'best-chem-supplies'); ?></a>
                </article>
                <article class="border-2 border-black p-6 bg-zinc-50 flex flex-col hover:bg-black hover:text-white transition-colors duration-300">
                    <img class="w-full h-40 object-cover border border-black mb-6" src="<?php echo esc_url($bcs_asset_uri . '/portrait-highly-professional-medical-worker.jpg'); ?>" alt="">
                    <h3 class="font-display font-bold text-xl mb-3"><?php esc_html_e('Specialty Chemicals', 'best-chem-supplies'); ?></h3>
                    <p class="text-sm text-zinc-600 mb-6 flex-grow"><?php esc_html_e('Special-use supply for precise requirements.', 'best-chem-supplies'); ?></p>
                    <a class="text-xs font-bold uppercase tracking-wider text-swiss-red hover:text-white" href="<?php echo esc_url(home_url('/product-category/specialty-chemicals/')); ?>"><?php esc_html_e('Explore', 'best-chem-supplies'); ?></a>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 md:py-28 bg-black text-white">
        <div class="max-w-[1200px] mx-auto px-6 md:px-12 text-center">
            <p class="text-xs font-bold uppercase tracking-[0.35em] text-swiss-red mb-4"><?php esc_html_e('Next Step', 'best-chem-supplies'); ?></p>
            <h2 class="font-display font-bold text-4xl md:text-5xl mb-6"><?php esc_html_e('Ready to request a controlled supply review?', 'best-chem-supplies'); ?></h2>
            <p class="text-zinc-300 text-lg mb-10"><?php esc_html_e('Send a request and get clarity on availability, documentation, and lead time.', 'best-chem-supplies'); ?></p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a class="bg-white text-black px-8 py-4 font-bold uppercase tracking-wider text-xs hover:bg-swiss-red hover:text-white transition-colors duration-300" href="mailto:bestchemsupplies@gmail.com"><?php esc_html_e('Email the desk', 'best-chem-supplies'); ?></a>
                <a class="border-2 border-white text-white px-8 py-4 font-bold uppercase tracking-wider text-xs hover:bg-white hover:text-black transition-colors duration-300" href="<?php echo esc_url(home_url('/shop/')); ?>"><?php esc_html_e('View categories', 'best-chem-supplies'); ?></a>
            </div>
        </div>
    </section>

</main>
<?php
get_footer();
