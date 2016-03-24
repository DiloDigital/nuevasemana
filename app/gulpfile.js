var gulp         = require('gulp'), // Gulp
    stylus       = require('gulp-stylus'), // Stylus
    nib          = require('nib'),
    autoprefixer = require('autoprefixer-stylus'), // Autoprefixer
    imagemin     = require('gulp-imagemin'), // Imagemin
    concat       = require('gulp-concat'), // Concat
    changed      = require('gulp-changed'), // Changed
    browsersync  = require('browser-sync'), // Browser-Sync
    rupture      = require('rupture'); // Rupture Stylus


// Aqui configuramos todas las rutas

// Ruta desarrollo
var dev_path =
    {
        styl: 'stylus/',
        js:   'js/',
        img:  'img/'
    }

// ruta publica

var public_path =
    {
        css:  '../',
        js:   '../js/',
        img:  '../img/'
    }


// Compile Stylus

gulp.task('stylus', function(){
    gulp.src([
            dev_path.styl + '*.styl',
            '!' + dev_path.styl + '_*.styl',
            '!' + dev_path.styl + '_*'
        ])
        .pipe(stylus({
            use: [nib(),autoprefixer(),rupture()],
            compress: false
        }))
        .on('error', console.log)
        .pipe(gulp.dest(public_path.css))
        .pipe(browsersync.reload({stream: true}));
});

// JavaScript
gulp.task('concat', function(){
    gulp.src(dev_path.js + '*.js')
        .pipe(concat('main.js'))
        .on('error', console.log)
        .pipe(gulp.dest(public_path.js))
        .pipe(browsersync.reload({stream: true}));
});

// Minification Images
gulp.task('images', function(){
    gulp.src([dev_path.img + '**/*'])
        .pipe(changed(public_path.img))
        .pipe(imagemin({ progressive: true }))
        .pipe(gulp.dest(public_path.img))
        .pipe(browsersync.reload({stream: true}));
});


// Start Browser-Sync server

gulp.task('browsersync-server', function(){
    browsersync.init(null, {
        proxy: "localhost/nuevasemana/",
        open: true,
        notify: true
    });
});


// Api WATCH

gulp.task('watch', function(){
    gulp.watch(dev_path.styl + '**/*.styl', ['stylus']);
    gulp.watch([dev_path.img + '**/*'], ['images']);
    gulp.watch(dev_path.js + '**/*.js', ['concat']);

    // gulp.watch([dev_path.styl + 'vendor/*', dev_path.js + 'vendor/*'], ['vendor']);
});


// Tarea Default

gulp.task('default', [
    'stylus', 'images', 'concat', 'browsersync-server', 'watch'
]);