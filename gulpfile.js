/* No BrowserSync version */
const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const sourcemaps = require("gulp-sourcemaps");
const { build } = require("esbuild");

// tiny noop helper
const through = require("through2");
const noop = () => through.obj();

const isProd = process.env.NODE_ENV === "production";

const paths = {
  scss: {
    entry: "src/scss/main.scss",
    all: "src/scss/**/*.scss",
    dest: "app/public/wp-content/themes/wayone/assets/css",
  },
  js: {
    entry: "src/js/index.js",
    all: "src/js/**/*.js",
    dest: "app/public/wp-content/themes/wayone/assets/js",
  },
  php: "app/public/wp-content/themes/wayone/**/*.php",
};

// Clean (ESM-only del)
async function clean() {
  const { deleteAsync } = await import("del");
  await deleteAsync([`${paths.scss.dest}/**/*`, `${paths.js.dest}/**/*`], {
    force: true,
  });
}

function styles() {
  return gulp
    .src(paths.scss.entry, { allowEmpty: true })
    .pipe(!isProd ? sourcemaps.init() : noop())
    .pipe(sass({ outputStyle: isProd ? "compressed" : "expanded" }).on("error", sass.logError))
    .pipe(postcss([autoprefixer()]))
    .pipe(!isProd ? sourcemaps.write(".") : noop())
    .pipe(gulp.dest(paths.scss.dest));
}

async function scripts() {
  await build({
    entryPoints: [paths.js.entry],
    bundle: true,
    outfile: `${paths.js.dest}/bundle.js`,
    sourcemap: !isProd,
    minify: isProd,
    target: "es2018",
    format: "iife",
    logLevel: "silent",
  });
}

function watch() {
  gulp.watch(paths.scss.all, styles);
  gulp.watch(paths.js.all, scripts);
  gulp.watch(paths.php, cb => cb()); // placeholder; just lets you see changes on manual refresh
}

const buildAll = gulp.series(clean, gulp.parallel(styles, scripts));

exports.clean = clean;
exports.styles = styles;
exports.scripts = scripts;
exports.build = buildAll;
exports.watch = gulp.series(buildAll, watch);
exports.default = exports.watch;
