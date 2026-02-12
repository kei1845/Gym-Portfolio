<?php get_header(); ?>
<main class="sub-information">
    <section class="sub-mv" id="mv">
      <div class="sub-mv__img">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/information/information-mv.png')); ?>" alt="海の中のミスジチョウチョウウオ">
      </div>
      <div class="sub-mv__content">
        <h2 class="sub-mv__title">Information</h2>
      </div>
    </section>
    <?php if ( function_exists('bcn_display') ) : ?>
      <div class="inner">
        <nav class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
            <?php bcn_display(); ?>
        </nav>
      </div>
      <?php endif; ?>

    <div class="information">
      <div class="information-inner inner">
        <div class="information__tabs">
          <button class="information__tab is-active" data-target="license">
            <span class="information__img u-desktop"></span>
            <span class="information__main">ライセンス<br class="u-mobile">講習</span>
          </button>
          <button class="information__tab" data-target="fun">
            <span class="information__img u-desktop"></span>
            <span class="information__main">ファン<br class="u-mobile">ダイビング</span>            
          </button>
          <button class="information__tab" data-target="trial">
            <span class="information__img u-desktop"></span>
            <span class="information__main">体験<br class="u-mobile">ダイビング</span>
          </button>
        </div>
        <div class="information__contents">
          <div class="information__content is-active" id="license">
            <div class="information__left">
              <h3 class="information__title">ライセンス講習</h3>
              <div class="information__bar"></div>
              <p class="information__text">泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！</p>
            </div>
            <div class="information__right">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/information/license.png')); ?>" alt="ダイバー">
            </div>
          </div>
          <div class="information__content" id="fun">
            <div class="information__left">
              <h3 class="information__title">ファンダイビング</h3>
              <div class="information__bar"></div>
              <p class="information__text">ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
            </div>
            <div class="information__right">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/information/fun-diving.png')); ?>" alt="サンゴ礁周辺でテンジクダイの仲間が大群で泳ぐ海中写真">
            </div>            
          </div>
          <div class="information__content" id="trial">
            <div class="information__left">
              <h3 class="information__title">体験ダイビング</h3>
              <div class="information__bar"></div>
              <p class="information__text">ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
            </div>
            <div class="information__right">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/information/diving.png')); ?>" alt="海の中のミスジチョウチョウウオ">
            </div>
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