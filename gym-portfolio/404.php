<?php get_header(); ?>


    <main class="sub-error">
        <?php if (function_exists('bcn_display')) : ?>
    <div class="inner">
      <nav class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <?php bcn_display(); ?>
      </nav>
    </div>
  <?php endif; ?>

        <div class="error">
            <div class="error-inner inner">
                <div class="error-title">404</div>
                <p class="error-text">申し訳ありません。<br>
                    お探しのページが見つかりません。</p>


                <div class="button-wrapper-outer error__button">
                    <div class="button-wrapper">
                        <a href="<?php echo esc_url( home_url('/') ); ?>" class="button slide">Page TOP<svg xmlns="http://www.w3.org/2000/svg" width="41"
                                height="7" viewBox="0 0 41 7" fill="none">
                                <path d="M0.5 6.5H40.5L33.5 0.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php get_footer(); ?>
