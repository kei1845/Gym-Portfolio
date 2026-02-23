jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
});

/* ==================================================
# swiper mv
================================================== */

const mvSwiper = new Swiper(".mv-swiper", {
  loop: true,
  effect: "fade",
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
});

/* ==================================================
# swiper campaign
================================================== */

const campaignSwiper = new Swiper(".campaign__swiper", {
  slidesPerView: "auto",
  spaceBetween: 24,
  loop: true,
  // slidesOffsetBefore: 15, // 左の余白
  // loopedSlides: 4, // スライド枚数と合わせる
  breakpoints: {
    768: {
      slidesPerView: 3,
      // slidesPerView: "auto",
      spaceBetween: 40,
      // slidesOffsetBefore: 0, // デスクトップでは余白なし
    },
  },

  navigation: {
    nextEl: ".campaign__nav-next",
    prevEl: ".campaign__nav-prev",
  },
});

/* ==================================================
# アニメーション実装
================================================== */
document.addEventListener("DOMContentLoaded", function () {
  const speed = 700; // ミリ秒（jQuery.animate の代わりに CSS トランジション使う）
  const boxes = document.querySelectorAll(".colorbox");

  boxes.forEach((box) => {
    // color 要素を追加（既にあれば追加しない）
    let color = box.querySelector(".color");
    if (!color) {
      color = document.createElement("div");
      color.className = "color";
      box.appendChild(color);
    }
    const img = box.querySelector("img");
    if (img) {
      img.style.opacity = 0;
      img.style.transition = "opacity 400ms ease";
    }

    // 初期スタイル（JS側で確実に）
    color.style.position = "absolute";
    color.style.top = "0";
    color.style.right = "0";
    color.style.width = "0%";
    color.style.height = "100%";
    color.style.zIndex = "2";
    // background-color は CSS 側に残してもOK
  });

  // IntersectionObserver 設定
  const io = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        const box = entry.target;
        const color = box.querySelector(".color");
        const img = box.querySelector("img");
        // 1回だけ実行
        if (box.dataset.animated === "1") {
          observer.unobserve(box);
          return;
        }
        box.dataset.animated = "1";

        // アニメーションの流れ（JSで幅をアニメーション）
        // 1) color width 0% -> 100%
        // 2) image opacity 0 -> 1
        // 3) color width 100% -> 0%
        // jQuery.animate を使いたければここに置き換えてください

        // step1: color expand
        color.style.transition = `width ${speed}ms ease`;
        color.style.width = "100%";

        // step2: after expand
        setTimeout(() => {
          if (img) img.style.opacity = 1;

          // reposition color to left-to-right reveal if needed
          color.style.left = "0";
          color.style.right = "auto";

          // step3: shrink
          // 縮めるために再度トランジション設定
          setTimeout(() => {
            color.style.transition = `width ${speed}ms ease`;
            color.style.width = "0%";
          }, 50); // 少しだけ待つ
        }, speed + 200); // delay(200) + speed
        observer.unobserve(box);
      });
    },
    {
      threshold: 0.2, // 20% 見えたら発火（必要に応じ変更）
    }
  );

  // observe
  boxes.forEach((box) => io.observe(box));
});

/* ==================================================
# to-top scrollで出てきたり消えたりする
================================================== */

jQuery(window).on("scroll", function () {
  if (100 < jQuery(window).scrollTop()) {
    jQuery("#js-page-top").addClass("is-show");
  } else {
    jQuery("#js-page-top").removeClass("is-show");
  }
});

/* ==================================================
# drawer menu
================================================== */

// jQuery("#js-drawer-icon").on("click", function(e){
//   e.preventDefault();
//   jQuery("#js-drawer-icon").toggleClass("is-checked");
//   jQuery("#js-drawer-content").toggleClass("is-checked");
// });

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  const drawerIcon = $("#js-drawer-icon");
  const drawerContent = $("#js-drawer-content");

  drawerIcon.on("click", function () {
    $(this).toggleClass("is-checked");
    drawerContent.toggleClass("is-checked");

    if ($(this).hasClass("is-checked")) {
      $("body").addClass("is-scrollLock");
    } else {
      $("body").removeClass("is-scrollLock");
    }
  });

});


/* ==================================================
# aboutのmodal
================================================== */

document.addEventListener('DOMContentLoaded', () => {
  const modal = document.getElementById('gallery-modal');
  if (!modal) return;

  const modalContent = modal.querySelector('.modal-content'); // 画像を入れる場所

  document.querySelectorAll('.gallery__item').forEach(item => {
    item.addEventListener('click', () => {
      // 既存の画像を削除
      const existingImg = modalContent.querySelector('img');
      if (existingImg) existingImg.remove();

      // 新しいimgを生成
      const modalImg = document.createElement('img');
      modalImg.src = item.dataset.modalImg;
      modalImg.alt = item.dataset.modalAlt || 'ギャラリー画像';
      modalContent.appendChild(modalImg);

      modal.classList.add('is-open');
      document.body.style.overflow = 'hidden';
    });
  });

  // クリックされたらモーダル閉じる（画面のどこでも）
  modal.addEventListener('click', () => {
    modal.classList.remove('is-open');
    document.body.style.overflow = '';

    // 画像も削除
    const existingImg = modalContent.querySelector('img');
    if (existingImg) existingImg.remove();
  });
});




/* ==================================================
# information タグ切り替え
================================================== */

document.addEventListener('DOMContentLoaded', function () {
  const tabs = document.querySelectorAll('.information__tab');
  const contents = document.querySelectorAll('.information__content');

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      const target = tab.dataset.target;

      // タブのactive切り替え
      tabs.forEach(t => t.classList.remove('is-active'));
      tab.classList.add('is-active');

      // コンテンツのactive切り替え
      contents.forEach(content => {
        content.classList.remove('is-active');
        if (content.id === target) {
          content.classList.add('is-active');
        }
      });
    });
  });
});


/* ==================================================
# accordion faq
================================================== */

jQuery(function ($) {
  // 初期は必ず閉じる（＋）＆答えは非表示
  $(".faq__item").removeClass("is-open");
  $(".js-accordion").removeClass("is-open").attr("aria-expanded", "false");
  $(".faq__answer").hide().removeClass("is-open");

  $(".js-accordion").on("click", function (e) {
    e.preventDefault();

    var $btn = $(this);
    var $item = $btn.closest(".faq__item");
    var $answer = $btn.next(".faq__answer");

    var isOpen = !$item.hasClass("is-open");

    $item.toggleClass("is-open", isOpen);
    $btn.toggleClass("is-open", isOpen).attr("aria-expanded", isOpen ? "true" : "false");

    // “表示”も isOpen に合わせて確実に同期
    if (isOpen) {
      $answer.stop(true, true).slideDown(300).addClass("is-open");
    } else {
      $answer.stop(true, true).slideUp(300).removeClass("is-open");
    }
  });
});

/* ==================================================
# pagination
================================================== */


document.addEventListener('DOMContentLoaded', () => {
  const isSp = window.matchMedia('(max-width: 767px)').matches;

  const items = document.querySelectorAll('.pagination__numbers .pagination__number');
  const dots  = document.querySelectorAll('.pagination__numbers .pagination__link.dots');

  // ✅ PCのとき：何もしない＋もし過去に隠してたら戻す（保険）
  if (!isSp) {
    items.forEach(li => li.style.display = '');
    dots.forEach(el => el.style.display = '');
    return;
  }

  // --- ここからSP処理（現在±1の3つだけ表示） ---
  items.forEach(li => li.style.display = 'none');

  const currentLink = document.querySelector('.pagination__numbers .pagination__link.current');
  if (!currentLink) return;

  const currentLi = currentLink.closest('.pagination__number');
  let prevLi = currentLi?.previousElementSibling;
  let nextLi = currentLi?.nextElementSibling;

  // 「…」を飛ばして前後を取る
  while (prevLi && prevLi.querySelector('.pagination__link.dots')) {
    prevLi = prevLi.previousElementSibling;
  }
  while (nextLi && nextLi.querySelector('.pagination__link.dots')) {
    nextLi = nextLi.nextElementSibling;
  }

  [prevLi, currentLi, nextLi].forEach(li => {
    if (li) li.style.display = '';
  });

  dots.forEach(el => el.style.display = 'none');
});


/* ==================================================
# home.phpのアーカイブの年クリックで月を開閉。
================================================== */

document.addEventListener('DOMContentLoaded', () => {
  const years = document.querySelectorAll('.archive__year');

  years.forEach((yearEl, i) => {
    const months = yearEl.nextElementSibling;
    if (!months || !months.classList.contains('archive__month')) return;

    // ✅ 初期：最新年だけ開く（先頭が最新年になる）
    const openInitially = (i === 0);
    months.style.display = openInitially ? 'block' : 'none';
    yearEl.classList.toggle('is-open', openInitially);

    yearEl.addEventListener('click', () => {
      const isOpen = months.style.display === 'block';
      months.style.display = isOpen ? 'none' : 'block';
      yearEl.classList.toggle('is-open', !isOpen);
    });
  });
});

/* ==================================================
# thanks-pageへの遷移
================================================== */
// ローカル用でも本番環境でも

document.addEventListener('wpcf7mailsent', function() {
  const base = document.querySelector('base')?.href || window.location.origin;
  const path = window.location.pathname.includes('/codeups/')
    ? '/codeups/contact/thanks/'
    : '/contact/thanks/';
  window.location.href = path;
});