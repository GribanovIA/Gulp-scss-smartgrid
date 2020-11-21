"use strict";

import { paths } from "../gulpfile.babel";
import gulp from "gulp";
import debug from "gulp-debug";

gulp.task("server", () => {
    return gulp.src(paths.server.src)
        .pipe(gulp.dest(paths.server.dist))
        .pipe(debug({
            "title": "Php server files"
        }));
});