<?php get_header(); ?>
<main class="sub-contact1">
  <section class="sub-mv" id="mv">
    <div class="sub-mv__img">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/contact/contact-mv.png')); ?>" alt="海の中のミスジチョウチョウウオ">
    </div>
    <div class="sub-mv__content">
      <h2 class="sub-mv__title">Contact</h2>
    </div>
  </section>
  <?php if (function_exists('bcn_display')) : ?>
    <div class="inner">
      <nav class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <?php bcn_display(); ?>
      </nav>
    </div>
  <?php endif; ?>

  <div class="sub-contact2">
    <div class="sub-contact-inner inner">
      <?php echo do_shortcode('[contact-form-7 id="123d5e5" title="コンタクトフォーム 1"]'); ?>


      <!-- <div class="sub-contact-form" action="#" method="post">
        <div class="sub-contact-form__row">
          <label class="sub-contact-form__label is-required">
            お名前
          </label>
          <input type="text" name="name" placeholder="沖縄　太郎" required>
        </div>
    
        <div class="dashed-line"></div>
    
        <div class="sub-contact-form__row">
          <label class="sub-contact-form__label is-required">
            メールアドレス
          </label>
          <input type="email" name="email" placeholder="aaa000@gmail.com" required>
        </div>
    
        <div class="dashed-line"></div>
    
        <div class="sub-contact-form__row">
          <label class="sub-contact-form__label is-required">
            電話番号
          </label>
          <input type="tel" name="tel" placeholder="000-0000-0000" required>
        </div>
    
        <div class="dashed-line"></div>
    
        <div class="sub-contact-form__row">
          <div class="sub-contact-form__label is-required">
            お問い合わせ項目
          </div>
          <div class="check-box-group">
            <label class="check-box">
              <input class="check-box__input" type="checkbox" name="category[]" value="ダイビング講習" required>
              <span class="check-box__box" aria-hidden="true"></span>
              <span class="check-box__text">ダイビング講習について</span>
            </label>
            <label class="check-box">
              <input class="check-box__input" type="checkbox" name="category[]" value="ファンデイビング" required>
              <span class="check-box__box" aria-hidden="true"></span>
              <span class="check-box__text">ファンデイビングについて</span>
            </label>
            <label class="check-box">
              <input class="check-box__input" type="checkbox" name="category[]" value="体験ダイビング" required>
              <span class="check-box__box" aria-hidden="true"></span>
              <span class="check-box__text">体験ダイビングについて</span>
            </label>
          </div>
        </div>
        <div class="dashed-line"></div>
    
        <div class="sub-contact-form__row">
          <label class="sub-contact-form__label">
            キャンペーン
          </label>
          <div class="select">
            <select class="select__control" name="campaign">
              <option value="">キャンペーン内容を選択</option>
              <option value="trial">体験ダイビング</option>
              <option value="fun">ファンダイビング</option>
              <option value="license">ライセンス講習</option>
              <option value="night">ナイトダイビング</option>
            </select>
          </div>
        </div>
    
        <div class="dashed-line"></div>
    
        <div class="sub-contact-form__row">
          <label class="sub-contact-form__label is-required">
            お問い合わせ内容
          </label>
          <textarea name="message" required></textarea>
        </div>
    
        <div class="dashed-line"></div>
    
        <div class="sub-contact-form__row2">
          <label class="check-box check-box-lg">
            <input class="check-box__input" type="checkbox" name="privacy" required>
            <span class="check-box__box" aria-hidden="true"></span>
            <span class="check-box__text">個人情報の取り扱いについて同意のうえ<br class="u-mobile">送信します。</span>
          </label>
        </div>
    
        <div class="contact-form__submit">
          <div class="button-wrapper-outer">
            <div class="button-wrapper">
              <button type="submit" class="button slide">Send<svg xmlns="http://www.w3.org/2000/svg" width="41" height="7"
                  viewBox="0 0 41 7" fill="none">
                  <path d="M0.5 6.5H40.5L33.5 0.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg></button>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>


</main>
<?php get_footer(); ?>