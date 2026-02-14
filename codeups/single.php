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
            <div class="blog-list-single">
                <article class="article">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                            <time class="article__date" datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>">
                                <?php echo esc_html(get_the_date('Y.m.d')); ?>
                            </time>

                            <h1 class="article__title"><?php the_title(); ?></h1>

                            <div class="article__thumb">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full'); ?>
                                <?php else : ?>
                                    <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/no-image.png')); ?>" alt="NoImage画像">
                                <?php endif; ?>
                            </div>

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
                            <a href="<?php echo esc_url(home_url("/contact")) ?>" class="button slide">Contact us<svg xmlns="http://www.w3.org/2000/svg"
                                    width="41" height="7" viewBox="0 0 41 7" fill="none">
                                    <path d="M0.5 6.5H40.5L33.5 0.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>