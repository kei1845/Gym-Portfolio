<?php get_header(); ?>


<section class="sub-mv" id="mv">
    <div class="sub-mv__img">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/gym-sub/about-mv.png')); ?>" alt="ジムでランニングマシンを使う女性">
    </div>
    <div class="sub-mv__content">
        <h2 class="sub-mv__title">404</h2>
    </div>
</section>
<div class="sub-error-wrapper">
    <?php if (function_exists('bcn_display')) : ?>
        <div class="inner">
            <nav class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
                <?php bcn_display(); ?>
            </nav>
        </div>
    <?php endif; ?>
    <main class="sub-error">

        <div class="error">
            <div class="error-inner inner">
                <div class="error-title">404</div>
                <p class="error-text">申し訳ありません。<br>
                    お探しのページが見つかりません。</p>

                <div class="button-wrap error__button">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="button">Page TOP</a>
                </div>
                
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>