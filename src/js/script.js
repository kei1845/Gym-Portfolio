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
      slidesPerView: 3.5,
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
