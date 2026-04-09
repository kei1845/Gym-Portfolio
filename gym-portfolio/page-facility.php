<?php get_header(); ?>

<main class="sub-facility">
  <section class="sub-mv" id="mv">
    <div class="sub-mv__img">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/gym-sub/about-mv.png')); ?>" alt="ジムでランニングマシンを使う女性">
    </div>
    <div class="sub-mv__content">
      <h2 class="sub-mv__title">施設紹介</h2>
    </div>
  </section>
  <?php if (function_exists('bcn_display')) : ?>
    <div class="inner">
      <nav class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <?php bcn_display(); ?>
      </nav>
    </div>
  <?php endif; ?>

  <section class="facility">
    <div class="facility-inner inner">
      <div class="sub-gym">
        <h2 class="sub-gym__title">充実した設備と清潔な<br class="u-mobile">トレーニング環境</h2>
        <p class="sub-gym__text">安心して続けられる環境をご紹介します。</p>
      </div>
      <div class="facility__boxes">
        <div class="facility__box">
          <div class="facility__img facility__img-odd">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/gym-top/facility1.png')); ?>" alt="最新トレーニングマシンが並ぶジムエリア">
          </div>
          <div class="facility__content">
            <h3 class="facility__box-title">最新機器を揃えた、<br>本格トレーニング環境</h3>
            <p class="facility__box-text">初心者から上級者まで効率よく運動できる最新マシンを多数導入しています。<br>
              トレーニング目的やレベルに合わせて最適な負荷設定が可能で、正しいフォームを意識しながら効率的に身体を鍛えることができます。<br>
              広々とした空間で、快適にトレーニングに集中できる環境を整えています。</p>
          </div>
        </div>
        <div class="facility__box">
          <div class="facility__img facility__img-even">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/gym-top/facility2.png')); ?>" alt="ダンベルとベンチが揃ったフリーウェイトエリア">
          </div>
          <div class="facility__content">
            <h3 class="facility__box-title">広々とした集中できる<br>フリーウェイトエリア</h3>
            <p class="facility__box-text">ダンベル・バーベルを豊富に揃え、初心者から上級者まで幅広いトレーニングに対応しています。<br>
              周囲を気にせずトレーニングに集中できる空間設計となっており、フォーム確認や安全面にも配慮した設備を整えています。<br>
              本格的な筋力トレーニングを快適に行えるエリアです。</p>
          </div>
        </div>
        <div class="facility__box">
          <div class="facility__img facility__img-odd">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/gym-top/facility3.png')); ?>" alt="ランニングマシンが並ぶ有酸素トレーニングエリア">
          </div>
          <div class="facility__content">
            <h3 class="facility__box-title">充実した有酸素<br>トレーニングエリア</h3>
            <p class="facility__box-text">ランニングマシンやエアロバイクなど、多彩な有酸素マシンを完備しています。<br>
              目的や体力に合わせて負荷を調整でき、脂肪燃焼や体力向上を効率よくサポートします。<br>
              初心者から経験者まで快適に利用できるトレーニングエリアです。</p>
          </div>
        </div>
        <div class="facility__box">
          <div class="facility__img facility__img-even">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/gym-top/facility4.png')); ?>" alt="清潔なシャワールームと洗面スペース">
          </div>
          <div class="facility__content">
            <h3 class="facility__box-title">清潔で快適な<br>シャワールーム</h3>
            <p class="facility__box-text">トレーニング後もすっきりリフレッシュできるシャワールームを完備しています。<br>
              毎日清掃を徹底し、清潔で快適な環境を保っています。<br>
              運動後も安心してゆったりとご利用いただけます。</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="gallery">
    <div class="gallery-inner inner">
      <h2 class="gallery-title">ギャラリー</h2>
      
      <?php
      $items = SCF::get('gallery_items', get_the_ID());
      ?>

      <div class="gallery__grid">
        <?php if (!empty($items)) : ?>
          <?php foreach ($items as $item) :
            $img_id = $item['gallery_image'] ?? '';

            if (!$img_id) continue;

            $url = wp_get_attachment_image_url((int)$img_id, 'full');
            $alt = get_post_meta((int)$img_id, '_wp_attachment_image_alt', true);
          ?>
            <button class="gallery__item" type="button" data-modal-img="<?php echo esc_url($url); ?>">
              <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>">
            </button>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="modal" id="gallery-modal">
      <div class="modal-overlay"></div>
      <div class="modal-content">
      </div>
    </div>
  </section>


  <section class="contact">
    <div class="contact-inner inner">
      <h2 class="contact__title">はじめてでも大丈夫<br>まずは<span>無料体験</span>から<br class="u-mobile">お試しください。</h2>
      <p class="contact__text">
        初心者・女性も安心してご利用いただけます。
      </p>
      <div class="button-wrap contact__button">
        <a href="<?php echo esc_url(home_url("/contact")) ?>" class="contact__button-content">無料体験を予約する</a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>