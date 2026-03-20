<?php get_header(); ?>
<main class="sub-blog">
    <section class="sub-mv" id="mv">
        <div class="sub-mv__img">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/gym-sub/blog-mv.png')); ?>" alt="トレーニングに向かう男性の後ろ姿">
        </div>
        <div class="sub-mv__content">
            <h2 class="sub-mv__title">ブログ</h2>
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
            <div class="blog-list-single">
                <article class="article">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                            <?php $categories = get_the_category(); ?>
                            <?php if (!empty($categories)) : ?>
                                <div class="article__categories">
                                    <?php foreach ($categories as $category) : ?>
                                        <a class="article__category" href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
                                            <?php echo esc_html($category->name); ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <time class="article__date" datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>">
                                <?php echo esc_html(get_the_date('Y.m.d')); ?>
                            </time>

                            <h1 class="article__title"><?php the_title(); ?></h1>

                            <?php if (has_post_thumbnail()) : ?>
                                <div class="article__thumb">
                                    <?php the_post_thumbnail('full'); ?>
                                </div>
                            <?php endif; ?>

                            <div class="article__content">
                                <?php the_content(); ?>
                            </div>

                    <?php endwhile;
                    endif; ?>
                </article>



                <ul class="pagination__single">
                    <?php $prev = get_previous_post();
                    $next = get_next_post(); ?>

                    <li class="pagination__prev <?php echo $prev ? '' : 'is-disabled'; ?>">
                        <?php if ($prev) : ?>
                            <a class="pagination__link pagination__arrow" href="<?php echo esc_url(get_permalink($prev)); ?>" rel="prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none">
                                    <path d="M8.5 0.5L0.5 8.5L8.5 16.5" stroke="#408F95" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        <?php endif; ?>
                    </li>

                    <li class="pagination__next <?php echo $next ? '' : 'is-disabled'; ?>">
                        <?php if ($next) : ?>
                            <a class="pagination__link pagination__arrow" href="<?php echo esc_url(get_permalink($next)); ?>" rel="next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none">
                                    <path d="M0.5 0.5L8.5 8.5L0.5 16.5" stroke="#408F95" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>



            <?php get_sidebar(); ?>
        </div>
    </div>
    <section class="contact">
    <div class="contact-inner inner">
      <h2 class="contact__title">はじめてでも大丈夫<br>まずは<span>無料体験</span>から<br class="u-mobile">お試しください。</h2>
      <p class="contact__text">
        初心者・女性も安心してご利用いただけます。
      </p>
      <div class="button-wrap contact__button">
        <a href="<?php echo esc_url(home_url("/contact")) ?>" class="button">無料体験を予約する</a>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>