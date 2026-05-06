<?php get_header(); ?>
<main class="sub-faq">
  <section class="sub-mv" id="mv">
    <div class="sub-mv__img">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/gym-sub/faq-mv.webp')); ?>" alt="">
    </div>
    <div class="sub-mv__content">
      <h1 class="sub-mv__title">よくある質問</h1>
    </div>
  </section>
  <?php if (function_exists('bcn_display')) : ?>
    <div class="inner">
      <nav class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <?php bcn_display(); ?>
      </nav>
    </div>
  <?php endif; ?>

  <div class="faq">
  <div class="faq-inner inner">
    <div class="sub-gym">
        <h2 class="sub-gym__title">充実した設備と清潔な<br class="u-mobile">トレーニング環境</h2>
        <p class="sub-gym__text">安心して続けられる環境をご紹介します。</p>
      </div>
    <div class="faq__list">

      <?php
      $faq_items = class_exists('SCF') ? SCF::get('faq_items') : [];

      if (!empty($faq_items)) :
        foreach ($faq_items as $item) :
          $question = isset($item['question']) ? $item['question'] : '';
          $answer   = isset($item['answer']) ? $item['answer'] : '';

          if ($question === '' && $answer === '') continue;
      ?>
          <div class="faq__item">
            <button type="button" class="faq__question js-accordion" aria-expanded="false">
              <span class="faq__question-text"><?php echo esc_html($question); ?></span>
              <span class="faq__icon">
                <span class="faq__icon-bar"></span>
                <span class="faq__icon-bar"></span>
              </span>
            </button>

            <div class="faq__answer">
              <p class="faq__answer-text">
                <?php echo nl2br(esc_html($answer)); ?>
              </p>
            </div>
          </div>
        <?php
        endforeach;
      else :
        ?>
        <p>FAQは準備中です。</p>
      <?php endif; ?>

    </div>
  </div>
</div>





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