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
          <div class="mt-30 my-typography">
            <p class='display'>Typography</p>
            <div class="p">
              <h1>h1 (32px)</h1>
              <h2>h2 (24px)</h2>
              <h3>h3 (19px)</h3>
              <h4>h4 (16px)</h4>
              <h5>h5 (13px)</h5>
              <h6>h6 (11px)</h6>
              <div class="text-small">text-small</div>
              <span class='mark'>mark</span>
            </div>
            <div class="p">
              <a href="#" class='link-primary d-block'>link-primary</a>
              <a href="#" class='link-secondary d-block'>
                link-secondary
              </a>
              <a href="#" class='link-secondary d-block'>
                link-secondary arrow-right
                <svg class='ml-3' width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path d="M1 5C0.447715 5 0 5.44772 0 6C0 6.55228 0.447715 7 1 7V5ZM13 6L13.7071 6.70711C14.0976 6.31658 14.0976 5.68342 13.7071 5.29289L13 6ZM8.70711 0.292893C8.31658 -0.0976311 7.68342 -0.0976311 7.29289 0.292893C6.90237 0.683417 6.90237 1.31658 7.29289 1.70711L8.70711 0.292893ZM7.29289 10.2929C6.90237 10.6834 6.90237 11.3166 7.29289 11.7071C7.68342 12.0976 8.31658 12.0976 8.70711 11.7071L7.29289 10.2929ZM1 7H13V5H1V7ZM13.7071 5.29289L8.70711 0.292893L7.29289 1.70711L12.2929 6.70711L13.7071 5.29289ZM12.2929 5.29289L7.29289 10.2929L8.70711 11.7071L13.7071 6.70711L12.2929 5.29289Z" fill="#ffc107"/>
                </svg>
              </a>
            </div>
          </div>
          <div class="mt-30 my-colors">
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

          <div class="mt-30 my-buttons">

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
                  btn btn-primary svg-l
                </button>
                <button class="my-components__btn btn btn-secondary">
                  <svg class='mr-7' width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect y="5" width="12" height="2" fill="black"/>
                    <rect x="7" width="12" height="2" transform="rotate(90 7 0)" fill="black"/>
                  </svg>
                  btn btn-secondary svg-l
                </button>
                <button class="my-components__btn btn btn-primary">
                  btn btn-primary svg-r
                  <svg class='ml-7' width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 5C0.447715 5 0 5.44772 0 6C0 6.55228 0.447715 7 1 7V5ZM13 6L13.7071 6.70711C14.0976 6.31658 14.0976 5.68342 13.7071 5.29289L13 6ZM8.70711 0.292893C8.31658 -0.0976311 7.68342 -0.0976311 7.29289 0.292893C6.90237 0.683417 6.90237 1.31658 7.29289 1.70711L8.70711 0.292893ZM7.29289 10.2929C6.90237 10.6834 6.90237 11.3166 7.29289 11.7071C7.68342 12.0976 8.31658 12.0976 8.70711 11.7071L7.29289 10.2929ZM1 7H13V5H1V7ZM13.7071 5.29289L8.70711 0.292893L7.29289 1.70711L12.2929 6.70711L13.7071 5.29289ZM12.2929 5.29289L7.29289 10.2929L8.70711 11.7071L13.7071 6.70711L12.2929 5.29289Z" fill="black"/>
                  </svg>
                </button>
                <button class="my-components__btn btn btn-secondary">
                  btn btn-secondary svg-r
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
                <button href="#popup-js" class="my-components__btn btn btn-primary open-popup-link-js">js-popup</button>
                <button href="#popup-js" class="my-components__btn btn btn-secondary open-popup-link-js">js-popup</button>
              </div>
            </div>

          </div>
          
          <div class="mt-30 my-cards">
            <p class="display">Cards</p>
            <div class="my-cards__row row">
              <div class="my-card"></div>
              <div class="my-card"></div>
              <div class="my-card"></div>
            </div>
          </div>
          <div class="mt-30 my-checkbox">
            <p class="display">Checkbox</p>
            <label class='checkbox-wrapper'>
              <input type="checkbox">
              <div class="custom-checkbox">
                <svg id="Capa_1" enable-background="new 0 0 515.556 515.556" height="512" viewBox="0 0 515.556 515.556"
                      width="512" xmlns="http://www.w3.org/2000/svg">
                      <path d="m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z" />
                </svg>
              </div>
              <span class="label">
                Text
              </span>
            </label>
          </div>
          <div class="mt-30 my-radio">
            <p class="display">Radio</p>
            <label class='radio-btn-wrapper'>
              <input type="radio" name='person'>
              <div class="custom-radio-btn">
                <svg class="radio-btn-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0)">
                    <path
                          d="M21 22.4516H19.4516V3.48387C19.4516 3.05632 19.105 2.70968 18.6774 2.70968H12.871V0.774194C12.871 0.346645 12.5244 0 12.0968 0H6.72583C6.29828 0 5.95164 0.346645 5.95164 0.774194V2.70968H5.3226C4.89506 2.70968 4.54841 3.05632 4.54841 3.48387V22.4516H3.00002C2.57248 22.4516 2.22583 22.7983 2.22583 23.2258C2.22583 23.6534 2.57248 24 3.00002 24H21C21.4276 24 21.7742 23.6534 21.7742 23.2258C21.7742 22.7983 21.4276 22.4516 21 22.4516ZM7.50002 1.54839H11.3226V2.70968H7.50002V1.54839ZM10.4516 22.4516V19.1613H13.5484V22.4516H10.4516ZM15.0968 22.4516V19.1613H15.4355C15.8631 19.1613 16.2097 18.8146 16.2097 18.3871C16.2097 17.9595 15.8631 17.6129 15.4355 17.6129C12.7426 17.6129 11.0588 17.6129 8.56454 17.6129C8.13699 17.6129 7.79035 17.9595 7.79035 18.3871C7.79035 18.8146 8.13699 19.1613 8.56454 19.1613H8.90325V22.4516H6.0968V4.25806H17.9032V22.4516H15.0968ZM10.8871 6.53226C10.8871 6.95981 10.5405 7.30645 10.1129 7.30645H9.24196C8.81441 7.30645 8.46777 6.95981 8.46777 6.53226C8.46777 6.10471 8.81441 5.75806 9.24196 5.75806H10.1129C10.5405 5.75806 10.8871 6.10471 10.8871 6.53226ZM15.4839 6.53226C15.4839 6.95981 15.1373 7.30645 14.7097 7.30645H13.8387C13.4111 7.30645 13.0645 6.95981 13.0645 6.53226C13.0645 6.10471 13.4111 5.75806 13.8387 5.75806H14.7097C15.1373 5.75806 15.4839 6.10471 15.4839 6.53226ZM10.8871 9.43548C10.8871 9.86303 10.5405 10.2097 10.1129 10.2097H9.24196C8.81441 10.2097 8.46777 9.86303 8.46777 9.43548C8.46777 9.00794 8.81441 8.66129 9.24196 8.66129H10.1129C10.5405 8.66129 10.8871 9.00794 10.8871 9.43548ZM15.4839 9.43548C15.4839 9.86303 15.1373 10.2097 14.7097 10.2097H13.8387C13.4111 10.2097 13.0645 9.86303 13.0645 9.43548C13.0645 9.00794 13.4111 8.66129 13.8387 8.66129H14.7097C15.1373 8.66129 15.4839 9.00794 15.4839 9.43548ZM10.8871 12.3387C10.8871 12.7663 10.5405 13.1129 10.1129 13.1129H9.24196C8.81441 13.1129 8.46777 12.7663 8.46777 12.3387C8.46777 11.9112 8.81441 11.5645 9.24196 11.5645H10.1129C10.5405 11.5645 10.8871 11.9112 10.8871 12.3387ZM15.4839 12.3387C15.4839 12.7663 15.1373 13.1129 14.7097 13.1129H13.8387C13.4111 13.1129 13.0645 12.7663 13.0645 12.3387C13.0645 11.9112 13.4111 11.5645 13.8387 11.5645H14.7097C15.1373 11.5645 15.4839 11.9112 15.4839 12.3387ZM10.8871 15.2419C10.8871 15.6695 10.5405 16.0161 10.1129 16.0161H9.24196C8.81441 16.0161 8.46777 15.6695 8.46777 15.2419C8.46777 14.8144 8.81441 14.4677 9.24196 14.4677H10.1129C10.5405 14.4677 10.8871 14.8144 10.8871 15.2419ZM15.4839 15.2419C15.4839 15.6695 15.1373 16.0161 14.7097 16.0161H13.8387C13.4111 16.0161 13.0645 15.6695 13.0645 15.2419C13.0645 14.8144 13.4111 14.4677 13.8387 14.4677H14.7097C15.1373 14.4677 15.4839 14.8144 15.4839 15.2419Z"
                          fill="#3A76F0" />
                  </g>
                  <defs>
                    <clipPath id="clip0">
                      <rect width="24" height="24" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
                Я юридиское лицо
              </div>
            </label>

            <label class='radio-btn-wrapper'>
              <input type="radio" name='person'>
              <div class="justify-center custom-radio-btn">
                Я юридиское лицо
              </div>
            </label>

            <label class='radio-wrapper'>
              <input type="radio" name="radio-id">
              <div class="custom-radio">

              </div>
              <span class="label">
                Text
              </span>
            </label>
            <label class='radio-wrapper'>
              <input type="radio" name="radio-id">
              <div class="custom-radio">

              </div>
              <span class="label">
                Text
              </span>
            </label>
          </div>
          <div class="mt-30 my-inputs">
            <p class="display">Inputs</p>
            <div class="input-icon">
              <input type="text" placeholder="Svg изображение в input">
              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	              viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <g>
                  <g>
                    <path d="M437.02,330.98c-27.883-27.882-61.071-48.523-97.281-61.018C378.521,243.251,404,198.548,404,148
                      C404,66.393,337.607,0,256,0S108,66.393,108,148c0,50.548,25.479,95.251,64.262,121.962
                      c-36.21,12.495-69.398,33.136-97.281,61.018C26.629,379.333,0,443.62,0,512h40c0-119.103,96.897-216,216-216s216,96.897,216,216
                      h40C512,443.62,485.371,379.333,437.02,330.98z M256,256c-59.551,0-108-48.448-108-108S196.449,40,256,40
                      c59.551,0,108,48.448,108,108S315.551,256,256,256z"/>
                  </g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
              </svg>
            </div>
            <input type="text">
            <input type="tel" class="phone-mask d-block mt-30">
            <textarea class='mt-20 d-block' name="" id="" cols="30" rows="10"></textarea>
          </div>
          <div class="mt-30 my-select">
            <p class="display">Select</p>
            <select name="Пол" class="js-choice">
              <option value data-choices-placeholder>Введите пол</option>
              <option value="Мужской">Мужской</option>
              <option value="Женский">Женский</option>
            </select>
          </div>
          <div class="mt-30 my-range-slider">
            <p class="display">Range-slider</p>
            <div class="range-slider-wrap">
              <div class="range-slider"></div>
              <div class="range-slider__controls mt-30">

                <label class='range-slider__control input-range'>
                  <span class='mr-10'>от</span>
                  <input class='range-slider__input range-slider__start-js' type="number" min="500" max="999999" placeholder="500">
                  <span class='to'>р</span>
                </label>

                <label class='range-slider__control input-range' class='ml-30'>
                  <span class='mr-10'>до</span>
                  <input class='range-slider__input range-slider__end-js' type="number" min="500" max="999999" placeholder="999999">
                  <span class='to'>р</span>
                </label>

              </div>
            </div>
          </div>
          <div class="my-popups mt-30">
            <p class="display">Popups</p>
            <div id="popup-js" class='mfp-hide'>
              <popup>
            </div>
            <div class='popup' id="popup-test">
              <popup>
            </div>
          </div>
          <div class="mt-30 my-badges">
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