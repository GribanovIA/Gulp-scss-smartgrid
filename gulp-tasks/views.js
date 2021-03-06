"use strict";

import { paths } from "../gulpfile.babel";
import gulp from "gulp";
import include from "gulp-file-include";
import gulpif from "gulp-if";
import replace from "gulp-replace";
import browsersync from "browser-sync";
import yargs from "yargs";

const argv = yargs.argv,
    production = !!argv.production;

gulp.task("views", () => {
    return gulp.src(paths.views.src)
        .pipe(include({
            prefix: "@@",
            basepath: "@root"
        }))
        .pipe(gulpif(production, replace(".css", ".min.css")))
        .pipe(gulpif(production, replace(".js", ".min.js")))
        //Создаем алиас для url пути к картинкам в папке dist
        .pipe(replace("@img", "./img"))
        //Создаем алиас для url пути к svg картинкам в папке dist
        .pipe(replace("@svg", "./img/svg"))
        .pipe(gulp.dest(paths.views.dist))
        .pipe(browsersync.stream());
});