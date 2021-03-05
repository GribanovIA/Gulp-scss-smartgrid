import {ftpData} from '../ftp-config';
import gulp from 'gulp';
import ftp from 'vinyl-ftp';

let conn = ftp.create({
  host: ftpData.host,
  user: ftpData.user,
  password: ftpData.password,
  parallel: 10,
});

gulp.task('removeFilesFromServer', (cb) => {
  conn.rmdir(ftpData.dist + '**/*', function (err) {
    if (err) return cb(err);
    cb();
  });
});

gulp.task('downloadFilesToServer', () => {
  return gulp.src(ftpData.src, {
    buffer: false
  })
    .pipe(conn.dest(ftpData.dist));
});

gulp.task('downloadServerFilesToServer', ()=> {
  return gulp.src(ftpData.srcServerFiles, {
      buffer: false
    })
      .pipe(conn.dest(ftpData.distServerFiles));
});

gulp.task('deploy', gulp.series('removeFilesFromServer', 'downloadFilesToServer','downloadServerFilesToServer'));