<?php get_header(); ?>
<main class="sub-blog">
    <section class="sub-mv" id="mv">
        <div class="sub-mv__img">
            <img src="./assets/images/sub-pages/blog/blog-mv.png" alt="海の中のミスジチョウチョウウオ">
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
                    <time class="article__date" datetime="2023-11-17">2023.11.17</time>
                    <h3>ライセンス取得</h3>
                    <div>
                        <img src="./assets/images/blog1.png" alt="珊瑚礁">
                    </div>
                    <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
                    <div>
                        <img src="./assets/images/blog1.png" alt="珊瑚礁">
                    </div>
                    <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
                    <ul>
                        <li>リスト１</li>
                        <li>リスト2</li>
                        <li>リスト3</li>
                    </ul>
                    <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
                </article>



                <ul class="pagination__single">
                    <li class="pagination__prev">
                        <a href="#" class="pagination__link pagination__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17"
                                fill="none">
                                <path d="M8.5 0.5L0.5 8.5L8.5 16.5" stroke="#408F95" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>
                    <li class="pagination__next">
                        <a href="#" class="pagination__link pagination__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17"
                                fill="none">
                                <path d="M0.5 0.5L8.5 8.5L0.5 16.5" stroke="#408F95" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>
                </ul>
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
                                <!-- <img src="./assets/images/500x1500.png" alt="500x1500"> -->
                                <img src="./assets/images/sub-pages/blog/popular1.png" alt="シテンヤッコ">
                            </div>
                            <div class="blog-sidebar__popular-column">
                                <time class="blog-sidebar__popular-time" datetime="2023-11-17">2023.11.17</time>
                                <h3 class="blog-sidebar__popular-title">ライセンス取得</h3>
                            </div>
                        </a>

                        <a href="#" class="blog-sidebar__popular-box">
                            <div class="blog-sidebar__popular-img">
                                <img src="./assets/images/sub-pages/blog/popular2.png" alt="ウミガメ">
                            </div>
                            <div class="blog-sidebar__popular-column">
                                <time class="blog-sidebar__popular-time" datetime="2023-11-17">2023.11.17</time>
                                <h3 class="blog-sidebar__popular-title">ウミガメと泳ぐ</h3>
                            </div>
                        </a>

                        <a href="#" class="blog-sidebar__popular-box">
                            <div class="blog-sidebar__popular-img">
                                <img src="./assets/images/sub-pages/blog/popular3.png" alt="カクレクマノミと珊瑚礁">
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
                            <img src="./assets/images/sub-pages/blog/couple.png" alt="30代夫婦">
                            <!-- <img src="./assets/images/500x1500.png" alt="500x1500"> -->
                        </div>
                        <div class="blog-sidebar__review-age">30代(カップル)</div>
                        <h3 class="blog-sidebar__review-title">ここにタイトルが入ります。ここにタイトル</h3>
                        <div class="button-wrapper-outer blog-sidebar__review-button">
                            <div class="button-wrapper">
                                <a href="#" class="button slide">View more<svg xmlns="http://www.w3.org/2000/svg"
                                        width="41" height="7" viewBox="0 0 41 7" fill="none">
                                        <path d="M0.5 6.5H40.5L33.5 0.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
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
                                <img src="./assets/images/campaign1.png" alt="色とりどりの熱帯魚が泳ぐ水中の様子">
                                <!-- <img src="./assets/images/500x1500.png" alt="500x1500"> -->
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
                                <img src="./assets/images/campaign2.png" alt="砂浜の船と海">
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
                                <a href="#" class="button slide">View more<svg xmlns="http://www.w3.org/2000/svg"
                                        width="41" height="7" viewBox="0 0 41 7" fill="none">
                                        <path d="M0.5 6.5H40.5L33.5 0.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
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
                        <img src="./assets/images/contact-icon.png" alt="CodeUps">
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
                            <img src="./assets/images/contact-img.png" alt="CodeUpsの店舗地図">
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
                            <a href="#" class="button slide">Contact us<svg xmlns="http://www.w3.org/2000/svg"
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