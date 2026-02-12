<?php get_header(); ?>
<main class="sub-blog">
  <section class="sub-mv" id="mv">
    <div class="sub-mv__img">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/blog/blog-mv.png')); ?>" alt="海の中のミスジチョウチョウウオ">
    </div>
    <div class="sub-mv__content">
      <h2 class="sub-mv__title">Blog</h2>
    </div>
  </section>
  <?php if (function_exists('bcn_display')) : ?>
    <div class="inner">
      <nav class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <?php bcn_display(); ?>
      </nav>
    </div>
  <?php endif; ?>

  <div class="blog">
    <div class="blog-inner inner">
      <div class="blog-list">

        <?php if (have_posts()) : ?>
          <div class="blog__boxes">
            <?php while (have_posts()) : the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="blog__box hover-opacity hover-zoom">
                <div class="blog__box-image">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('full'); ?>
                  <?php else : ?>
                    <img class="news__img" src="<?php echo esc_url(get_theme_file_uri("/assets/images/no-image.png")); ?>" alt="NoImage画像" />
                  <?php endif; ?>
                </div>
                <time class="blog__box-time" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                <h3 class="blog__box-title"><?php echo wp_trim_words(get_the_title(), 17, '…'); ?></h3>
                <div class="blog__box-bar"></div>
                <p class="blog__box-text"><?php echo wp_trim_words(get_the_content(), 80, '…'); ?></p>
              </a>
            <?php endwhile; ?>
          </div>
        <?php else : ?>
          <p>記事が投稿されていません</p>
        <?php endif; ?>

        <?php
        global $wp_query;

        $is_sp = wp_is_mobile(); // SP判定（WP標準）
        $mid   = $is_sp ? 1 : 2; // SP: 現在±1（合計3） / PC: 現在±2（合計5）
        $end   = $is_sp ? 0 : 1; // PCだけ端も出す（見た目が6前後になる）

        $links = paginate_links([
          'total'     => $wp_query->max_num_pages,
          'current'   => max(1, get_query_var('paged')),
          'type'      => 'array',
          'mid_size'  => $mid,
          'end_size'  => $end,
          'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none"><path d="M8.5 0.5L0.5 8.5L8.5 16.5" stroke="#408F95" stroke-linecap="round" stroke-linejoin="round" /></svg>',
          'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none"><path d="M0.5 0.5L8.5 8.5L0.5 16.5" stroke="#408F95" stroke-linecap="round" stroke-linejoin="round" /></svg>',
        ]);

        if ($links) :

          // 先頭が prev か確認
          $first = reset($links);
          $has_prev = (is_string($first) && strpos($first, 'prev') !== false);
          if ($has_prev) {
            $prev = array_shift($links);
          } else {
            $prev = null;
          }

          // 末尾が next か確認
          $last = end($links);
          $has_next = (is_string($last) && strpos($last, 'next') !== false);
          if ($has_next) {
            $next = array_pop($links);
          } else {
            $next = null;
          }
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


        <!-- <ul class="pagination__list">
          <li class="pagination__prev">
            <a href="#" class="pagination__link pagination__arrow">
              <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none">
                <path d="M8.5 0.5L0.5 8.5L8.5 16.5" stroke="#408F95" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </a>
          </li>
          <li>
            <ul class="pagination__numbers">
              <li class="pagination__number is-current">
                <span class="pagination__link" aria-current="page">1</span>
              </li>
              <li class="pagination__number">
                <a href="#" class="pagination__link">2</a>
              </li>
              <li class="pagination__number">
                <a href="#" class="pagination__link">3</a>
              </li>
              <li class="pagination__number">
                <a href="#" class="pagination__link">4</a>
              </li> -->
        <!-- SPの時、以下は消す。 -->
        <!-- <li class="pagination__number u-desktop">
                <a href="#" class="pagination__link">5</a>
              </li>
              <li class="pagination__number u-desktop">
                <a href="#" class="pagination__link">6</a>
              </li>
            </ul>
          </li>
          <li class="pagination__next">
            <a href="#" class="pagination__link pagination__arrow">
              <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none">
                <path d="M0.5 0.5L8.5 8.5L0.5 16.5" stroke="#408F95" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </a>
          </li>
        </ul> -->
      </div>



      <div class="blog-sidebar">
        <div class="blog-sidebar__box">
          <div class="blog-sidebar__head">
            <div class="blog-sidebar__head-img"></div>
            <div class="blog-sidebar__head-text">人気記事</div>
          </div>
          <div class="blog-sidebar__body">
            <a href="#" class="blog-sidebar__popular-box">
              <div class="blog-sidebar__popular-img">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/blog/popular1.png')); ?>" alt="シテンヤッコ">
              </div>
              <div class="blog-sidebar__popular-column">
                <time class="blog-sidebar__popular-time" datetime="2023-11-17">2023.11.17</time>
                <h3 class="blog-sidebar__popular-title">ライセンス取得</h3>
              </div>
            </a>

            <a href="#" class="blog-sidebar__popular-box">
              <div class="blog-sidebar__popular-img">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/blog/popular2.png')); ?>" alt="ウミガメ">
              </div>
              <div class="blog-sidebar__popular-column">
                <time class="blog-sidebar__popular-time" datetime="2023-11-17">2023.11.17</time>
                <h3 class="blog-sidebar__popular-title">ウミガメと泳ぐ</h3>
              </div>
            </a>

            <a href="#" class="blog-sidebar__popular-box">
              <div class="blog-sidebar__popular-img">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/blog/popular3.png')); ?>" alt="カクレクマノミと珊瑚礁">
              </div>
              <div class="blog-sidebar__popular-column">
                <time class="blog-sidebar__popular-time" datetime="2023-11-17">2023.11.17</time>
                <h3 class="blog-sidebar__popular-title">カクレクマノミ</h3>
              </div>
            </a>

          </div>
        </div>
        <div class="blog-sidebar__box">
          <div class="blog-sidebar__head">
            <div class="blog-sidebar__head-img"></div>
            <div class="blog-sidebar__head-text">口コミ</div>
          </div>
          <div class="blog-sidebar__review">
            <div class="blog-sidebar__review-img">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/blog/couple.png')); ?>" alt="30代夫婦">
            </div>
            <div class="blog-sidebar__review-age">30代(カップル)</div>
            <h3 class="blog-sidebar__review-title">ここにタイトルが入ります。ここにタイトル</h3>
            <div class="button-wrapper-outer blog-sidebar__review-button">
              <div class="button-wrapper">
                <a href="#" class="button slide">View more<svg xmlns="http://www.w3.org/2000/svg" width="41"
                    height="7" viewBox="0 0 41 7" fill="none">
                    <path d="M0.5 6.5H40.5L33.5 0.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg></a>
              </div>
            </div>
          </div>
        </div>
        <div class="blog-sidebar__box">
          <div class="blog-sidebar__head">
            <div class="blog-sidebar__head-img"></div>
            <div class="blog-sidebar__head-text">キャンペーン</div>
          </div>
          <div class="blog-sidebar__campaign">
            <!-- トップページの流用。 -->
            <div class="blog-sidebar__campaign-card">
              <div class="blog-sidebar__campaign-card-img">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/campaign1.png')); ?>" alt="色とりどりの熱帯魚が泳ぐ水中の様子">
              </div>
              <div class="blog-sidebar__campaign-body">
                <h3 class="blog-sidebar__campaign-title">ライセンス取得</h3>
                <div class="campaign-card__bar"></div>
                <p class="blog-sidebar__campaign-desc">全部コミコミ(お一人様)</p>
                <div class="blog-sidebar__campaign-price">
                  <span class="blog-sidebar__campaign-old">¥56,000</span>
                  <span class="blog-sidebar__campaign-new">¥46,000</span>
                </div>
              </div>
            </div>
            <div class="blog-sidebar__campaign-card">
              <div class="blog-sidebar__campaign-card-img">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/campaign2.png')); ?>" alt="砂浜の船と海">
              </div>
              <div class="blog-sidebar__campaign-body">
                <h3 class="blog-sidebar__campaign-title">貸切体験ダイビング</h3>
                <div class="campaign-card__bar"></div>
                <p class="blog-sidebar__campaign-desc">全部コミコミ(お一人様)</p>
                <div class="blog-sidebar__campaign-price">
                  <span class="blog-sidebar__campaign-old">¥24,000</span>
                  <span class="blog-sidebar__campaign-new">¥18,000</span>
                </div>
              </div>
            </div>
            <div class="button-wrapper-outer blog-sidebar__campaign-button">
              <div class="button-wrapper">
                <a href="#" class="button slide">View more<svg xmlns="http://www.w3.org/2000/svg" width="41"
                    height="7" viewBox="0 0 41 7" fill="none">
                    <path d="M0.5 6.5H40.5L33.5 0.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg></a>
              </div>
            </div>
          </div>
        </div>
        <div class="blog-sidebar__box">
          <div class="blog-sidebar__head">
            <div class="blog-sidebar__head-img"></div>
            <div class="blog-sidebar__head-text">アーカイブ</div>
          </div>
          <div class="blog-sidebar__archive">
            <div class="archive">
              <div class="archive__year" data-year="2023">▼2023</div>
              <ul class="archive__month">
                <li>▶3月</li>
                <li>▶2月</li>
                <li>▶1月</li>
              </ul>
              <div class="archive__year" data-year="2024">▼2024</div>
            </div>
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