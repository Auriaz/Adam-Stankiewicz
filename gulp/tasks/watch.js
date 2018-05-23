var gulp = require('gulp'),
watch = require('gulp-watch'),
connect = require('gulp-connect-php'),
browserSync = require('browser-sync').create(),
Composer = require('composer');

gulp.task('watch', function() {
  connect.server({}, function (){
    browserSync.init({
      notify: false,
      proxy: 'http://localhost/Project/app/'
     
    });
  });
 
});

  watch('./app/index.php', function() {
    browserSync.reload();
  });


  watch('./app/assets/styles/**/*.css', function() {
    gulp.start('cssInject');
  });

  watch('./app/assets/scripts/**/*.js', function() {
    gulp.start('scriptsRefresh');
  });

 watch('./app/assets/srcPHP/**/*.php').on('change', function () {
    browserSync.reload();
  });


gulp.task('cssInject', ['styles'], function() {

  return gulp.src('./app/temp/styles/styles.css')
    .pipe(browserSync.stream());
});

gulp.task('scriptsRefresh', ['scripts'], function() {
  browserSync.reload();
});

gulp.task('site', ['styles'], function() {
  return app.src('*.json')
    .pipe(app.dest('temp/scriptsPHP/vendor'));
});

