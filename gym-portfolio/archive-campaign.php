<?php get_header(); ?>
<main class="archive">
  <section class="sub-mv" id="mv">
    <div class="sub-mv__img-campaign">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/campaign/campaign-mv.png')); ?>" alt="海の中のミスジチョウチョウウオ">
    </div>
    <div class="sub-mv__content">
      <h2 class="sub-mv__title">Campaign</h2>
    </div>
  </section>
  <?php if (function_exists('bcn_display')) : ?>
    <div class="inner">
      <nav class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <?php bcn_display(); ?>
      </nav>
    </div>
  <?php endif; ?>

  <div class="campaign-inner inner">
    <?php
    $taxonomy = 'campaign_category';
    $current  = isset($_GET['cc']) ? sanitize_text_field($_GET['cc']) : 'all';
    $terms = get_terms([
      'taxonomy'   => $taxonomy,
      'hide_empty' => true,
    ]);
    $base = get_post_type_archive_link('campaign');
    ?>
    <div class="tabs">
      <ul class="tabs__list">
        <li class="tabs__item <?php echo ($current === 'all') ? 'is-active' : ''; ?>">
          <a href="<?php echo esc_url($base); ?>" class="tabs__link">ALL</a>
        </li>

        <?php foreach ($terms as $term): ?>
          <li class="tabs__item <?php echo ($current === $term->slug) ? 'is-active' : ''; ?>">
            <a href="<?php echo esc_url(add_query_arg('cc', $term->slug, $base)); ?>" class="tabs__link">
              <?php echo esc_html($term->name); ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <section class="campaign">
      <div class="campaign-cards">
        <?php if (have_posts()): ?>
          <?php while (have_posts()): the_post(); ?>

            <?php
            // ターム名（タグ表示用）
            $tag_name = '';
            $terms = get_the_terms(get_the_ID(), 'campaign_category');
            if (!is_wp_error($terms) && !empty($terms)) {
              $tag_name = $terms[0]->name; // 先頭だけ表示
            }

            // ACF
            $before = get_field('price_before');
            $after  = get_field('price_after');
            $note   = get_field('price_note');
            $start  = get_field('period_start');
            $end    = get_field('period_end');

            $start_fmt = $start ? date('Y/n/j', strtotime($start)) : '';
            $end_fmt   = $end   ? date('n/j',   strtotime($end))   : '';
            ?>

            <div class="campaign-card">
              <div class="campaign-card__img">
                <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('large', ['alt' => the_title_attribute(['echo' => false])]); ?>
                <?php else: ?>
                  <img
                    src="<?php echo esc_url(get_theme_file_uri('/assets/images/no-image.png')); ?>"
                    alt="No image">
                <?php endif; ?>
              </div>

              <div class="campaign-card__body">
                <?php if ($tag_name): ?>
                  <div class="campaign-card__tag"><?php echo esc_html($tag_name); ?></div>
                <?php endif; ?>

                <h2 class="campaign-card__title"><?php the_title(); ?></h2>
                <div class="campaign-card__bar"></div>

                <?php if ($note): ?>
                  <div class="campaign-card__note"><?php echo esc_html($note); ?></div>
                <?php endif; ?>

                <div class="campaign-card__price">
                  <?php if ($before) : ?>
                    <div class="campaign-card__old">¥<?php echo number_format($before); ?></div>
                  <?php endif; ?>

                  <?php if ($after) : ?>
                    <div class="campaign-card__new">¥<?php echo number_format($after); ?></div>
                  <?php endif; ?>
                </div>

                <div class="campaign-card__desc u-desktop">
                  <?php echo esc_html(wp_trim_words(get_the_content(), 164, '')); ?>
                </div>

                <?php if ($start_fmt && $end_fmt): ?>
                  <div class="campaign-card__day u-desktop">
                    <?php echo esc_html($start_fmt . '-' . $end_fmt); ?>
                  </div>
                <?php endif; ?>

                <div class="campaign-card__contact u-desktop">ご予約・お問い合わせはコチラ</div>

                <div class="button-wrapper-outer campaign-button u-desktop">
                  <div class="button-wrapper">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button slide">
                      Contact us
                      <svg xmlns="http://www.w3.org/2000/svg" width="41" height="7" viewBox="0 0 41 7" fill="none">
                        <path d="M0.5 6.5H40.5L33.5 0.5" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>

          <?php endwhile; ?>
        <?php else: ?>
          <p>該当するキャンペーンはありません。</p>
        <?php endif; ?>
      </div>
    </section>

    <?php
global $wp_query;

$paged = max(1, get_query_var('paged'), get_query_var('page'));

$is_sp = wp_is_mobile();
$mid   = $is_sp ? 1 : 2;
$end   = $is_sp ? 0 : 1;

$links = paginate_links([
  'total'     => $wp_query->max_num_pages,
  'current'   => $paged,
  'type'      => 'array',
  'mid_size'  => $mid,
  'end_size'  => $end,
  'add_args'  => ($current !== 'all') ? ['cc' => $current] : false,
  'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none"><path d="M8.5 0.5L0.5 8.5L8.5 16.5" stroke="#408F95" stroke-linecap="round" stroke-linejoin="round" /></svg>',
  'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none"><path d="M0.5 0.5L8.5 8.5L0.5 16.5" stroke="#408F95" stroke-linecap="round" stroke-linejoin="round" /></svg>',
]);

if ($links):

  // 先頭が prev か確認
  $first = reset($links);
  $has_prev = (is_string($first) && strpos($first, 'prev') !== false);
  $prev = $has_prev ? array_shift($links) : null;

  // 末尾が next か確認
  $last = end($links);
  $has_next = (is_string($last) && strpos($last, 'next') !== false);
  $next = $has_next ? array_pop($links) : null;
?>
  <ul class="pagination__list">

    <li class="pagination__prev <?php echo $has_prev ? '' : 'is-hidden'; ?>">
      <?php
      if ($has_prev) {
        echo str_replace('page-numbers', 'pagination__link pagination__arrow', $prev);
      }
      ?>
    </li>

    <li>
      <ul class="pagination__numbers">
        <?php
        foreach ($links as $link) {
          $li_class = 'pagination__number';
          if (strpos($link, 'current') !== false) $li_class .= ' is-current';

          $link = str_replace('page-numbers', 'pagination__link', $link);

          echo '<li class="' . esc_attr($li_class) . '">' . $link . '</li>';
        }
        ?>
      </ul>
    </li>

    <li class="pagination__next <?php echo $has_next ? '' : 'is-hidden'; ?>">
      <?php
      if ($has_next) {
        echo str_replace('page-numbers', 'pagination__link pagination__arrow', $next);
      }
      ?>
    </li>

  </ul>
<?php endif; ?>
      


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