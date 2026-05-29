<?php
$bcs_asset_uri = get_template_directory_uri() . '/assets';
$bcs_video_primary = $bcs_asset_uri . '/8533369-uhd_2160_3840_30fps (1).mp4';
$bcs_video_secondary = $bcs_asset_uri . '/8863362-hd_1080_1920_30fps.mp4';
get_header();
?>
<main id="primary" class="bg-white text-black font-sans">
    
    <!-- Hero Section -->
    <section class="relative min-h-[90vh] flex items-center justify-center overflow-hidden bg-black text-white" aria-labelledby="bcs-hero-title">
        <div class="absolute inset-0 bg-[#071311] z-0" role="presentation"></div>
        <div class="absolute inset-0 opacity-40 mix-blend-luminosity z-0" data-motion="hero-image">
            <img class="w-full h-full object-cover" src="<?php echo esc_url($bcs_asset_uri . '/hero-image.jpg'); ?>" alt="">
        </div>
        
        <div class="relative z-10 w-full max-w-[1400px] mx-auto px-6 md:px-12 grid grid-cols-1 lg:grid-cols-12 gap-12 pt-24 pb-16">
            <div class="lg:col-span-7 flex flex-col justify-center" data-motion="hero-copy">
                <p class="font-bold tracking-widest uppercase text-swiss-red text-sm mb-6"><?php esc_html_e('Best Chem Supplies / Precision Supply Desk', 'best-chem-supplies'); ?></p>
                <h1 id="bcs-hero-title" class="font-display font-bold text-5xl md:text-7xl leading-tight mb-8"><?php esc_html_e('A chemical supply interface built like a precision lab.', 'best-chem-supplies'); ?></h1>
                <p class="text-zinc-300 text-lg md:text-xl leading-relaxed max-w-2xl mb-10"><?php esc_html_e('BCS gives qualified buyers a focused way to request laboratory chemicals, reagents, solvents, equipment, and specialty supplies with clear review, careful packing, and documentation support.', 'best-chem-supplies'); ?></p>
                <div class="flex flex-wrap gap-4 mb-12">
                    <a class="bg-swiss-red text-white px-8 py-4 font-bold uppercase tracking-wider text-sm hover:bg-white hover:text-black transition-colors duration-300" href="<?php echo esc_url(home_url('/shop/')); ?>"><?php esc_html_e('View Supply Categories', 'best-chem-supplies'); ?></a>
                    <a class="border-2 border-white text-white px-8 py-4 font-bold uppercase tracking-wider text-sm hover:bg-white hover:text-black transition-colors duration-300" href="mailto:bestchemsupplies@gmail.com"><?php esc_html_e('Request Availability', 'best-chem-supplies'); ?></a>
                </div>
                <ul class="flex flex-col gap-3 text-sm font-bold tracking-wider uppercase text-zinc-400" aria-label="<?php esc_attr_e('Company highlights', 'best-chem-supplies'); ?>">
                    <li class="flex items-center gap-3"><span class="w-1.5 h-1.5 bg-swiss-red"></span><?php esc_html_e('No product clutter on the homepage', 'best-chem-supplies'); ?></li>
                    <li class="flex items-center gap-3"><span class="w-1.5 h-1.5 bg-swiss-red"></span><?php esc_html_e('Request-first review workflow', 'best-chem-supplies'); ?></li>
                    <li class="flex items-center gap-3"><span class="w-1.5 h-1.5 bg-swiss-red"></span><?php esc_html_e('Made for qualified lab buyers', 'best-chem-supplies'); ?></li>
                </ul>
            </div>
            <div class="lg:col-span-5 relative hidden lg:block" data-motion="hero-card">
                <img class="w-full h-[600px] object-cover border-4 border-black" src="<?php echo esc_url($bcs_asset_uri . '/close-up-hand-holding-tube-with-solution.jpg'); ?>" alt="">
                <div class="absolute -bottom-8 -left-8 bg-black border-2 border-zinc-800 p-6 text-white" data-motion="float-card">
                    <span class="block text-swiss-red text-xs font-bold uppercase tracking-widest mb-2"><?php esc_html_e('BCS Quality Standard', 'best-chem-supplies'); ?></span>
                    <strong class="block text-lg font-display"><?php esc_html_e('Verified. Documented. Carefully packed.', 'best-chem-supplies'); ?></strong>
                </div>
            </div>
        </div>
        
        <div class="absolute bottom-0 left-0 w-full overflow-hidden border-t border-zinc-800 bg-black/80 backdrop-blur-md py-3 flex text-xs font-bold uppercase tracking-widest text-zinc-500 whitespace-nowrap" data-motion="ticker">
            <span class="mr-12"><?php esc_html_e('Analytical Reagents', 'best-chem-supplies'); ?></span>
            <span class="mr-12"><?php esc_html_e('Solvents', 'best-chem-supplies'); ?></span>
            <span class="mr-12"><?php esc_html_e('Lab Equipment', 'best-chem-supplies'); ?></span>
            <span class="mr-12"><?php esc_html_e('Specialty Supplies', 'best-chem-supplies'); ?></span>
            <span class="mr-12"><?php esc_html_e('Quality Documentation', 'best-chem-supplies'); ?></span>
            <span class="mr-12"><?php esc_html_e('Qualified Buyers', 'best-chem-supplies'); ?></span>
            <span class="mr-12"><?php esc_html_e('Careful Fulfillment', 'best-chem-supplies'); ?></span>
        </div>
    </section>

    <!-- Lab Strip -->
    <section class="bg-swiss-red text-white border-y-4 border-black py-8">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="flex flex-col gap-2" data-motion="card"><strong class="font-display text-4xl">01</strong><span class="text-sm font-bold uppercase tracking-wider"><?php esc_html_e('Intake reviewed before confirmation', 'best-chem-supplies'); ?></span></div>
            <div class="flex flex-col gap-2" data-motion="card"><strong class="font-display text-4xl">02</strong><span class="text-sm font-bold uppercase tracking-wider"><?php esc_html_e('Supply fit checked against the use case', 'best-chem-supplies'); ?></span></div>
            <div class="flex flex-col gap-2" data-motion="card"><strong class="font-display text-4xl">03</strong><span class="text-sm font-bold uppercase tracking-wider"><?php esc_html_e('Packing planned around stability and handling', 'best-chem-supplies'); ?></span></div>
            <div class="flex flex-col gap-2" data-motion="card"><strong class="font-display text-4xl">04</strong><span class="text-sm font-bold uppercase tracking-wider"><?php esc_html_e('Direct updates from request to dispatch', 'best-chem-supplies'); ?></span></div>
        </div>
    </section>

    <!-- Video Showcase 1 -->
    <section class="py-24 md:py-32 bg-white border-b-2 border-black" aria-labelledby="bcs-vid1-title">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-motion="section">
                <p class="font-bold tracking-widest uppercase text-swiss-red text-sm mb-6"><?php esc_html_e('Inside the Lab', 'best-chem-supplies'); ?></p>
                <h2 id="bcs-vid1-title" class="font-display font-bold text-4xl md:text-5xl leading-tight mb-8"><?php esc_html_e('Precision in motion. Chemistry made visible.', 'best-chem-supplies'); ?></h2>
                <p class="text-zinc-600 text-lg leading-relaxed mb-10"><?php esc_html_e('The visual system uses real laboratory motion to make BCS feel technical, serious, and memorable before a buyer ever opens the catalog.', 'best-chem-supplies'); ?></p>
                <div class="bg-zinc-100 p-6 border-l-4 border-black">
                    <span class="block text-swiss-red text-xs font-bold uppercase tracking-widest mb-2"><?php esc_html_e('Visual Tone', 'best-chem-supplies'); ?></span>
                    <strong class="font-display text-xl"><?php esc_html_e('Dark lab / luminous reagent / precision grid', 'best-chem-supplies'); ?></strong>
                </div>
            </div>
            <div class="relative" data-motion="video-stage">
                <video class="w-full h-[600px] object-cover border-4 border-black shadow-[16px_16px_0_0_rgba(0,0,0,1)]" autoplay muted loop playsinline preload="none">
                    <source src="<?php echo esc_url($bcs_video_primary); ?>" type="video/mp4">
                </video>
                <div class="absolute -bottom-8 -left-8 bg-black border-2 border-zinc-800 p-6 text-white z-10" data-motion="float-card">
                    <span class="block text-swiss-red text-xs font-bold uppercase tracking-widest mb-2"><?php esc_html_e('Live Standard', 'best-chem-supplies'); ?></span>
                    <strong class="font-display text-xl"><?php esc_html_e('Laboratory workflow capture', 'best-chem-supplies'); ?></strong>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Detail 2 -->
    <section class="py-24 md:py-32 bg-zinc-50 border-b-2 border-black" aria-labelledby="bcs-vid2-title">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="relative order-2 lg:order-1" data-motion="video-stage">
                <video class="w-full h-[700px] object-cover border-4 border-black shadow-[-16px_16px_0_0_rgba(0,0,0,1)]" autoplay muted loop playsinline preload="none">
                    <source src="<?php echo esc_url($bcs_video_secondary); ?>" type="video/mp4">
                </video>
                <div class="absolute -bottom-8 -right-8 bg-swiss-red border-2 border-black p-6 text-white z-10" data-motion="float-card">
                    <span class="block text-black text-xs font-bold uppercase tracking-widest mb-2"><?php esc_html_e('Visual Trust', 'best-chem-supplies'); ?></span>
                    <strong class="font-display text-xl"><?php esc_html_e('Not generic ecommerce.', 'best-chem-supplies'); ?></strong>
                </div>
            </div>
            <div class="order-1 lg:order-2" data-motion="section">
                <p class="font-bold tracking-widest uppercase text-swiss-red text-sm mb-6"><?php esc_html_e('Detail Reel', 'best-chem-supplies'); ?></p>
                <h2 id="bcs-vid2-title" class="font-display font-bold text-4xl md:text-5xl leading-tight mb-8"><?php esc_html_e('A site that moves like controlled chemistry.', 'best-chem-supplies'); ?></h2>
                <p class="text-zinc-600 text-lg leading-relaxed mb-12"><?php esc_html_e('Motion-rich visuals set the tone before a single product is browsed. The visual system reinforces what BCS stands for — precision, clarity, and controlled supply.', 'best-chem-supplies'); ?></p>
                <div class="grid grid-cols-3 gap-6">
                    <div class="flex flex-col gap-2 border-l-2 border-swiss-red pl-4" data-motion="card">
                        <strong class="font-display text-3xl">4K</strong>
                        <span class="text-xs font-bold uppercase tracking-wider text-zinc-500"><?php esc_html_e('Capture quality', 'best-chem-supplies'); ?></span>
                    </div>
                    <div class="flex flex-col gap-2 border-l-2 border-swiss-red pl-4" data-motion="card">
                        <strong class="font-display text-3xl">30fps</strong>
                        <span class="text-xs font-bold uppercase tracking-wider text-zinc-500"><?php esc_html_e('Smooth motion', 'best-chem-supplies'); ?></span>
                    </div>
                    <div class="flex flex-col gap-2 border-l-2 border-swiss-red pl-4" data-motion="card">
                        <strong class="font-display text-3xl">Premium</strong>
                        <span class="text-xs font-bold uppercase tracking-wider text-zinc-500"><?php esc_html_e('Stock footage', 'best-chem-supplies'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="py-24 md:py-32 bg-white border-b-2 border-black" aria-labelledby="bcs-categories-title">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12">
            <div class="max-w-3xl mb-16" data-motion="section">
                <p class="font-bold tracking-widest uppercase text-swiss-red text-sm mb-6"><?php esc_html_e('Supply Atlas', 'best-chem-supplies'); ?></p>
                <h2 id="bcs-categories-title" class="font-display font-bold text-4xl md:text-5xl leading-tight mb-6"><?php esc_html_e('Four clean doors into a complex supply world.', 'best-chem-supplies'); ?></h2>
                <p class="text-zinc-600 text-lg leading-relaxed"><?php esc_html_e('The homepage remains editorial and trust-led. Buyers move into WooCommerce only after they choose the category that fits their work.', 'best-chem-supplies'); ?></p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <article class="bg-zinc-50 border-2 border-black p-6 group hover:-translate-y-2 hover:shadow-[8px_8px_0_0_rgba(0,0,0,1)] transition-all duration-300 flex flex-col" data-motion="card">
                    <img class="w-full h-48 object-cover border border-zinc-200 mb-6 filter grayscale group-hover:grayscale-0 transition-all duration-500" src="<?php echo esc_url($bcs_asset_uri . '/laboratory-glassware-with-green-liquid-arrangement.jpg'); ?>" alt="">
                    <span class="text-swiss-red font-display text-2xl font-bold mb-4 block">01</span>
                    <h3 class="font-display font-bold text-xl mb-3"><?php esc_html_e('Analytical Reagents', 'best-chem-supplies'); ?></h3>
                    <p class="text-zinc-600 text-sm mb-6 flex-grow"><?php esc_html_e('Reagents selected for testing, analysis, preparation, and controlled laboratory workflows.', 'best-chem-supplies'); ?></p>
                    <a class="inline-block bg-black text-white text-center px-6 py-3 font-bold uppercase tracking-wider text-xs hover:bg-swiss-red transition-colors" href="<?php echo esc_url(home_url('/product-category/analytical-reagents/')); ?>"><?php esc_html_e('Explore category', 'best-chem-supplies'); ?></a>
                </article>
                <article class="bg-zinc-50 border-2 border-black p-6 group hover:-translate-y-2 hover:shadow-[8px_8px_0_0_rgba(0,0,0,1)] transition-all duration-300 flex flex-col" data-motion="card">
                    <img class="w-full h-48 object-cover border border-zinc-200 mb-6 filter grayscale group-hover:grayscale-0 transition-all duration-500" src="<?php echo esc_url($bcs_asset_uri . '/close-up-hand-holding-tube-with-solution.jpg'); ?>" alt="">
                    <span class="text-swiss-red font-display text-2xl font-bold mb-4 block">02</span>
                    <h3 class="font-display font-bold text-xl mb-3"><?php esc_html_e('Solvents & Solutions', 'best-chem-supplies'); ?></h3>
                    <p class="text-zinc-600 text-sm mb-6 flex-grow"><?php esc_html_e('Prepared solutions and solvent supply for qualified laboratory and industrial use.', 'best-chem-supplies'); ?></p>
                    <a class="inline-block bg-black text-white text-center px-6 py-3 font-bold uppercase tracking-wider text-xs hover:bg-swiss-red transition-colors" href="<?php echo esc_url(home_url('/product-category/solvents-solutions/')); ?>"><?php esc_html_e('Explore category', 'best-chem-supplies'); ?></a>
                </article>
                <article class="bg-zinc-50 border-2 border-black p-6 group hover:-translate-y-2 hover:shadow-[8px_8px_0_0_rgba(0,0,0,1)] transition-all duration-300 flex flex-col" data-motion="card">
                    <img class="w-full h-48 object-cover border border-zinc-200 mb-6 filter grayscale group-hover:grayscale-0 transition-all duration-500" src="<?php echo esc_url($bcs_asset_uri . '/woman-laboratory-doing-experiments.jpg'); ?>" alt="">
                    <span class="text-swiss-red font-display text-2xl font-bold mb-4 block">03</span>
                    <h3 class="font-display font-bold text-xl mb-3"><?php esc_html_e('Lab Equipment', 'best-chem-supplies'); ?></h3>
                    <p class="text-zinc-600 text-sm mb-6 flex-grow"><?php esc_html_e('Practical equipment and accessories that support research, testing, and routine lab work.', 'best-chem-supplies'); ?></p>
                    <a class="inline-block bg-black text-white text-center px-6 py-3 font-bold uppercase tracking-wider text-xs hover:bg-swiss-red transition-colors" href="<?php echo esc_url(home_url('/product-category/lab-equipment/')); ?>"><?php esc_html_e('Explore category', 'best-chem-supplies'); ?></a>
                </article>
                <article class="bg-zinc-50 border-2 border-black p-6 group hover:-translate-y-2 hover:shadow-[8px_8px_0_0_rgba(0,0,0,1)] transition-all duration-300 flex flex-col" data-motion="card">
                    <img class="w-full h-48 object-cover border border-zinc-200 mb-6 filter grayscale group-hover:grayscale-0 transition-all duration-500" src="<?php echo esc_url($bcs_asset_uri . '/portrait-highly-professional-medical-worker.jpg'); ?>" alt="">
                    <span class="text-swiss-red font-display text-2xl font-bold mb-4 block">04</span>
                    <h3 class="font-display font-bold text-xl mb-3"><?php esc_html_e('Specialty Chemicals', 'best-chem-supplies'); ?></h3>
                    <p class="text-zinc-600 text-sm mb-6 flex-grow"><?php esc_html_e('Special-use supply for qualified buyers with specific research or industrial requirements.', 'best-chem-supplies'); ?></p>
                    <a class="inline-block bg-black text-white text-center px-6 py-3 font-bold uppercase tracking-wider text-xs hover:bg-swiss-red transition-colors" href="<?php echo esc_url(home_url('/product-category/specialty-chemicals/')); ?>"><?php esc_html_e('Explore category', 'best-chem-supplies'); ?></a>
                </article>
            </div>
        </div>
    </section>

    <!-- Controlled Supply -->
    <section class="py-24 md:py-32 bg-black text-white border-b-2 border-zinc-800" aria-labelledby="bcs-about-title">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="relative min-h-[500px]" data-motion="image-stack">
                <img class="absolute top-0 left-0 w-3/4 h-auto border-4 border-zinc-800 z-10" src="<?php echo esc_url($bcs_asset_uri . '/woman-laboratory-doing-experiments.jpg'); ?>" alt="">
                <img class="absolute bottom-0 right-0 w-3/4 h-auto border-4 border-zinc-800 z-0 opacity-50" src="<?php echo esc_url($bcs_asset_uri . '/laboratory-glassware-with-green-liquid-arrangement.jpg'); ?>" alt="">
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-swiss-red border-2 border-black p-6 z-20 shadow-[12px_12px_0_0_rgba(0,0,0,1)] text-center w-3/4 max-w-sm" data-motion="float-card">
                    <span class="block text-black text-xs font-bold uppercase tracking-widest mb-2"><?php esc_html_e('BCS CHECKPOINT', 'best-chem-supplies'); ?></span>
                    <strong class="font-display text-xl leading-tight"><?php esc_html_e('Fit. Verify. Pack. Support.', 'best-chem-supplies'); ?></strong>
                </div>
            </div>
            <div data-motion="section">
                <p class="font-bold tracking-widest uppercase text-swiss-red text-sm mb-6"><?php esc_html_e('Controlled Supply', 'best-chem-supplies'); ?></p>
                <h2 id="bcs-about-title" class="font-display font-bold text-4xl md:text-5xl leading-tight mb-8"><?php esc_html_e('Every request passes through a calmer, sharper supply desk.', 'best-chem-supplies'); ?></h2>
                <p class="text-zinc-400 text-lg leading-relaxed mb-12"><?php esc_html_e('BCS keeps the process direct: clarify the material, confirm the category, check the route, prepare the order, and communicate the next step without noise.', 'best-chem-supplies'); ?></p>
                <ul class="flex flex-col gap-8">
                    <li class="flex gap-6 items-start" data-motion="card">
                        <span class="font-display text-3xl text-zinc-700">01</span>
                        <div>
                            <strong class="block text-xl font-display mb-2"><?php esc_html_e('Batch Documentation', 'best-chem-supplies'); ?></strong>
                            <p class="text-zinc-400 text-sm"><?php esc_html_e('Specification and batch information provided when available', 'best-chem-supplies'); ?></p>
                        </div>
                    </li>
                    <li class="flex gap-6 items-start" data-motion="card">
                        <span class="font-display text-3xl text-zinc-700">02</span>
                        <div>
                            <strong class="block text-xl font-display mb-2"><?php esc_html_e('Transit Stability', 'best-chem-supplies'); ?></strong>
                            <p class="text-zinc-400 text-sm"><?php esc_html_e('Careful packaging designed for stability during transit', 'best-chem-supplies'); ?></p>
                        </div>
                    </li>
                    <li class="flex gap-6 items-start" data-motion="card">
                        <span class="font-display text-3xl text-zinc-700">03</span>
                        <div>
                            <strong class="block text-xl font-display mb-2"><?php esc_html_e('Direct Communication', 'best-chem-supplies'); ?></strong>
                            <p class="text-zinc-400 text-sm"><?php esc_html_e('Private, direct order communication at every step', 'best-chem-supplies'); ?></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Capabilities -->
    <section class="py-24 md:py-32 bg-white relative overflow-hidden border-b-2 border-black" aria-labelledby="bcs-capabilities-title">
        <div class="absolute top-1/2 left-0 -translate-y-1/2 text-[15vw] font-display font-bold text-zinc-50 opacity-50 select-none pointer-events-none whitespace-nowrap" aria-hidden="true">CAPABILITIES</div>
        <div class="max-w-[1400px] mx-auto px-6 md:px-12 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-20" data-motion="section">
                <p class="font-bold tracking-widest uppercase text-swiss-red text-sm mb-6"><?php esc_html_e('Capabilities', 'best-chem-supplies'); ?></p>
                <h2 id="bcs-capabilities-title" class="font-display font-bold text-4xl md:text-5xl leading-tight"><?php esc_html_e('More than a catalog. A supply desk for real lab work.', 'best-chem-supplies'); ?></h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <article class="bg-zinc-50 border-2 border-black p-8 relative overflow-hidden group" data-motion="card">
                    <div class="absolute -right-4 -top-8 font-display font-bold text-8xl text-zinc-200 transition-transform duration-500 group-hover:-translate-y-2 group-hover:text-swiss-red opacity-50" aria-hidden="true">01</div>
                    <div class="relative z-10">
                        <h3 class="font-display font-bold text-2xl mb-4"><?php esc_html_e('Availability checks', 'best-chem-supplies'); ?></h3>
                        <p class="text-zinc-600 leading-relaxed"><?php esc_html_e('Confirm what can be sourced before wasting time on unclear listings. We verify stock, purity grade, and supplier reliability before you commit.', 'best-chem-supplies'); ?></p>
                    </div>
                </article>
                <article class="bg-zinc-50 border-2 border-black p-8 relative overflow-hidden group" data-motion="card">
                    <div class="absolute -right-4 -top-8 font-display font-bold text-8xl text-zinc-200 transition-transform duration-500 group-hover:-translate-y-2 group-hover:text-swiss-red opacity-50" aria-hidden="true">02</div>
                    <div class="relative z-10">
                        <h3 class="font-display font-bold text-2xl mb-4"><?php esc_html_e('Documentation help', 'best-chem-supplies'); ?></h3>
                        <p class="text-zinc-600 leading-relaxed"><?php esc_html_e('Ask about specification sheets, batch details, and handling information before ordering. Full traceability from source to bench.', 'best-chem-supplies'); ?></p>
                    </div>
                </article>
                <article class="bg-zinc-50 border-2 border-black p-8 relative overflow-hidden group" data-motion="card">
                    <div class="absolute -right-4 -top-8 font-display font-bold text-8xl text-zinc-200 transition-transform duration-500 group-hover:-translate-y-2 group-hover:text-swiss-red opacity-50" aria-hidden="true">03</div>
                    <div class="relative z-10">
                        <h3 class="font-display font-bold text-2xl mb-4"><?php esc_html_e('Careful fulfillment', 'best-chem-supplies'); ?></h3>
                        <p class="text-zinc-600 leading-relaxed"><?php esc_html_e('Orders are prepared with attention to labeling, stability, and transport conditions. Every shipment is packed like precision instruments.', 'best-chem-supplies'); ?></p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-24 md:py-32 bg-zinc-50 border-b-2 border-black" aria-labelledby="bcs-faq-title">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12 grid grid-cols-1 lg:grid-cols-2 gap-16">
            <div data-motion="section">
                <p class="font-bold tracking-widest uppercase text-swiss-red text-sm mb-6"><?php esc_html_e('Questions', 'best-chem-supplies'); ?></p>
                <h2 id="bcs-faq-title" class="font-display font-bold text-4xl md:text-5xl leading-tight mb-8"><?php esc_html_e('Frequently asked questions.', 'best-chem-supplies'); ?></h2>
                <p class="text-zinc-600 text-lg leading-relaxed mb-8"><?php esc_html_e('Need a direct answer? Call or email BCS and we will help you confirm the next step.', 'best-chem-supplies'); ?></p>
                <a class="inline-block bg-black text-white px-8 py-4 font-bold uppercase tracking-wider text-sm hover:bg-swiss-red transition-colors duration-300" href="mailto:bestchemsupplies@gmail.com"><?php esc_html_e('Contact Us', 'best-chem-supplies'); ?></a>
            </div>
            <div class="flex flex-col gap-4">
                <details class="bg-white border-2 border-black p-6 group cursor-pointer" data-motion="card">
                    <summary class="font-display font-bold text-xl flex justify-between items-center list-none outline-none">
                        <?php esc_html_e('What types of supplies does BCS offer?', 'best-chem-supplies'); ?>
                        <span class="text-swiss-red text-2xl group-open:rotate-45 transition-transform">+</span>
                    </summary>
                    <p class="mt-4 text-zinc-600 text-sm leading-relaxed"><?php esc_html_e('BCS supports sourcing for analytical reagents, solvents, prepared solutions, lab equipment, and specialty chemical supplies.', 'best-chem-supplies'); ?></p>
                </details>
                <details class="bg-white border-2 border-black p-6 group cursor-pointer" data-motion="card">
                    <summary class="font-display font-bold text-xl flex justify-between items-center list-none outline-none">
                        <?php esc_html_e('Do you support international orders?', 'best-chem-supplies'); ?>
                        <span class="text-swiss-red text-2xl group-open:rotate-45 transition-transform">+</span>
                    </summary>
                    <p class="mt-4 text-zinc-600 text-sm leading-relaxed"><?php esc_html_e('International fulfillment may be available depending on the product, destination, and applicable rules.', 'best-chem-supplies'); ?></p>
                </details>
                <details class="bg-white border-2 border-black p-6 group cursor-pointer" data-motion="card">
                    <summary class="font-display font-bold text-xl flex justify-between items-center list-none outline-none">
                        <?php esc_html_e('Can I request documentation?', 'best-chem-supplies'); ?>
                        <span class="text-swiss-red text-2xl group-open:rotate-45 transition-transform">+</span>
                    </summary>
                    <p class="mt-4 text-zinc-600 text-sm leading-relaxed"><?php esc_html_e('Yes. Ask about available batch details, specification sheets, or other documentation before ordering.', 'best-chem-supplies'); ?></p>
                </details>
                <details class="bg-white border-2 border-black p-6 group cursor-pointer" data-motion="card">
                    <summary class="font-display font-bold text-xl flex justify-between items-center list-none outline-none">
                        <?php esc_html_e('Who can order from BCS?', 'best-chem-supplies'); ?>
                        <span class="text-swiss-red text-2xl group-open:rotate-45 transition-transform">+</span>
                    </summary>
                    <p class="mt-4 text-zinc-600 text-sm leading-relaxed"><?php esc_html_e('BCS serves qualified customers purchasing for lawful laboratory, research, or industrial purposes.', 'best-chem-supplies'); ?></p>
                </details>
            </div>
        </div>
    </section>

</main>
<?php
get_footer();
