import {ftpData} from '../ftp-config';
import gulp from 'gulp';
import ftp from 'vinyl-ftp';

gulp.task('deploy',()=>{
    let conn = ftp.create({
      host: ftpData.host,
      user: ftpData.user,
      password: ftpData.password,
      parallel: 10,
    });

    return gulp.src(ftpData.src, {buffer: false})
        .pipe(conn.dest(ftpData.dist));
});