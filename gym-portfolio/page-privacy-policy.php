<?php get_header(); ?>
<main class="sub-utility">
    <section class="sub-mv" id="mv">
        <div class="sub-mv__img">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/gym-sub/contact-mv.webp')); ?>" alt="">
        </div>
        <div class="sub-mv__content">
            <h1 class="sub-mv__title">利用規約</h1>
        </div>
    </section>
    <?php if (function_exists('bcn_display')) : ?>
        <div class="inner">
            <nav class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
                <?php bcn_display(); ?>
            </nav>
        </div>
    <?php endif; ?>

    <section class="legal">
        <div class="legal-inner inner">
            <h3 class="legal-title"><?php the_title(); ?></h3>
            <div class="legal-text">
                <?php the_content(); ?>
            </div>
        </div>
    </section>


    
</main>

<?php get_footer(); ?>