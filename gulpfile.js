const { src, dest, watch, parallel, task} = require("gulp")
// src - sirve para identicar un archivo o una serie de archivos
// dest - nos permite almacenar algo en una carpeta destino
// watch - mira por los cambio del archivo scss principal
const sass = require("gulp-sass")(require("sass"));
const plumber = require("gulp-plumber"); // plumber sirve para que no se detenga la ejecucion en caso de un error en la sintaxis de sass
let browserSync = require("browser-sync").create();


function serve(){
  browserSync.init({
    proxy: "http://localhost/Properties-project/pages/index.php"
  })

  watch("scss/**/*.scss", css) // ? **/* sirve para actualizar todos los archivos que tengan esa extension .scss
  watch("pages/**/*.php").on("change", browserSync.reload)
  watch("js/**/*.js").on("change", browserSync.reload)
}

function css(cb){
  src("scss/**/*.scss")// Identificar el archivo SASS
    .pipe( plumber())
    .pipe(sass()) // compilarlo
    .pipe(dest("build/css")) // Almacenarlo en el disco duro
    .pipe(browserSync.stream())
  cb() // Callback que avisa cuando llegamos al final
}

exports.serve = serve;  // con el nombre que se ejecuta es el que esta alado del export 

