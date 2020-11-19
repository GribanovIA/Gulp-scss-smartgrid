"use strict";

import { paths } from "../gulpfile.babel";
import gulp from "gulp";
import browsersync from "browser-sync";

gulp.task("serve", () => {
    browsersync.init({
        //Заменяе proxy-name на тот который у вас указан в столбце Имя домена в Openserver
        proxy: 'proxy-name',
        port: 4000,
        notify: true
    });
    //Конфиг если работаем с обычными html файлами
    // browsersync.init({
    //     server: "./dist/",
    //     port: 4000,
    //     notify: true
    // });

    gulp.watch(paths.views.watch, gulp.parallel("views"));
    gulp.watch(paths.styles.watch, gulp.parallel("styles"));
    gulp.watch(paths.scripts.watch, gulp.parallel("scripts"));
    gulp.watch(paths.sprites.watch, gulp.parallel("sprites"));
    gulp.watch(paths.images.watch, gulp.parallel("images"));
    gulp.watch(paths.webp.watch, gulp.parallel("webp"));
    gulp.watch(paths.fonts.watch, gulp.parallel("fonts"));
});