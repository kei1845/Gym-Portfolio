<?php get_header(); ?>
<main class="sub-faq">
  <section class="sub-mv" id="mv">
    <div class="sub-mv__img">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/faq/faq-mv.png')); ?>" alt="海の中のミスジチョウチョウウオ">
    </div>
    <div class="sub-mv__content">
      <h2 class="sub-mv__title">FAQ</h2>
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
    <div class="contact__inner inner">
      <div class="contact__box">
        <div class="contact__left">
          <div class="contact__header">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/contact-icon.png')); ?>" alt="CodeUps">
          </div>
          <div class="contact__bar"></div>
          <div class="contact__footer">
            <address class="contact__footer-left">
              <p class="contact__footer-text">沖縄県那覇市1-1</p>
              <p class="contact__footer-text">TEL:0120-000-0000</p>
              <p class="contact__footer-text">営業時間:8:30-19:00</p>
              <p class="contact__footer-text">定休日:毎週火曜日</p>
            </address>
            <div class="contact__footer-right">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/contact-img.png')); ?>" alt="CodeUpsの店舗地図">
            </div>
          </div>
        </div>
        <div class="contact__vertical-bar"></div>
        <div class="contact__right">
          <p class="contact__title-main">Contact</p>
          <h2 class="contact__title-sub">お問い合わせ</h2>
          <p class="contact__reserve">ご予約・お問い合わせはコチラ</p>
          <div class="button-wrapper-outer contact__button">
            <div class="button-wrapper">
              <a href="<?php echo esc_url(home_url("/contact")) ?>" class="button slide">Contact us<svg xmlns="http://www.w3.org/2000/svg" width="41" height="7"
                  viewBox="0 0 41 7" fill="none">
                  <path d="M0.5 6.5H40.5L33.5 0.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>