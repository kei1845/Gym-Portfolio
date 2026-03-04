<?php get_header(); ?>
<main class="sub-blog">
    <section class="sub-mv" id="mv">
        <div class="sub-mv__img">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/blog/blog-mv.png')); ?>" alt="海の中のミスジチョウチョウウオ">
        </div>
        <div class="sub-mv__content">
            <h2 class="sub-mv__title">Blog</h2>
        </div>
    </section>
    <?php if (function_exists('bcn_display')) : ?>
        <div class="inner">
            <nav class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
                <?php bcn_display(); ?>
            </nav>
        </div>
    <?php endif; ?>
    <div class="inner">
        <p>カテゴリーです。</p>
    </div>
</main>
<?php get_footer(); ?>