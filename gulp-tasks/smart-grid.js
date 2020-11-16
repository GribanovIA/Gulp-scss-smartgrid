"use strict";

import gulp from "gulp";
const smartgrid = require("smart-grid");

gulp.task("smart-grid", (cb) => {
    smartgrid("./src/styles/vendor/import/", {
        outputStyle: "scss",
        filename: "_smart-grid",
        columns: 12, // number of grid columns
        offset: "30px", // gutter width - 30px
        mobileFirst: false,
        mixinNames: {
            container: "container"
        },
        container: {
            maxWidth: '1140px', /* max-width оn very large screen */
            fields: "15px" // side fields - 15px
        },
        breakPoints: {
          xs: {
            width: "575.98px" // 320px
          },
          sm: {
            width: "767.98px" // 576px "768px"
          },
          md: {
            width: "991.98px" // 768px "992px"
          },
          lg: {
            width: "1199.98px" // 992px "1200px"
          },
        }
    });
    cb();
});
