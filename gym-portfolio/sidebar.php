<div class="blog-sidebar">
  <div class="blog-sidebar__box">
    <div class="blog-sidebar__head">
      <div class="blog-sidebar__head-img is-latest"></div>
      <div class="blog-sidebar__head-text">最新記事</div>
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
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/no-image.webp')); ?>" alt="NoImage画像">
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
      <div class="blog-sidebar__head-img is-weight"></div>
      <div class="blog-sidebar__head-text">ダイエット</div>
    </div>
    <div class="blog-sidebar__body">
      <?php
      $sidebar_query = new WP_Query([
        'post_type'      => 'post',
        'posts_per_page' => 3,
        'post_status'    => 'publish',
        'category_name'  => 'weight',
      ]);

      if ($sidebar_query->have_posts()) :
        while ($sidebar_query->have_posts()) : $sidebar_query->the_post();
      ?>
          <a href="<?php the_permalink(); ?>" class="blog-sidebar__popular-box hover-opacity">
            <div class="blog-sidebar__popular-img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('thumbnail'); ?>
              <?php else : ?>
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/no-image.webp')); ?>" alt="NoImage画像">
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
      <div class="blog-sidebar__head-img is-muscle"></div>
      <div class="blog-sidebar__head-text">筋トレ</div>
    </div>
    <div class="blog-sidebar__body">
      <?php
      $sidebar_query = new WP_Query([
        'post_type'      => 'post',
        'posts_per_page' => 3,
        'post_status'    => 'publish',
        'category_name'  => 'muscle',
      ]);

      if ($sidebar_query->have_posts()) :
        while ($sidebar_query->have_posts()) : $sidebar_query->the_post();
      ?>
          <a href="<?php the_permalink(); ?>" class="blog-sidebar__popular-box hover-opacity">
            <div class="blog-sidebar__popular-img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('thumbnail'); ?>
              <?php else : ?>
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/no-image.webp')); ?>" alt="NoImage画像">
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
      <div class="blog-sidebar__head-img is-meal"></div>
      <div class="blog-sidebar__head-text">食事・栄養</div>
    </div>
    <div class="blog-sidebar__body">
      <?php
      $sidebar_query = new WP_Query([
        'post_type'      => 'post',
        'posts_per_page' => 3,
        'post_status'    => 'publish',
        'category_name'  => 'meal',
      ]);

      if ($sidebar_query->have_posts()) :
        while ($sidebar_query->have_posts()) : $sidebar_query->the_post();
      ?>
          <a href="<?php the_permalink(); ?>" class="blog-sidebar__popular-box hover-opacity">
            <div class="blog-sidebar__popular-img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('thumbnail'); ?>
              <?php else : ?>
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/no-image.webp')); ?>" alt="NoImage画像">
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
      <div class="blog-sidebar__head-img is-folder"></div>
      <div class="blog-sidebar__head-text">カテゴリー</div>
    </div>
    <div class="blog-sidebar__archive">
      <ul class="archive__list">
        <?php
        $categories = get_categories([
          'taxonomy'   => 'category',
          'hide_empty' => false,
          'exclude'    => [1], // Uncategorized を除外
          'orderby'    => 'term_id',
          'order'      => 'ASC',
        ]);

        foreach ($categories as $category) :
        ?>
          <li>
            <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
              <?php echo esc_html($category->name); ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>