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
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        />
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
        <header class='uk-header'>
          <div class="container">
            <div class="row">
              <div class="uk-header__main">
                <h1>UiKit</h1>
                <h2 class='mt-20'>Accordion</h2>
                <ul uk-accordion>
                    <li class="uk-open">
                        <a class="uk-accordion-title" href="#">Item 1</a>
                        <div class="uk-accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </li>
                    <li>
                        <a class="uk-accordion-title" href="#">Item 2</a>
                        <div class="uk-accordion-content">
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                        </div>
                    </li>
                    <li>
                        <a class="uk-accordion-title" href="#">Item 3</a>
                        <div class="uk-accordion-content">
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                        </div>
                    </li>
                </ul>
                <h2 class='uk-mt-50'>Switcher</h2>
                <ul class="uk-subnav uk-subnav-pill" uk-switcher="animation: uk-animation-fade">
                    <li><a href="#">Item</a></li>
                    <li><a href="#">Item</a></li>
                    <li><a href="#">Item</a></li>
                </ul>

                <ul class="uk-switcher uk-margin">
                    <li>Hello!</li>
                    <li>Hello again!</li>
                    <li>Bazinga!</li>
                </ul>
                <h2 class="uk-mt-50">Tooltip</h2>
                <div class="uk-icon mt-10" uk-tooltip="title: Hello world; duration: 55">
                  <svg height="512pt" viewBox="-21 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                    <path d="m453.332031 229.332031c-8.832031 0-16-7.167969-16-16 0-61.269531-23.847656-118.847656-67.15625-162.175781-6.25-6.25-6.25-16.382812 0-22.632812s16.382813-6.25 22.636719 0c49.34375 49.363281 76.519531 115.007812 76.519531 184.808593 0 8.832031-7.167969 16-16 16zm0 0"/><path d="m16 229.332031c-8.832031 0-16-7.167969-16-16 0-69.800781 27.179688-135.445312 76.542969-184.789062 6.25-6.25 16.386719-6.25 22.636719 0s6.25 16.386719 0 22.636719c-43.328126 43.304687-67.179688 100.882812-67.179688 162.152343 0 8.832031-7.167969 16-16 16zm0 0"/><path d="m234.667969 512c-44.117188 0-80-35.882812-80-80 0-8.832031 7.167969-16 16-16s16 7.167969 16 16c0 26.476562 21.523437 48 48 48 26.472656 0 48-21.523438 48-48 0-8.832031 7.167969-16 16-16s16 7.167969 16 16c0 44.117188-35.882813 80-80 80zm0 0"/><path d="m410.667969 448h-352c-20.589844 0-37.335938-16.746094-37.335938-37.332031 0-10.925781 4.757813-21.269531 13.058594-28.375 32.445313-27.414063 50.941406-67.261719 50.941406-109.480469v-59.480469c0-82.34375 66.988281-149.332031 149.335938-149.332031 82.34375 0 149.332031 66.988281 149.332031 149.332031v59.480469c0 42.21875 18.496094 82.066406 50.730469 109.332031 8.511719 7.253907 13.269531 17.597657 13.269531 28.523438 0 20.585937-16.746094 37.332031-37.332031 37.332031zm-176-352c-64.707031 0-117.335938 52.628906-117.335938 117.332031v59.480469c0 51.644531-22.632812 100.414062-62.078125 133.757812-.746094.640626-1.921875 1.964844-1.921875 4.097657 0 2.898437 2.433594 5.332031 5.335938 5.332031h352c2.898437 0 5.332031-2.433594 5.332031-5.332031 0-2.132813-1.171875-3.457031-1.878906-4.054688-39.488282-33.386719-62.121094-82.15625-62.121094-133.800781v-59.480469c0-64.703125-52.628906-117.332031-117.332031-117.332031zm0 0"/><path d="m234.667969 96c-8.832031 0-16-7.167969-16-16v-64c0-8.832031 7.167969-16 16-16s16 7.167969 16 16v64c0 8.832031-7.167969 16-16 16zm0 0"/>
                  </svg>
                </div>
                <h2 class="uk-mt-50">Off-canvas</h2>
                <button class="uk-button uk-button-default" type="button" uk-toggle="target: #offcanvas-overlay">Open</button>
                <div id="offcanvas-overlay" uk-offcanvas="overlay: true; mode: push">
                  <div class="uk-offcanvas-bar">
                      <button class="uk-offcanvas-close" type="button" uk-close></button>
                      <h3>Title</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                </div>
                <h2 class="uk-mt-50">Scroll</h2>
                <a class="uk-button uk-button-primary d-block" href="#target" uk-scroll>Scroll down</a>

                <h2 class="uk-mt-50">Toggle</h2>
                <button class="uk-button uk-button-default" type="button" uk-toggle="target: .toggle-animation-queued; animation: uk-animation-fade; queued: true; duration: 300">Toggle</button>
                <p class="toggle-animation-queued uk-card uk-card-default uk-card-body uk-margin-small">Animation</p>
                <p class="toggle-animation-queued uk-card uk-card-primary uk-card-body uk-margin-small" hidden>Animation</p>

                <h2 class="uk-mt-50">Drop</h2>
                <div class="uk-inline">
                    <button class="uk-button uk-button-default" type="button">Hover</button>
                    <div uk-drop>
                        <div class="uk-card uk-card-body uk-card-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
                    </div>
                </div>

                <h2 class="uk-mt-50">Parallax</h2>
                <div class="uk-height-large uk-background-cover uk-light uk-flex uk-flex-top uk-bg">
                  <h1 class="uk-text-white" uk-parallax="opacity: 0,1; y: 100,0; viewport: 0.5">Headline</h1>
                </div>


                <h2 id="target" class='uk-mt-50'>End scroll</h2>

                <p class="uk-header__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores tenetur, autem similique voluptatum a necessitatibus saepe ab eveniet nulla beatae consequatur aliquam, eos porro cumque expedita accusamus dolore non repellat dolores adipisci voluptas fuga quam eaque! Ut excepturi totam doloribus ea   sapiente reprehenderit eos, enim accusamus vero. Similique, quam quo.</p>
                <p class="uk-section-grey uk-header__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores tenetur, autem similique voluptatum a necessitatibus saepe ab eveniet nulla beatae consequatur aliquam, eos porro cumque expedita accusamus dolore non repellat dolores adipisci voluptas fuga quam eaque! Ut excepturi totam doloribus ea sapiente  reprehenderit eos, enim accusamus vero. Similique, quam quo.</p>
              </div>
              <div class="uk-header__aside">
                <div uk-sticky="bottom:true">
                  <div class="uk-box"></div>
                </div>
              </div>
            </div>
          </div>
        </header>
      </div>
      <script src="js/main.js"></script>
      <script src="js/vendor.js"></script>
    </body>
</html>
