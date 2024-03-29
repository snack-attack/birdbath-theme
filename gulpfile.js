let gulp = require('gulp');
let cleanCSS = require('gulp-clean-css');
let rename = require('gulp-rename');
let sass = require('gulp-sass');
let uglify = require('gulp-uglify-es');
let concat = require('gulp-concat');
let imagemin = require('gulp-imagemin');
let sourcemaps = require('gulp-sourcemaps');
let browserSync = require('browser-sync').create();



/* TO-DO */
///add minify-imgs to default build
///create default task (something not working in callbacks?)



//compile sass and minify css

gulp.task("sass", () => {
    return gulp.src("./scss/main.scss")
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest("./dist/css/"))
        .pipe(rename("main.css"))
        .pipe(browserSync.stream());
});

gulp.task("minify-css", () => {
    return gulp.src("./dist/css/main.css")
        .pipe(cleanCSS({compatibility: "ie8"}))
        .pipe(rename({suffix: ".min"}))
        .pipe(gulp.dest("./dist/css/"))
        .pipe(browserSync.stream());
});
  
gulp.task("styles", gulp.series('sass', 'minify-css'));

gulp.task("watch-css", () => {
    return gulp.watch("./scss/*.scss", gulp.series("styles"));
});

//combine then minify js files

gulp.task("minify-js", () => {
    return gulp.src(["./js/*.js"])
        .pipe(concat("all.js"))
        .pipe(rename({suffix: ".min"}))
        .pipe(gulp.dest("./dist/js/"))
        .pipe(browserSync.stream())
});

gulp.task("watch-js", () => {
    return gulp.watch("./js/*.js", gulp.series("minify-js"));
});

//minify images

gulp.task("minify-imgs", () =>
    gulp.src('src/images/*')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/images'))
);

//task to watch just css + js

gulp.task("watch", () => {
    return gulp.watch(["./js/*.js", "./scss/*.scss"], gulp.series("styles", "minify-js"));
});


// sync & set default tasks

gulp.task("serve", () => {
    browserSync.init({
        server: {
            baseDir: "localhost:3000"
        }
    });    
    gulp.watch("./scss/*.scss", gulp.series("styles"))
    gulp.watch("./*.html").on('change', browserSync.reload);
    gulp.watch("./js/*.js", gulp.series("minify-js"))
});

//gulp.task('default', ['serve', 'watch']);
