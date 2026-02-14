<?php get_header(); ?>
<main class="front-page">
  <section id="mv" class="mv">
    <div class="swiper mv-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide mv-swiper-slide mv-slide1">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/mv1.png')); ?>" alt="海の中のカメ">
        </div>
        <div class="swiper-slide mv-swiper-slide mv-slide2">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/mv2.png')); ?>" alt="海の中のカメとダイバー">
        </div>
        <div class="swiper-slide mv-swiper-slide mv-slide3">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/mv3.png')); ?>" alt="海上の海と船と島">
        </div>
        <div class="swiper-slide mv-swiper-slide mv-slide4">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/mv4.png')); ?>" alt="砂浜">
        </div>
      </div>
    </div>
    <div class="mv__content">
      <h2 class="mv__title">DIVING</h2>
      <p class="mv__sub">into the ocean</p>
    </div>
  </section>
  <section class="campaign">
    <div class="campaign__inner inner">
      <div class="heading">
        <p class="heading__en">Campaign</p>
        <h2 class="heading__ja">キャンペーン</h2>
      </div>
      <div class="campaign__nav u-desktop">
        <div class="swiper-button-prev campaign__nav-prev">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/campaign-prev.png')); ?>" alt="前へ">
        </div>
        <div class="swiper-button-next campaign__nav-next">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/campaign-next.png')); ?>" alt="次へ">
        </div>
      </div>
      <div class="swiper campaign__swiper">
        <div class="swiper-wrapper campaign-cards">
          <?php
          $args = [
            'post_type'      => 'campaign',
            'posts_per_page' => 4,      // トップは4つまで
            'orderby'        => 'date', // 新しい順
            'order'          => 'DESC',
          ];
          $q = new WP_Query($args);

          if ($q->have_posts()):
            while ($q->have_posts()): $q->the_post();

              // タグ（タクソノミー名）
              $tag_name = '';
              $terms = get_the_terms(get_the_ID(), 'campaign_category');
              if (!is_wp_error($terms) && !empty($terms)) {
                $tag_name = $terms[0]->name;
              }

              // ACF
              $before = get_field('price_before');
              $after  = get_field('price_after');
          ?>
              <div class="swiper-slide campaign-card">
                <div class="campaign-card__img">
                  <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('large', ['alt' => the_title_attribute(['echo' => false])]); ?>
                  <?php else: ?>
                    <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/no-image.png')); ?>" alt="No image">
                  <?php endif; ?>
                </div>

                <div class="campaign-card__body">
                  <?php if ($tag_name): ?>
                    <span class="campaign-card__tag"><?php echo esc_html($tag_name); ?></span>
                  <?php endif; ?>

                  <p class="campaign-card__title"><?php the_title(); ?></p>
                  <div class="campaign-card__bar"></div>
                  <p class="campaign-card__desc">全部コミコミ(お一人様)</p>

                  <div class="campaign-card__price">
                    <?php if ($before): ?>
                      <span class="campaign-card__old">¥<?php echo esc_html(number_format($before)); ?></span>
                    <?php endif; ?>
                    <?php if ($after): ?>
                      <span class="campaign-card__new">¥<?php echo esc_html(number_format($after)); ?></span>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
          <?php
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
        </div>
      </div>
      <div class="button-wrapper-outer campaign-button">
        <div class="button-wrapper">
          <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="button slide">View more<svg xmlns="http://www.w3.org/2000/svg" width="41" height="7"
              viewBox="0 0 41 7" fill="none">
              <path d="M0.5 6.5H40.5L33.5 0.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg></a>
        </div>
      </div>
    </div>
  </section>
  <section class="about">
    <div class="about__inner inner">
      <div class="heading">
        <p class="heading__en">About us</p>
        <h2 class="heading__ja">私たちについて</h2>
      </div>
      <div class="about__content">
        <div class="about__img">
          <div class="about__img-left">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/ocean1.png')); ?>" alt="屋根と青空と木">
          </div>
          <h3 class="about__catch u-desktop">Dive into<br>the Ocean</h3>
          <div class="about__img-right">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/ocean2.png')); ?>" alt="海の中のミスジチョウチョウウオ">
            <div class="about__img-right-text u-desktop">
              <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
              <div class="button-wrapper-outer about-button">
                <div class="button-wrapper">
                  <a href="<?php echo esc_url(home_url("/about-us")) ?>" class="button slide">View more<svg xmlns="http://www.w3.org/2000/svg" width="41"
                      height="7" viewBox="0 0 41 7" fill="none">
                      <path d="M0.5 6.5H40.5L33.5 0.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="about__text u-mobile">
          <h3 class="about__text-title">
            Dive into<br>the Ocean
          </h3>
          <p class="about__text-body">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
          <div class="button-wrapper-outer about-button">
            <div class="button-wrapper">
              <a href="<?php echo esc_url(home_url("/about-us")) ?>" class="button slide">View more<svg xmlns="http://www.w3.org/2000/svg" width="41" height="7"
                  viewBox="0 0 41 7" fill="none">
                  <path d="M0.5 6.5H40.5L33.5 0.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="information">
    <div class="information__inner inner">
      <div class="heading">
        <p class="heading__en">Information</p>
        <h2 class="heading__ja">ダイビング情報</h2>
      </div>
      <div class="information__content">
        <div class="information__image colorbox">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/ocean3.png')); ?>" alt="海の中のミスジチョウチョウウオと珊瑚礁">
        </div>
        <div class="information__text">
          <h3 class="information__text-title">ライセンス講習</h3>
          <div class="information__bar"></div>
          <p class="information__description">当店はダイビングライセンス（Cカード）世界最大の教育機関paidの「正規店」として店舗登録されています。<br>
            正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
          <div class="button-wrapper-outer information__button">
            <div class="button-wrapper">
              <a href="<?php echo esc_url(home_url("/information")) ?>" class="button slide">View more<svg xmlns="http://www.w3.org/2000/svg" width="41" height="7"
                  viewBox="0 0 41 7" fill="none">
                  <path d="M0.5 6.5H40.5L33.5 0.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="blog">
    <div class="blog__inner inner">
      <div class="heading">
        <p class="heading__en blog-title">Blog</p>
        <h2 class="heading__ja blog-title">ブログ</h2>
      </div>
      <div class="blog__boxes">
        <?php
        $blog_query = new WP_Query([
          'post_type'      => 'post',
          'posts_per_page' => 3,
          'post_status'    => 'publish',
        ]);

        if ($blog_query->have_posts()) :
          while ($blog_query->have_posts()) : $blog_query->the_post();
        ?>
            <a href="<?php the_permalink(); ?>" class="blog__box hover-opacity hover-zoom">
              <div class="blog__box-image">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('full'); ?>
                <?php else : ?>
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/no-image.png')); ?>" alt="NoImage画像" />
                <?php endif; ?>
              </div>

              <time class="blog__box-time" datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>">
                <?php echo esc_html(get_the_date('Y.m.d')); ?>
              </time>

              <h3 class="blog__box-title"><?php echo esc_html(wp_trim_words(get_the_title(), 17, '')); ?></h3>
              <div class="blog__box-bar"></div>

              <p class="blog__box-text"><?php echo esc_html(wp_trim_words(get_the_content(), 80, '')); ?></p>
            </a>
        <?php
          endwhile;
          wp_reset_postdata();
        else :
          echo '<p>記事が投稿されていません</p>';
        endif;
        ?>
      </div>
      <div class="button-wrapper-outer blog__button">
        <div class="button-wrapper">
          <a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>" class="button slide">View more<svg xmlns="http://www.w3.org/2000/svg" width="41" height="7"
              viewBox="0 0 41 7" fill="none">
              <path d="M0.5 6.5H40.5L33.5 0.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg></a>
        </div>
      </div>
    </div>
  </section>
  <section class="voice">
    <div class="voice__inner inner">
      <div class="heading">
        <p class="heading__en">Voice</p>
        <h2 class="heading__ja">お客様の声</h2>
      </div>
      <div class="voice__boxes">
        <?php
        $q = new WP_Query([
          'post_type'      => 'voice',
          'posts_per_page' => 2,      // トップは2件
          'orderby'        => 'date',
          'order'          => 'DESC',
        ]);

        if ($q->have_posts()):
          while ($q->have_posts()): $q->the_post();

            // ACF（フィールド名は君のやつに合わせて）
            $age    = get_field('voice_age');     // 例: "20代"
            $gender = get_field('voice_gender');  // 例: "女性"（空なら空でOK）

            // 表示用： "20代(女性)" みたいに組み立て（どっちか無くても破綻しない）
            $age_gender = '';
            if ($age && $gender) {
              $age_gender = $age . '(' . $gender . ')';
            } elseif ($age) {
              $age_gender = $age;
            } elseif ($gender) {
              $age_gender = $gender;
            }

            // タクソノミー（タグ）
            $tag_name = '';
            $terms = get_the_terms(get_the_ID(), 'voice_category');
            if (!is_wp_error($terms) && !empty($terms)) {
              $tag_name = $terms[0]->name; // とりあえず先頭1個
            }
        ?>
            <div class="voice__box">
              <div class="voice__box-wrap">
                <div class="voice__box-left">
                  <div class="voice__box-meta">
                    <?php if ($age_gender): ?>
                      <div class="voice__box-age"><?php echo esc_html($age_gender); ?></div>
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
                    <?php the_post_thumbnail('large', [
                      'alt' => the_title_attribute(['echo' => false]),
                    ]); ?>
                  <?php else: ?>
                    <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/no-image.png')); ?>"
                      alt="<?php echo esc_attr(get_the_title()); ?>">
                  <?php endif; ?>
                </div>
              </div>

              <p class="voice__box-text">
                <?php echo esc_html(wp_trim_words(get_the_content(), 170, '')); ?>
              </p>
            </div>
        <?php
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </div>
      <div class="button-wrapper-outer voice-button">
        <div class="button-wrapper">
          <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" class="button slide">View more<svg xmlns="http://www.w3.org/2000/svg" width="41" height="7"
              viewBox="0 0 41 7" fill="none">
              <path d="M0.5 6.5H40.5L33.5 0.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg></a>
        </div>
      </div>
    </div>
  </section>
  <section class="price">
    <div class="price__inner inner">
      <div class="heading">
        <p class="heading__en">Price</p>
        <h2 class="heading__ja">料金一覧</h2>
      </div>
      <div class="price__contents">
        <div class="price__list">
          <div class="price__category">
            <h3 class="price__category-title">ライセンス講習</h3>
            <div class="price__category-bar"></div>
            <div class="price__item">
              <div class="price__item-name">オープンウォーターダイバーコース</div>
              <div class="price__item-price">¥50,000</div>
            </div>
            <div class="price__item">
              <div class="price__item-name">アドバンスドオープンウォーターコース</div>
              <div class="price__item-price">¥60,000</div>
            </div>
            <div class="price__item">
              <div class="price__item-name">レスキュー＋EFRコース</div>
              <div class="price__item-price">¥70,000</div>
            </div>
          </div>
          <div class="price__category">
            <h3 class="price__category-title">体験ダイビング</h3>
            <div class="price__category-bar"></div>
            <div class="price__item">
              <div class="price__item-name">ビーチ体験ダイビング(半日)</div>
              <div class="price__item-price">¥7,000</div>
            </div>
            <div class="price__item">
              <div class="price__item-name">ビーチ体験ダイビング(1日)</div>
              <div class="price__item-price">¥14,000</div>
            </div>
            <div class="price__item">
              <div class="price__item-name">ボート体験ダイビング(半日)</div>
              <div class="price__item-price">¥10,000</div>
            </div>
            <div class="price__item">
              <div class="price__item-name">ボート体験ダイビング(1日)</div>
              <div class="price__item-price">¥18,000</div>
            </div>
          </div>
          <div class="price__category">
            <h3 class="price__category-title">ファンダイビング</h3>
            <div class="price__category-bar"></div>
            <div class="price__item">
              <div class="price__item-name">ビーチダイビング(2ダイブ)</div>
              <div class="price__item-price">¥14,000</div>
            </div>
            <div class="price__item">
              <div class="price__item-name">ボートダイビング(2ダイブ)</div>
              <div class="price__item-price">¥18,000</div>
            </div>
            <div class="price__item">
              <div class="price__item-name">スペシャルダイビング(2ダイブ)</div>
              <div class="price__item-price">¥24,000</div>
            </div>
            <div class="price__item">
              <div class="price__item-name">ナイトダイビング(1ダイブ)</div>
              <div class="price__item-price">¥10,000</div>
            </div>
          </div>
          <div class="price__category">
            <h3 class="price__category-title">スペシャルダイビング</h3>
            <div class="price__category-bar"></div>
            <div class="price__item">
              <div class="price__item-name">貸切ダイビング(2ダイブ)</div>
              <div class="price__item-price">¥24,000</div>
            </div>
            <div class="price__item">
              <div class="price__item-name">1日ダイビング(3ダイブ)</div>
              <div class="price__item-price">¥32,000</div>
            </div>
          </div>
        </div>
        <div class="price__img colorbox u-desktop">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/price-img.png')); ?>" alt="熱帯魚と珊瑚礁">
        </div>
        <div class="price__img colorbox u-mobile">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/price-sp.png')); ?>" alt="ウミガメ">
        </div>
      </div>
      <div class="button-wrapper-outer price-button">
        <div class="button-wrapper">
          <a href="<?php echo esc_url(home_url("/price")) ?>" class="button slide">View more<svg xmlns="http://www.w3.org/2000/svg" width="41" height="7"
              viewBox="0 0 41 7" fill="none">
              <path d="M0.5 6.5H40.5L33.5 0.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg></a>
        </div>
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