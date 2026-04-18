const { src, dest, watch, series, parallel } = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const plumber = require("gulp-plumber");
const notify = require("gulp-notify");
const sassGlob = require("gulp-sass-glob-use-forward");
const mmq = require("gulp-merge-media-queries");
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const cssdeclsort = require("css-declaration-sorter");
const postcssPresetEnv = require("postcss-preset-env");
const sourcemaps = require("gulp-sourcemaps");
const babel = require("gulp-babel");
const imageminSvgo = require("imagemin-svgo");
const browserSync = require("browser-sync").create();
const imagemin = require("gulp-imagemin");
const imageminMozjpeg = require("imagemin-mozjpeg");
const imageminPngquant = require("imagemin-pngquant");
const changed = require("gulp-changed");
const del = require("del");
const webp = require("gulp-webp");

// ====== 設定ここだけ見ればOK ======
const themeName = "gym-portfolio";

// ① gulpプロジェクト内に置いてる “編集用テーマ” の場所（VSCodeで触ってるやつ）
const themeSrcRoot = "../gym-portfolio";

// ② Local by Flywheel の WP テーマの実体（出力先）
const wpThemeRoot = `C:/Users/elsie/Local Sites/gym-portfolio/app/public/wp-content/themes/${themeName}`;

// HTMLとして見る用（dist）
const destPath = {
  all: "../dist/**/*",
  css: "../dist/assets/css/",
  js: "../dist/assets/js/",
  img: "../dist/assets/images/",
  html: "../dist/",
};

// WP側（Localのテーマフォルダ）に吐き出す先
const destWpPath = {
  all: `${wpThemeRoot}/**/*`,
  css: `${wpThemeRoot}/assets/css/`,
  js: `${wpThemeRoot}/assets/js/`,
  img: `${wpThemeRoot}/assets/images/`,
};

// 読み込み元（gulpが監視するやつ）
const srcPath = {
  css: "../src/sass/**/*.scss",
  js: "../src/js/**/*",
  img: "../src/images/**/*",
  imgWebp: "../src/images/**/*.{jpg,jpeg,png}",
  html: ["../src/**/*.html", "!../src/**/_*.html", "!./node_modules/**"],
  php: `${themeSrcRoot}/**/*.php`,
};

// ====== タスク ======

// HTMLコピー（distへ）
const htmlCopy = () => {
  return src(srcPath.html).pipe(dest(destPath.html));
};

// PHPコピー（編集用テーマ → LocalのWPテーマへ）
const phpCopy = () => {
  return src(srcPath.php).pipe(dest(wpThemeRoot));
};

// Sass
const cssSass = () => {
  return src(srcPath.css)
    .pipe(sourcemaps.init())
    .pipe(
      plumber({
        errorHandler: notify.onError("Error: <%= error.message %>"),
      })
    )
    .pipe(sassGlob())
    .pipe(
      sass.sync({
        includePaths: ["src/sass"],
        outputStyle: "expanded",
      })
    )
    .pipe(
      postcss([
        postcssPresetEnv(),
        autoprefixer({ grid: true }),
        cssdeclsort({ order: "alphabetical" }),
      ])
    )
    .pipe(mmq())
    .pipe(sourcemaps.write("./"))
    .pipe(dest(destPath.css))
    .pipe(dest(destWpPath.css));
};

// JS
const jsBabel = () => {
  return src(srcPath.js)
    .pipe(
      plumber({
        errorHandler: notify.onError("Error: <%= error.message %>"),
      })
    )
    .pipe(
      babel({
        presets: ["@babel/preset-env"],
      })
    )
    .pipe(dest(destPath.js))
    .pipe(dest(destWpPath.js));
};

// 画像圧縮（元形式のまま出力）
const imgImagemin = () => {
  return src(srcPath.img)
    .pipe(changed(destPath.img))
    .pipe(
      imagemin(
        [
          imageminMozjpeg({ quality: 80 }),
          imageminPngquant(),
          imageminSvgo({ plugins: [{ removeViewbox: false }] }),
        ],
        { verbose: true }
      )
    )
    .pipe(dest(destPath.img))
    .pipe(dest(destWpPath.img));
};

// WebP生成
const imgWebp = () => {
  return src(srcPath.imgWebp)
    .pipe(changed(destPath.img, { extension: ".webp" }))
    .pipe(webp({ quality: 80 }))
    .pipe(dest(destPath.img))
    .pipe(dest(destWpPath.img));
};

// 削除
const clean = () => {
  return del(
    [
      destPath.all,
      `${wpThemeRoot}/assets/css/**/*`,
      `${wpThemeRoot}/assets/js/**/*`,
      `${wpThemeRoot}/assets/images/**/*`,
    ],
    { force: true }
  );
};

// BrowserSync（WP proxy）
const browserSyncFunc = (done) => {
  browserSync.init({
    notify: false,
    proxy: "gym-portfolio.local",
  });
  done();
};

const browserSyncReload = (done) => {
  browserSync.reload();
  done();
};

// 監視
const watchFiles = () => {
  watch(srcPath.css, series(cssSass, browserSyncReload));
  watch(srcPath.js, series(jsBabel, browserSyncReload));
  watch(srcPath.img, series(imgImagemin, imgWebp, browserSyncReload));
  watch(srcPath.html, series(htmlCopy, browserSyncReload));
  watch(srcPath.php, series(phpCopy, browserSyncReload));
};

// 開発
exports.default = series(
  parallel(cssSass, jsBabel, imgImagemin, imgWebp, htmlCopy, phpCopy),
  parallel(watchFiles, browserSyncFunc)
);

// 本番
exports.build = series(
  clean,
  parallel(cssSass, jsBabel, imgImagemin, imgWebp, htmlCopy, phpCopy)
);