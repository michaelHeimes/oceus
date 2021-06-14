// Define dependencies
var gulp = require('gulp');
var sass = require('gulp-sass');
var sassGlob = require('gulp-sass-glob');
var autoprefixer = require('gulp-autoprefixer');
var nano = require('gulp-cssnano');
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var imagemin = require('gulp-imagemin');
var cache = require('gulp-cache');
var svgSprite = require("gulp-svg-sprites");

// Compile sass to compressed css andd add vendor prefixes
gulp.task('styles', function(done) {
    gulp.src('src/sass/style.scss')
    .pipe(sassGlob())
    .pipe(sourcemaps.init())
    .pipe(sass())
    .on('error', function(error) {
        console.log('\n ✖ ✖ ✖ ✖ ✖ ERROR ✖ ✖ ✖ ✖ ✖ \n \n' + error.message + '\n \n');
    })
    .pipe(autoprefixer({
		browsers: ['> 1%', 'last 2 versions', 'Firefox >= 20']
	}))
    .pipe(nano())
    .pipe(rename('oceus.min.css'))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('dist/css'));
    done();
});

// Concatenate files and minify to output to scripts.min.js
gulp.task('scripts', function(done) {
    gulp.src( ['src/js/vendor/*.js', 'src/js/components/*.js', 'src/js/*.js'])
    .pipe(concat('scripts.min.js'))
    .pipe(uglify())
    .on('error', function(error) {
        console.log('\n ✖ ✖ ✖ ✖ ✖ ERROR ✖ ✖ ✖ ✖ ✖ \n \n' + error.message + '\n \n');
    })
    .pipe(rename('oceus.min.js'))
    .pipe(gulp.dest('dist/js'));
    done();
});

// SVG icon sprite
gulp.task('icons', function(done) {
  gulp.src('dist/icons/*.svg')
    .pipe(svgSprite({mode: 'symbols'}))
    .pipe(gulp.dest('dist/icons'));
    done();
});

//Minify Images
gulp.task('images', function(done){
  return gulp.src('src/img/**/*.+(png|jpg|gif)')
  .pipe(cache(imagemin()))
  .pipe(gulp.dest('dist/img'))
});


// Default task
gulp.task('default', function() {
    gulp.watch('src/sass/**/*.scss', gulp.series('styles'));
    gulp.watch('src/js/**/*.js', gulp.series('scripts'));
    gulp.watch('dist/icons/*.svg', gulp.series('icons'));
    gulp.watch('src/img/**/*.+(png|jpg|gif)', gulp.series('images'));    
    return;
});
