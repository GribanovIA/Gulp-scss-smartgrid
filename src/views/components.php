<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Title</title>
        <meta name="theme-color" content="#fff">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!-- Убираем стили ссылки у номеров телефонов в IE -->
        <!-- https://bit.ly/3iEqQdM -->
        <meta name="format-detection" content="telephone=no" />

        <!-- Подключаем fonts-google -->
        <!-- https://fonts.google.com/ -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">


        <link rel="shortcut icon" href="img/favicons/favicon.ico" type="image/x-icon">
        <link rel="icon" sizes="16x16" href="img/favicons/favicon-16x16.png" type="image/png">
        <link rel="icon" sizes="32x32" href="img/favicons/favicon-32x32.png" type="image/png">
        <link rel="apple-touch-icon-precomposed" href="img/favicons/apple-touch-icon-precomposed.png">
        <link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="167x167" href="img/favicons/apple-touch-icon-167x167.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">
        <link rel="apple-touch-icon" sizes="1024x1024" href="img/favicons/apple-touch-icon-1024x1024.png">
        <link rel="stylesheet" href="styles/main.css">
    </head>
    <body>
      <div id="app">
        <div class="my-components container">
          <div class="framework">
            <p class='display'>Framework</p>
            <a class='link-primary' href="uikit.php">Uikit</a>
          </div>
          <div class="typography">
            <p class='display'>Typography</p>
            <div class="p">
              <h1>Пример заголовка h1</h1>
              <h2>Пример заголовка h2</h2>
              <h3>Пример заголовка h3</h3>
              <h4>Пример заголовка h4</h4>
              <h5>Пример заголовка h5</h5>
              <h6>Пример заголовка h6</h6>
              <div class="text-small">text-small</div>
              <span class='mark'>mark</span>
            </div>
            <div class="p">
              <a href="#" class='link-primary d-block'>link-primary</a>
              <a href="#" class='link-secondary d-block'>
                link-secondary
              </a>
              <a href="#" class='link-secondary d-block'>
                link-secondary
                <svg class='ml-3' width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path d="M1 5C0.447715 5 0 5.44772 0 6C0 6.55228 0.447715 7 1 7V5ZM13 6L13.7071 6.70711C14.0976 6.31658 14.0976 5.68342 13.7071 5.29289L13 6ZM8.70711 0.292893C8.31658 -0.0976311 7.68342 -0.0976311 7.29289 0.292893C6.90237 0.683417 6.90237 1.31658 7.29289 1.70711L8.70711 0.292893ZM7.29289 10.2929C6.90237 10.6834 6.90237 11.3166 7.29289 11.7071C7.68342 12.0976 8.31658 12.0976 8.70711 11.7071L7.29289 10.2929ZM1 7H13V5H1V7ZM13.7071 5.29289L8.70711 0.292893L7.29289 1.70711L12.2929 6.70711L13.7071 5.29289ZM12.2929 5.29289L7.29289 10.2929L8.70711 11.7071L13.7071 6.70711L12.2929 5.29289Z" fill="#ffc107"/>
                </svg>
              </a>
            </div>
          </div>
          <div class="colors">
            <p class='display'>Colors</p>
            <div class="p d-flex mt-n10 ml-n10">
              <div class="my-components__color-item">
                <h5>primary</h5>
                <div class="my-components__color primary"></div>
              </div>
              <div class="my-components__color-item">
                <h5>primary-light</h5>
                <div class="my-components__color primary-light"></div>
              </div>
              <div class="my-components__color-item">
                <h5>secondary</h5>
                <div class="my-components__color secondary"></div>
              </div>
              <div class="my-components__color-item">
                <h5>secondary-light</h5>
                <div class="my-components__color secondary-light"></div>
              </div>
            </div>
          </div>

          <div class="buttons">

            <p class='display'>Buttons</p>
            <div class="p">
              <div class="my-components__wrapper-x10 d-flex">
                <button class="my-components__btn btn btn-primary">btn btn-primary</button>
                <button class="my-components__btn btn btn-secondary">btn btn-secondary</button>
              </div>
            </div>

            <div class="p">
              <div class="my-components__wrapper-x10 d-flex">
                <button class="my-components__btn btn btn-outline-primary">
                  btn btn-outline-primary
                </button>
                <button class="my-components__btn btn btn-outline-secondary">
                  btn btn-outline-secondary
                </button>
              </div>
            </div>

            <div class="p">
              <div class="my-components__wrapper-x10 d-flex">
                <button class="my-components__btn btn btn-flat-primary">
                  btn btn-flat-primary
                </button>
                <button class="my-components__btn btn btn-flat-secondary">
                  btn btn-flat-secondary
                </button>
              </div>
            </div>

            <div class="p">
              <div class="my-components__wrapper-x10 d-flex">
                <button class="my-components__btn btn btn-primary">
                  <svg class='mr-7' width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect y="5" width="12" height="2" fill="black"/>
                    <rect x="7" width="12" height="2" transform="rotate(90 7 0)" fill="black"/>
                  </svg>
                  btn btn-primary
                </button>
                <button class="my-components__btn btn btn-secondary">
                  <svg class='mr-7' width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect y="5" width="12" height="2" fill="black"/>
                    <rect x="7" width="12" height="2" transform="rotate(90 7 0)" fill="black"/>
                  </svg>
                  btn btn-secondary
                </button>
                <button class="my-components__btn btn btn-primary">
                  btn btn-primary
                  <svg class='ml-7' width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 5C0.447715 5 0 5.44772 0 6C0 6.55228 0.447715 7 1 7V5ZM13 6L13.7071 6.70711C14.0976 6.31658 14.0976 5.68342 13.7071 5.29289L13 6ZM8.70711 0.292893C8.31658 -0.0976311 7.68342 -0.0976311 7.29289 0.292893C6.90237 0.683417 6.90237 1.31658 7.29289 1.70711L8.70711 0.292893ZM7.29289 10.2929C6.90237 10.6834 6.90237 11.3166 7.29289 11.7071C7.68342 12.0976 8.31658 12.0976 8.70711 11.7071L7.29289 10.2929ZM1 7H13V5H1V7ZM13.7071 5.29289L8.70711 0.292893L7.29289 1.70711L12.2929 6.70711L13.7071 5.29289ZM12.2929 5.29289L7.29289 10.2929L8.70711 11.7071L13.7071 6.70711L12.2929 5.29289Z" fill="black"/>
                  </svg>
                </button>
                <button class="my-components__btn btn btn-secondary">
                  btn btn-secondary
                  <svg class='ml-7' width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 5C0.447715 5 0 5.44772 0 6C0 6.55228 0.447715 7 1 7V5ZM13 6L13.7071 6.70711C14.0976 6.31658 14.0976 5.68342 13.7071 5.29289L13 6ZM8.70711 0.292893C8.31658 -0.0976311 7.68342 -0.0976311 7.29289 0.292893C6.90237 0.683417 6.90237 1.31658 7.29289 1.70711L8.70711 0.292893ZM7.29289 10.2929C6.90237 10.6834 6.90237 11.3166 7.29289 11.7071C7.68342 12.0976 8.31658 12.0976 8.70711 11.7071L7.29289 10.2929ZM1 7H13V5H1V7ZM13.7071 5.29289L8.70711 0.292893L7.29289 1.70711L12.2929 6.70711L13.7071 5.29289ZM12.2929 5.29289L7.29289 10.2929L8.70711 11.7071L13.7071 6.70711L12.2929 5.29289Z" fill="black"/>
                  </svg>
                </button>
              </div>
            </div>

            <div class="p">
              <div class="my-components__wrapper-x10 d-flex">
                <button class="my-components__btn btn btn-primary" disabled>
                  btn btn-primary
                </button>
                <button class="my-components__btn btn btn-secondary" disabled>
                  btn btn-secondary
                </button>
              </div>
            </div>

            <div class="p">
              <div class="my-components__wrapper-x10 d-flex">
                <button class="my-components__btn btn btn-primary js-popup">js-popup</button>
                <button class="my-components__btn btn btn-secondary js-popup">js-popup</button>
              </div>
            </div>

          </div>
          
          <div class="my-badges">
            <p class="display">Badges</p>
            <div class="p d-flex">
              <div class="badge">1</div>
              <div class="badge badge-pill">1</div>
            </div>
          </div>
        </div>
      </div>
      <script src="js/main.js"></script>
      <script src="js/vendor.js"></script>
    </body>
</html>





