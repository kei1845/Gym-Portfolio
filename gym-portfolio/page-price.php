  <?php get_header(); ?>
  <main class="sub-price">
    <section class="sub-mv" id="mv">
      <div class="sub-mv__img">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/gym-sub/price-mv.png')); ?>" alt="ダンベルとトレーニング器具が並ぶジム">
      </div>
      <div class="sub-mv__content">
        <h2 class="sub-mv__title">料金一覧</h2>
      </div>
    </section>
    <?php if (function_exists('bcn_display')) : ?>
      <div class="inner">
        <nav class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
          <?php bcn_display(); ?>
        </nav>
      </div>
    <?php endif; ?>

    <section class="price">
      <div class="price__inner inner">
        <div class="sub-gym">
          <h2 class="sub-gym__title">料金案内</h2>
          <p class="sub-gym__text">ご自分に合ったプランをお選びください</p>
        </div>
        <div class="price__cards">
          <div class="price-card">
            <div class="price-card__head">
              <h3 class="price-card__title">ライト</h3>
              <p class="price-card__subtitle">(まずは週1〜)</p>
            </div>
            <div class="price-card__body">
              <div class="price-card__price-area">
                <p class="price-card__price">
                  <span class="price-card__price-number">7,980</span>
                  <span class="price-card__price-yen">円</span>
                  <span class="price-card__price-tax">(税込)</span>
                </p>
                <p class="price-card__note">月額利用料</p>
              </div>
              <div class="price-card__list">
                <p class="price-card__item icon-check">利用：月4回まで</p>
                <p class="price-card__item icon-check">利用時間：全日</p>
              </div>
              <div class="price-card__target">
                <p class="price-card__target-label icon-circle">こんな人：</p>
                <p class="price-card__target-text">まずは習慣化したい</p>
              </div>
            </div>
          </div>
          <div class="price-card price-card--recommended">
            <div class="price-card__badge">おすすめ</div>
            <div class="price-card__head">
              <h3 class="price-card__title">スタンダード</h3>
              <p class="price-card__subtitle">（一番人気）</p>
            </div>
            <div class="price-card__body">
              <div class="price-card__price-area">
                <p class="price-card__price">
                  <span class="price-card__price-number">10,980</span>
                  <span class="price-card__price-yen">円</span>
                  <span class="price-card__price-tax">(税込)</span>
                </p>
                <p class="price-card__note">月額利用料</p>
              </div>
              <div class="price-card__list">
                <p class="price-card__item icon-check">利用：通い放題</p>
                <p class="price-card__item icon-check">利用時間：全日</p>
              </div>
              <div class="price-card__target">
                <p class="price-card__target-label icon-circle">こんな人：</p>
                <p class="price-card__target-text">しっかり鍛えたい</p>
              </div>
            </div>
          </div>
          <div class="price-card">
            <div class="price-card__head">
              <h3 class="price-card__title">プレミアム</h3>
              <p class="price-card__subtitle">（サポート重視）</p>
            </div>
            <div class="price-card__body">
              <div class="price-card__price-area">
                <p class="price-card__price">
                  <span class="price-card__price-number">14,980</span>
                  <span class="price-card__price-yen">円</span>
                  <span class="price-card__price-tax">(税込)</span>
                </p>
                <p class="price-card__note">月額利用料</p>
              </div>
              <div class="price-card__list">
                <p class="price-card__item icon-check">利用：通い放題</p>
                <p class="price-card__item icon-check">特典：月2回フォームチェック<br>（15分）</p>
              </div>
              <div class="price-card__target">
                <p class="price-card__target-label icon-circle">こんな人：</p>
                <p class="price-card__target-text">無駄なく結果を出したい</p>
              </div>
            </div>
          </div>
        </div>

        <div class="sub-gym">
          <h2 class="sub-gym__title">その他の費用</h2>
          <p class="sub-gym__text">入会時に必要な費用や<br class="u-mobile">追加オプションもご確認ください。</p>
        </div>
        <div class="price-extra">
          <div class="price-extra__card">
            <div class="price-extra__head">
              <h3 class="price-extra__title">入会時にかかる費用</h3>
            </div>
            <div class="price-extra__list">
              <div class="price-extra__item">
                <span class="price-extra__label">入会金</span>
                <span class="price-extra__value">10,000円</span>
              </div>
              <div class="price-extra__item-text">
                ※入会時に一度だけ発生します
              </div>
            </div>
          </div>
          <div class="price-extra__card">
            <div class="price-extra__head">
              <h3 class="price-extra__title">オプション</h3>
            </div>
            <div class="price-extra__list">
              <div class="price-extra__item">
                <span class="price-extra__label">パーソナル(60分)</span>
                <span class="price-extra__value">10,000円</span>
              </div>
              <div class="price-extra__item">
                <span class="price-extra__label">ロッカー契約</span>
                <span class="price-extra__value">1,100円</span>
              </div>
              <div class="price-extra__item">
                <span class="price-extra__label">レンタルセット</span>
                <span class="price-extra__value">550円/回</span>
              </div>
              <div class="price-extra__item">
                <span class="price-extra__label">プロテイン</span>
                <span class="price-extra__value">300円～</span>
              </div>
            </div>
          </div>
        </div>

        <div class="caution">
          <h3 class="caution__title">よくある注意</h3>
          <div class="caution__body">
            <ul class="caution__list">
              <li class="caution__item caution__item--dot">
                お支払い：クレジット／口座振替
              </li>
              <li class="caution__item caution__item--dot">
                休会：当月末までの申請で翌月から適用
              </li>
              <li class="caution__item caution__item--dot ">
                退会：当月10日までの申請で当月末退会
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>



    <section class="contact">
      <div class="contact-inner inner">
        <h2 class="contact__title">はじめてでも大丈夫<br>まずは<span>無料体験</span>から<br class="u-mobile">お試しください。</h2>
        <p class="contact__text">
          初心者・女性も安心してご利用いただけます。
        </p>
        <div class="button-wrap contact__button">
          <a href="<?php echo esc_url(home_url("/contact")) ?>" class="contact__button-content">無料体験を予約する</a>
        </div>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>