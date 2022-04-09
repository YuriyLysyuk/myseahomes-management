var gulp = require('gulp'),
  sass = require('gulp-sass')(require('sass')),
  autoprefixer = require('gulp-autoprefixer'),
  cleanCSS = require('gulp-clean-css'),
  rename = require('gulp-rename'),
  browserSync = require('browser-sync').create(),
  concat = require('gulp-concat'),
  uglify = require('gulp-uglify-es').default,
  rsync = require('gulp-rsync');

gulp.task('browser-sync', function () {
  browserSync.init({
    server: {
      baseDir: 'app',
    },
    notify: false,
  });
});

function bsReload(done) {
  browserSync.reload();
  done();
}

gulp.task('styles', function () {
  return gulp
    .src('scss/**/*.scss')
    .pipe(
      sass({
        outputStyle: 'expanded',
      }).on('error', sass.logError)
    )
    .pipe(rename({ suffix: '.min', prefix: '' }))
    .pipe(
      autoprefixer({
        grid: true, // Optional. Enable CSS Grid
        overrideBrowserslist: ['last 10 versions'],
      })
    )
    .pipe(cleanCSS())
    .pipe(gulp.dest('app/css'))
    .pipe(browserSync.stream());
});

gulp.task('scripts', function () {
  return gulp
    .src(['app/libs/jquery/jquery-1.11.2.min.js'])
    .pipe(concat('libs.js'))
    .pipe(uglify()) //Minify libs.js
    .pipe(gulp.dest('app/js/'))
    .pipe(browserSync.reload({ stream: true }));
});

gulp.task('code', function () {
  return gulp.src('app/**/*.html').pipe(browserSync.reload({ stream: true }));
});

gulp.task('watch', function () {
  gulp.watch('scss/**/*.scss', gulp.parallel('styles'));
  gulp.watch(
    ['app/js/common.js', 'app/libs/**/*.js'],
    gulp.parallel('scripts')
  );
  gulp.watch('app/*.html', gulp.parallel('code'));
});

gulp.task(
  'default',
  gulp.parallel('styles', 'scripts', 'browser-sync', 'watch')
);

gulp.task('deploy', function () {
  return gulp.src('app/**').pipe(
    rsync({
      root: 'app/',
      hostname: 'myseahf2@myseahf2.beget.tech',
      destination: 'myseahomes.com/public_html/management/',
      include: ['*.htaccess'], // Includes files to deploy
      exclude: ['**/Thumbs.db', '**/*.DS_Store'], // Excludes files from deploy
      recursive: true,
      archive: true,
      silent: false,
      compress: true,
      progress: true,
    })
  );
});
