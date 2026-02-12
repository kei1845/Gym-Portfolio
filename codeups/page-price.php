  <?php get_header(); ?>
  <main class="sub-price">
    <section class="sub-mv" id="mv">
      <div class="sub-mv__img">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/price/price-mv.png')); ?>" alt="海の中のミスジチョウチョウウオ">
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
        <div class="price__boxes">
          <div class="price__box">
            <div class="price__header">
              <h3 class="price__header-title">ライセンス講習</h3>
              <div class="price__header-img"></div>
            </div>
            <table class="price__table">
              <tr>
                <td>オープンウォーター<br class="u-mobile">ダイバーコース</td>
                <td>¥50,000</td>
              </tr>
              <tr>
                <td>アドバンスド<br class="u-mobile">オープンウォーターコース</td>
                <td>¥60,000</td>
              </tr>
              <tr>
                <td>レスキュー＋EFRコース</td>
                <td>¥70,000</td>
              </tr>
            </table>
          </div>
          <div class="price__box">
            <div class="price__header">
              <h3 class="price__header-title">体験ダイビング</h3>
              <div class="price__header-img"></div>
            </div>
            <table class="price__table">
              <tr>
                <td>ビーチ体験ダイビング<br class="u-mobile">(半日)</td>
                <td>¥7,000</td>
              </tr>
              <tr>
                <td>ビーチ体験ダイビング<br class="u-mobile">(1日)</td>
                <td>¥14,000</td>
              </tr>
              <tr>
                <td>ボート体験ダイビング<br class="u-mobile">(半日)</td>
                <td>¥10,000</td>
              </tr>
              <tr>
                <td>ボート体験ダイビング<br class="u-mobile">(1日)</td>
                <td>¥18,000</td>
              </tr>
            </table>
          </div>
          <div class="price__box">
            <div class="price__header">
              <h3 class="price__header-title">ファンダイビング</h3>
              <div class="price__header-img"></div>
            </div>
            <table class="price__table">
              <tr>
                <td>ビーチダイビング<br class="u-mobile">(2ダイブ)</td>
                <td>¥14,000</td>
              </tr>
              <tr>
                <td>ボートダイビング<br class="u-mobile">(2ダイブ)</td>
                <td>¥18,000</td>
              </tr>
              <tr>
                <td>スペシャルダイビング<br class="u-mobile">(2ダイブ)</td>
                <td>¥24,000</td>
              </tr>
              <tr>
                <td>ナイトダイビング<br class="u-mobile">(1ダイブ)</td>
                <td>¥10,000</td>
              </tr>
            </table>
          </div>
          <div class="price__box">
            <div class="price__header">
              <h3 class="price__header-title">スペシャルダイビング</h3>
              <div class="price__header-img"></div>
            </div>
            <table class="price__table">
              <tr>
                <td>貸切ダイビング<br class="u-mobile">(2ダイブ)</td>
                <td>¥24,000</td>
              </tr>
              <tr>
                <td>1日ダイビング<br class="u-mobile">(3ダイブ)</td>
                <td>¥32,000</td>
              </tr>
              <tr>
                <td>ナイトダイビング<br class="u-mobile">(2ダイブ)</td>
                <td>¥14,000</td>
              </tr>
            </table>
          </div>
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