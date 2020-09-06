import {ftpData} from '../ftp-config';
import gulp from 'gulp';
import ftp from 'vinyl-ftp';

let conn = ftp.create({
  host: ftpData.host,
  user: ftpData.user,
  password: ftpData.password,
  parallel: 10,
});

gulp.task('removeFileFromServer', (cb) => {
  conn.rmdir(ftpData.dist + '**', function (err) {
    if (err) return cb(err);
    cb();
  });
});

gulp.task('downloadFileToServer', () => {
  return gulp.src(ftpData.src, {
    buffer: false
  })
    .pipe(conn.dest(ftpData.dist));

});

gulp.task('deploy', gulp.series('removeFileFromServer', 'downloadFileToServer'));