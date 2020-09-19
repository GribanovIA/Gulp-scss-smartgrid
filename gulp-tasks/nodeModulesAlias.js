const path = require('path');
import { paths } from "../gulpfile.babel";
import gulp from "gulp";
import aliases from 'gulp-style-aliases';

const nodeModulesPath = path.resolve(".", 'node_modules');

//Alias для пути до node_modules. Данный alias использует в файла _libs.scss
gulp.task("aliasPathToVendorStyles", () => {
  return gulp.src(paths.vendorStyles.src)
    .pipe(aliases({
      "@node_modules": nodeModulesPath
    }))
    .pipe(gulp.dest(paths.vendorStyles.dist))
});