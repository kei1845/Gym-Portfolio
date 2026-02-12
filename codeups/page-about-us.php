<?php get_header(); ?>
  
    <main class="sub-about">
      <section class="sub-mv" id="mv">
            <div class="sub-mv__img">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/about/about-mv.png')); ?>" alt="海の中のミスジチョウチョウウオ">
            </div>
        <div class="sub-mv__content">
          <h2 class="sub-mv__title">About us</h2>
        </div>
      </section>
      <?php if ( function_exists('bcn_display') ) : ?>
      <div class="inner">
        <nav class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
            <?php bcn_display(); ?>
        </nav>
      </div>
      <?php endif; ?>
    
      <section class="about">
        <div class="about-inner inner">
          <div class="about__content">
              <div class="about__img">
                <div class="about__img-left u-desktop">
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/ocean1.png')); ?>" alt="屋根と青空と木">
                </div>
                <h3 class="about__catch">Dive into<br>the Ocean</h3>
                <div class="about__img-right">
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/ocean2.png')); ?>" alt="海の中のミスジチョウチョウウオ">
                  <div class="about__img-right-text u-desktop">
                    <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
                  </div>
                </div>
              </div>
              <div class="about__text u-mobile">
                <p class="about__text-body">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
              </div>
            </div>
        </div>
      </section>
      <section class="gallery">
        <div class="gallery-inner inner">
          <div class="heading">
            <p class="heading__en">Gallery</p>
            <h2 class="heading__ja">フォト</h2>
          </div>
          <div class="gallery__grid">
             <button class="gallery__item" data-modal-img="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/about/gallery1.png')); ?>">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/about/gallery1.png')); ?>" alt="熱帯魚と珊瑚礁">
             </button>
             <button class="gallery__item" data-modal-img="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/about/gallery2.png')); ?>">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/about/gallery2.png')); ?>" alt="砂浜の船と海">
             </button>
             <button class="gallery__item" data-modal-img="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/about/gallery3.png')); ?>">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/about/gallery3.png')); ?>" alt="海の中のミスジチョウチョウウオ">
             </button>
             <button class="gallery__item" data-modal-img="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/about/gallery4.png')); ?>">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/about/gallery4.png')); ?>" alt="シテンヤッコ">
             </button>
             <button class="gallery__item" data-modal-img="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/about/gallery5.png')); ?>">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/about/gallery5.png')); ?>" alt="サンゴ礁周辺でテンジクダイの仲間が大群で泳ぐ海中写真">
             </button>
             <button class="gallery__item" data-modal-img="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/about/gallery6.png')); ?>">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/about/gallery6.png')); ?>" alt="海の中のミスジチョウチョウウオと珊瑚礁">
             </button>
          </div>
        </div>
        <div class="modal" id="gallery-modal">
          <div class="modal-overlay"></div>
          <div class="modal-content">
          </div>
        </div>
      </section>
    
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