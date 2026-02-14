<?php get_header(); ?>

<main class="archive">
  <section class="sub-mv" id="mv">
    <div class="sub-mv__img">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/voice/voice-mv.png')); ?>" alt="海の中のミスジチョウチョウウオ">
    </div>
    <div class="sub-mv__content">
      <h2 class="sub-mv__title">Voice</h2>
    </div>
  </section>

  <?php if (function_exists('bcn_display')) : ?>
    <div class="inner">
      <nav class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <?php bcn_display(); ?>
      </nav>
    </div>
  <?php endif; ?>

  <div class="voice-inner inner">
    <?php
      $taxonomy = 'voice_category';
      $current  = isset($_GET['cc']) ? sanitize_text_field($_GET['cc']) : 'all';

      $terms = get_terms([
        'taxonomy'   => $taxonomy,
        'hide_empty' => true,
      ]);

      $base = get_post_type_archive_link('voice');

      $paged = max(1, get_query_var('paged'));

      $args = [
        'post_type'      => 'voice',
        'posts_per_page' => 6,        // 課題の表示数に合わせて
        'paged'          => $paged,
      ];

      // cc が all じゃなければタクソノミー絞り込み
      if ($current !== 'all') {
        $args['tax_query'] = [
          [
            'taxonomy' => $taxonomy,
            'field'    => 'slug',
            'terms'    => $current,
          ]
        ];
      }

      $q = new WP_Query($args);
    ?>

    <!-- tabs -->
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

    <!-- cards -->
    <div class="voice__boxes">
      <?php if ($q->have_posts()): ?>
        <?php while ($q->have_posts()): $q->the_post(); ?>

          <?php
            // ACF
            $age    = get_field('voice_age');     // 例: "20代"
            $gender = get_field('voice_gender');  // 例: "女性"

            // タクソノミー（表示用タグ）
            $tag_name = '';
            $post_terms = get_the_terms(get_the_ID(), $taxonomy);
            if (!is_wp_error($post_terms) && !empty($post_terms)) {
              $tag_name = $post_terms[0]->name;
            }

            // 表示文字（20代(女性)みたいに）
            $meta = '';
            if ($age && $gender) {
              $meta = $age . '(' . $gender . ')';
            } elseif ($age) {
              $meta = $age;
            } elseif ($gender) {
              $meta = $gender;
            }
          ?>

          <div class="voice__box">
            <div class="voice__box-wrap">
              <div class="voice__box-left">
                <div class="voice__box-meta">
                  <?php if ($meta): ?>
                    <div class="voice__box-age"><?php echo esc_html($meta); ?></div>
                  <?php endif; ?>

                  <?php if ($tag_name): ?>
                    <div class="voice__box-tag"><?php echo esc_html($tag_name); ?></div>
                  <?php endif; ?>
                </div>

                <h3 class="voice__box-title"><?php the_title(); ?></h3>
                <div class="voice__box-bar"></div>
              </div>

              <div class="voice__box-right colorbox">
                <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('large', ['alt' => esc_attr(get_the_title())]); ?>
                <?php else: ?>
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/no-image.png')); ?>" alt="">
                <?php endif; ?>
              </div>
            </div>

            <p class="voice__box-text"><?php echo esc_html( wp_trim_words( get_the_content(), 170, '' ) ); ?></p>
          </div>

        <?php endwhile; wp_reset_postdata(); ?>
      <?php else: ?>
        <p>投稿がありません。</p>
      <?php endif; ?>
    </div>

    <!-- pagination -->
    <?php
      $total = $q->max_num_pages;

      if ($total > 1) {
        $is_sp = wp_is_mobile();
        $mid   = $is_sp ? 1 : 2;
        $end   = $is_sp ? 0 : 1;

        $links = paginate_links([
          'total'     => $total,
          'current'   => $paged,
          'type'      => 'array',
          'mid_size'  => $mid,
          'end_size'  => $end,
          // ✅ cc を引き継ぐ（ここ重要）
          'add_args'  => ($current !== 'all') ? ['cc' => $current] : false,
          'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none"><path d="M8.5 0.5L0.5 8.5L8.5 16.5" stroke="#408F95" stroke-linecap="round" stroke-linejoin="round" /></svg>',
          'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none"><path d="M0.5 0.5L8.5 8.5L0.5 16.5" stroke="#408F95" stroke-linecap="round" stroke-linejoin="round" /></svg>',
        ]);

        if ($links):
          $first = reset($links);
          $has_prev = (is_string($first) && strpos($first, 'prev') !== false);
          $prev = $has_prev ? array_shift($links) : null;

          $last = end($links);
          $has_next = (is_string($last) && strpos($last, 'next') !== false);
          $next = $has_next ? array_pop($links) : null;
    ?>
      <ul class="pagination__list">
        <li class="pagination__prev <?php echo $has_prev ? '' : 'is-hidden'; ?>">
          <?php if ($has_prev) echo str_replace('page-numbers', 'pagination__link pagination__arrow', $prev); ?>
        </li>

        <li>
          <ul class="pagination__numbers">
            <?php foreach ($links as $link):
              $li_class = 'pagination__number';
              if (strpos($link, 'current') !== false) $li_class .= ' is-current';
              $link = str_replace('page-numbers', 'pagination__link', $link);
              echo '<li class="' . esc_attr($li_class) . '">' . $link . '</li>';
            endforeach; ?>
          </ul>
        </li>

        <li class="pagination__next <?php echo $has_next ? '' : 'is-hidden'; ?>">
          <?php if ($has_next) echo str_replace('page-numbers', 'pagination__link pagination__arrow', $next); ?>
        </li>
      </ul>
    <?php endif; } ?>

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