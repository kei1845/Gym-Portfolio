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
      <div class="header__logo">
        <a href="<?php echo esc_url( home_url('/') ); ?>">          
          <span>K</span> FIT GYM
        </a>
      </div>
      <nav class="header__nav u-desktop">
        <ul class="header__nav-list">
          
          <li class="header__nav-item">
            <a href="<?php echo esc_url(home_url("/facility")) ?>" class="header__link">
              <span class="header__link--ja">施設紹介</span>
            </a>
          </li>
          <li class="header__nav-item">
            <a href="<?php echo esc_url(home_url('/blog')); ?>" class="header__link">
              <span class="header__link--ja">ブログ</span>
            </a>
          </li>
    
          <li class="header__nav-item">
            <a href="<?php echo esc_url(home_url("/price")) ?>" class="header__link">
              <span class="header__link--ja">料金一覧</span>
            </a>
          </li>
          <li class="header__nav-item">
            <a href="<?php echo esc_url(home_url("/faq")) ?>" class="header__link">
              <span class="header__link--ja">よくある質問</span>
            </a>
          </li>
          <li class="header__nav-item">
            <a href="<?php echo esc_url(home_url("/contact")) ?>" class="header__link">
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
    <div class="inner drawer-content-inner">
      <div class="drawer__nav-logo">
          <a href="<?php echo esc_url( home_url('/') ); ?>">
            K FIT GYM
          </a>
        </div>
      <ul class="drawer__nav-list">
        <li class="drawer__nav-item">
          <a href="<?php echo esc_url(home_url("/facility")) ?>">
            施設紹介
          </a>
        </li>
        <li class="drawer__nav-item">
          <a href="<?php echo esc_url(home_url('/blog')); ?>">
            ブログ
          </a>
        </li>
        <li class="drawer__nav-item">
          <a href="<?php echo esc_url(home_url("/price")) ?>">
            料金一覧
          </a>
        </li>
        <li class="drawer__nav-item">
          <a href="<?php echo esc_url(home_url("/faq")) ?>">
            よくある質問
          </a>
        </li>
        <li class="drawer__nav-item">
          <a href="<?php echo esc_url(home_url("/contact")) ?>">
            お問い合わせ
          </a>
        </li>
      </ul>
      
    </div>
  </div>