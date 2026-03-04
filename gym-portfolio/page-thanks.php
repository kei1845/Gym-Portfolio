<?php get_header(); ?>
<main class="sub-contact1">
    <section class="sub-mv" id="mv">
        <div class="sub-mv__img">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/sub-pages/contact/contact-mv.png')); ?>" alt="海の中のミスジチョウチョウウオ">
        </div>
        <div class="sub-mv__content">
            <h2 class="sub-mv__title">Contact</h2>
        </div>
    </section>
    <?php if (function_exists('bcn_display')) : ?>
        <div class="inner">
            <nav class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
                <?php bcn_display(); ?>
            </nav>
        </div>
    <?php endif; ?>

    <div class="thanks">
        <div class="inner">
            <p class="thanks-title">お問い合わせ内容を送信完了しました。</p>
            <p class="thanks-text">このたびは、お問い合わせ頂き<br class="u-mobile">誠にありがとうございます。<br>
                お送り頂きました内容を確認の上、<br class="u-mobile">3営業日以内に折り返しご連絡させて頂きます。<br>
                また、ご記入頂いたメールアドレスへ、<br class="u-mobile">自動返信の確認メールをお送りしております。</p>
        </div>
    </div>
</main>
<?php get_footer(); ?>