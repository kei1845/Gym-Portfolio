<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <!-- meta情報 -->
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <link rel="icon" href="#" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="<?php echo esc_url( home_url('/') ); ?>">          
          <span>K</span> FIT GYM
        </a>
      </h1>
      <nav class="header__nav u-desktop">
        <ul class="header__nav-list">
          <!-- <li class="header__nav-item">
            <a href="<?php echo esc_url( get_post_type_archive_link('campaign') ); ?>" class="header__link">
              <span class="header__link--en">Campaign</span>
              <span class="header__link--ja">キャンペーン</span>
            </a>
          </li> -->
          <li class="header__nav-item">
            <a href="<?php echo esc_url(home_url("/about-us")) ?>" class="header__link">
              <!-- <span class="header__link--en">About us</span> -->
              <span class="header__link--ja">私たちについて</span>
            </a>
          </li>
          <!-- <li class="header__nav-item">
            <a href="<?php echo esc_url(home_url("/information")) ?>" class="header__link">
              <span class="header__link--en">Information</span>
              <span class="header__link--ja">ダイビング情報</span>
            </a>
          </li> -->
          <li class="header__nav-item">
            <a href="<?php echo esc_url(home_url('/blog')); ?>" class="header__link">
              <!-- <span class="header__link--en">Blog</span> -->
              <span class="header__link--ja">ブログ</span>
            </a>
          </li>
    
          <li class="header__nav-item">
            <a href="<?php echo esc_url(home_url("/price")) ?>" class="header__link">
              <!-- <span class="header__link--en">Price</span> -->
              <span class="header__link--ja">料金一覧</span>
            </a>
          </li>
          <li class="header__nav-item">
            <a href="<?php echo esc_url(home_url("/faq")) ?>" class="header__link">
              <!-- <span class="header__link--en">FAQ</span> -->
              <span class="header__link--ja">よくある質問</span>
            </a>
          </li>
          <li class="header__nav-item">
            <a href="<?php echo esc_url(home_url("/contact")) ?>" class="header__link">
              <!-- <span class="header__link--en">Contact</span> -->
              <span class="header__link--ja">お問い合わせ</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <button id="js-drawer-icon" class="header__open drawer-icon u-mobile">
    <span class="drawer-icon__bar"></span>
    <span class="drawer-icon__bar"></span>
    <span class="drawer-icon__bar"></span>
  </button>
  <div id="js-drawer-content" class="drawer-content u-mobile">
    <div class="footer__inner inner drawer-content-inner">
      <div class="footer__header">
        <div class="drawer__logo">
          <img src="<?php echo esc_url( get_theme_file_uri('/assets/images/footer-codeups.png') ); ?>" alt="CodeUps">
        </div>
      </div>
      <div class="footer__body drawer-content2">
        <div class="footer__wrapper">
          <div class="footer__nav-column">
            <a href="<?php echo esc_url( get_post_type_archive_link('campaign') ); ?>" class="footer__text hover-opacity starfish">キャンペーン</a>
            <a href="<?php echo esc_url( get_post_type_archive_link('campaign') ); ?>" class="footer__text hover-opacity">ライセンス取得</a>
            <a href="<?php echo esc_url( get_post_type_archive_link('campaign') ); ?>" class="footer__text hover-opacity">貸切体験ダイビング</a>
            <a href="<?php echo esc_url( get_post_type_archive_link('campaign') ); ?>" class="footer__text hover-opacity">ナイトダイビング</a>
            <a href="<?php echo esc_url(home_url("/about-us")) ?>" class="footer__text hover-opacity starfish">私たちについて</a>
          </div>
          <div class="footer__nav-column">
            <a href="<?php echo esc_url(home_url("/information")) ?>" class="footer__text hover-opacity starfish">ダイビング情報</a>
            <a href="<?php echo esc_url(home_url("/information")) ?>" class="footer__text hover-opacity">ライセンス講習</a>
            <a href="<?php echo esc_url(home_url("/information")) ?>" class="footer__text hover-opacity">体験ダイビング</a>
            <a href="<?php echo esc_url(home_url("/information")) ?>" class="footer__text hover-opacity">ファンダイビング</a>
            <a href="<?php echo esc_url(home_url('/blog')); ?>" class="footer__text hover-opacity starfish">ブログ</a>
          </div>
        </div>
        <div class="footer__wrapper drawer__margin">
          <div class="footer__nav-column">
            <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" class="footer__text hover-opacity starfish">お客様の声</a>
            <a href="<?php echo esc_url(home_url("/price")) ?>" class="footer__text hover-opacity starfish">料金一覧</a>
            <a href="<?php echo esc_url(home_url("/price")) ?>" class="footer__text hover-opacity">ライセンス講習</a>
            <a href="<?php echo esc_url(home_url("/price")) ?>" class="footer__text hover-opacity">体験ダイビング</a>
            <a href="<?php echo esc_url(home_url("/price")) ?>" class="footer__text hover-opacity">ファンダイビング</a>
          </div>
          <div class="footer__nav-column">
            <a href="<?php echo esc_url(home_url("/faq")) ?>" class="footer__text hover-opacity starfish">よくある質問</a>
            <a href="<?php echo esc_url(home_url("/privacy-policy")) ?>" class="footer__text hover-opacity starfish">プライバシー<br class="u-mobile">ポリシー</a>
            <a href="<?php echo esc_url(home_url("/terms-of-service")) ?>" class="footer__text hover-opacity starfish">利用規約</a>
            <a href="<?php echo esc_url(home_url("/contact")) ?>" class="footer__text hover-opacity starfish">お問い合わせ</a>
          </div>
        </div>
      </div>
    </div>
  </div>