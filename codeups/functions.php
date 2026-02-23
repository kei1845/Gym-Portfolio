<?php
// テーマの基本設定
function my_setup() {
  add_theme_support('post-thumbnails');       // アイキャッチ
  add_theme_support('automatic-feed-links');  // フィード
  add_theme_support('title-tag');              // <title>をWP管理に
  add_theme_support('html5', [
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ]);
}
add_action('after_setup_theme', 'my_setup');


// CSS / JS 読み込み
add_action('wp_enqueue_scripts', function () {

  // Google Fonts
  wp_enqueue_style(
    'google-fonts',
    'https://fonts.googleapis.com/css2?family=Gotu&family=Lato&family=Noto+Sans+JP:wght@100..900&display=swap',
    [],
    null
  );

  // Swiper CSS
  wp_enqueue_style(
    'swiper',
    'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css',
    [],
    null
  );

  // 自作CSS（gulp出力）
  wp_enqueue_style(
    'theme-style',
    get_theme_file_uri('/assets/css/style.css'),
    [],
    filemtime(get_theme_file_path('/assets/css/style.css'))
  );

  // Swiper JS
  wp_enqueue_script(
    'swiper',
    'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js',
    [],
    null,
    true
  );

  // jQuery（WP同梱）
  wp_enqueue_script('jquery');

  // 自作JS
  wp_enqueue_script(
    'theme-script',
    get_theme_file_uri('/assets/js/script.js'),
    ['jquery', 'swiper'],
    filemtime(get_theme_file_path('/assets/js/script.js')),
    true
  );
});


//カスタム投稿、voice
add_action('pre_get_posts', function ($query) {
  if (is_admin() || !$query->is_main_query()) return;

  // voice のアーカイブだけ
  if ($query->is_post_type_archive('voice')) {
    $query->set('posts_per_page', 6);

    // cc（タブ）の絞り込み
    if (!empty($_GET['cc']) && $_GET['cc'] !== 'all') {
      $query->set('tax_query', [
        [
          'taxonomy' => 'voice_category',
          'field'    => 'slug',
          'terms'    => sanitize_text_field($_GET['cc']),
        ]
      ]);
    }
  }
});

// カスタム投稿 campaign
add_action('pre_get_posts', function ($query) {
  if (is_admin() || !$query->is_main_query()) return;

  if ($query->is_post_type_archive('campaign')) {
    $query->set('post_type', 'campaign');
    $query->set('post_status', 'publish');
    $query->set('posts_per_page', 4);

    if (!empty($_GET['cc']) && $_GET['cc'] !== 'all') {
      $query->set('tax_query', [
        [
          'taxonomy' => 'campaign_category',
          'field'    => 'slug',
          'terms'    => sanitize_text_field($_GET['cc']),
        ]
      ]);
    }
  }
});