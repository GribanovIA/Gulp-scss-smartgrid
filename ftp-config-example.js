export let ftpData = {
  host: 'my-site.ru',
  user: 'Ivan',
  password: 'qwerty',
  src: [
    './dist/**/*',
    './dist/.htaccess',
  ],
  dist: '/www/my-site.ru/',
  //Очищаем старые файлы перед загрузкой
  removeFromServer: '/www/my-site.ru/**/*'
}