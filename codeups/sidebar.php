<div class="blog-sidebar">
        <div class="blog-sidebar__box">
          <div class="blog-sidebar__head">
            <div class="blog-sidebar__head-img"></div>
            <div class="blog-sidebar__head-text">人気記事</div>
          </div>
          <div class="blog-sidebar__body">
            <?php
            $sidebar_query = new WP_Query([
              'post_type'      => 'post',
              'posts_per_page' => 3,
              'post_status'    => 'publish',
            ]);

            if ($sidebar_query->have_posts()) :
              while ($sidebar_query->have_posts()) : $sidebar_query->the_post();
            ?>
                <a href="<?php the_permalink(); ?>" class="blog-sidebar__popular-box hover-opacity">
                  <div class="blog-sidebar__popular-img">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('thumbnail'); ?>
                    <?php else : ?>
                      <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/no-image.png')); ?>" alt="NoImage画像">
                    <?php endif; ?>
                  </div>

                  <div class="blog-sidebar__popular-column">
                    <time class="blog-sidebar__popular-time" datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>">
                      <?php echo esc_html(get_the_date('Y.m.d')); ?>
                    </time>
                    <h3 class="blog-sidebar__popular-title">
                      <?php echo esc_html(wp_trim_words(get_the_title(), 17, '')); ?>
                    </h3>
                  </div>
                </a>
            <?php
              endwhile;
              wp_reset_postdata();
            else :
              echo '<p>記事が投稿されていません</p>';
            endif;
            ?>
          </div>
        </div>
        <div class="blog-sidebar__box">
          <div class="blog-sidebar__head">
            <div class="blog-sidebar__head-img"></div>
            <div class="blog-sidebar__head-text">口コミ</div>
          </div>
          <div class="blog-sidebar__review">
            <?php
            $voice_query = new WP_Query([
              'post_type'      => 'voice',
              'posts_per_page' => 1,
            ]);

            if ($voice_query->have_posts()) :
              while ($voice_query->have_posts()) : $voice_query->the_post();
            ?>
                <div class="blog-sidebar__review-img">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                  <?php else : ?>
                    <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/no-image.png')); ?>" alt="画像がありません">
                  <?php endif; ?>
                </div>

                <div class="blog-sidebar__review-age">
                  <?php
                  $age    = get_field('voice_age');
                  $gender = get_field('voice_gender');

                  if ($age || $gender) {
                    echo esc_html($age) . '代';
                    if ($gender) {
                      echo '（' . esc_html($gender) . '）';
                    }
                  }
                  ?>
                </div>

                <h3 class="blog-sidebar__review-title"><?php the_title(); ?></h3>

            <?php
              endwhile;
              wp_reset_postdata();
            endif;
            ?>
            <div class="button-wrapper-outer blog-sidebar__review-button">
              <div class="button-wrapper">
                <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" class="button slide">View more<svg xmlns="http://www.w3.org/2000/svg" width="41"
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
            <?php
            $args = [
              'post_type'      => 'campaign',
              'posts_per_page' => 2,      // サイドバーは2件表示
              'orderby'        => 'date',
              'order'          => 'DESC',
            ];
            $q = new WP_Query($args);

            if ($q->have_posts()):
              while ($q->have_posts()): $q->the_post();

                // ACF
                $before = get_field('price_before');
                $after  = get_field('price_after');
            ?>
                <div class="blog-sidebar__campaign-card">
                  <div class="blog-sidebar__campaign-card-img">
                    <?php if (has_post_thumbnail()): ?>
                      <?php the_post_thumbnail('medium'); ?>
                    <?php else: ?>
                      <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/no-image.png')); ?>" alt="No image">
                    <?php endif; ?>
                  </div>

                  <div class="blog-sidebar__campaign-body">
                    <h3 class="blog-sidebar__campaign-title"><?php the_title(); ?></h3>
                    <div class="blog-sidebar__bar"></div>
                    <p class="blog-sidebar__campaign-desc">全部コミコミ(お一人様)</p>

                    <div class="blog-sidebar__campaign-price">
                      <?php if ($before): ?>
                        <span class="blog-sidebar__campaign-old">¥<?php echo esc_html(number_format($before)); ?></span>
                      <?php endif; ?>
                      <?php if ($after): ?>
                        <span class="blog-sidebar__campaign-new">¥<?php echo esc_html(number_format($after)); ?></span>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
            <?php
              endwhile;
              wp_reset_postdata();
            endif;
            ?>

            <div class="button-wrapper-outer blog-sidebar__campaign-button">
              <div class="button-wrapper">
                <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="button slide">
                  View more
                  <svg xmlns="http://www.w3.org/2000/svg" width="41" height="7" viewBox="0 0 41 7" fill="none">
                    <path d="M0.5 6.5H40.5L33.5 0.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
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
              <?php
              global $wpdb;

              // 公開済み投稿から「年・月」を抽出（新しい順）
              $rows = $wpdb->get_results("
           SELECT DISTINCT YEAR(post_date) AS y, MONTH(post_date) AS m
           FROM {$wpdb->posts}
           WHERE post_type = 'post'
           AND post_status = 'publish'
           ORDER BY post_date DESC
          ");

              $current_year = null;

              if ($rows) :
                foreach ($rows as $r) :
                  $year  = (int) $r->y;
                  $month = (int) $r->m;

                  // 年が変わったら見出し＋月リスト開始
                  if ($current_year !== $year) {
                    if ($current_year !== null) echo '</ul>'; // 前年の月ULを閉じる

                    $current_year = $year;

                    echo '<div class="archive__year" data-year="' . esc_attr($year) . '">' . esc_html($year) . '</div>';
                    echo '<ul class="archive__month">';
                  }

                  $url = get_month_link($year, $month);

                  echo '<li class="archive__month-item">';
                  echo '<a class="archive__month-link" href="' . esc_url($url) . '">' . esc_html($month) . '月</a>';
                  echo '</li>';

                endforeach;

                echo '</ul>';
              else :
                echo '<p>アーカイブがありません</p>';
              endif;
              ?>
            </div>
          </div>
        </div>
      </div>