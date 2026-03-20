  <?php get_header(); ?>
  <main class="sub-price">
    <section class="sub-mv" id="mv">
      <div class="sub-mv__img">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/gym-sub/price-mv.png')); ?>" alt="ダンベルとトレーニング器具が並ぶジム">
      </div>
      <div class="sub-mv__content">
        <h2 class="sub-mv__title">Price</h2>
      </div>
    </section>
    <?php if (function_exists('bcn_display')) : ?>
      <div class="inner">
        <nav class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
          <?php bcn_display(); ?>
        </nav>
      </div>
    <?php endif; ?>

    <div class="price">
      <div class="price__inner inner">



      </div>
    </div>



    <section class="contact">
    <div class="contact-inner inner">
      <h2 class="contact__title">はじめてでも大丈夫<br>まずは<span>無料体験</span>から<br class="u-mobile">お試しください。</h2>
      <p class="contact__text">
        初心者・女性も安心してご利用いただけます。
      </p>
      <div class="button-wrap contact__button">
        <a href="<?php echo esc_url(home_url("/contact")) ?>" class="button">無料体験を予約する</a>
      </div>
    </div>
  </section>
  </main>
  <?php get_footer(); ?>