//Импорт экземпляра Vue с настройками
import './vue-instance';
//Импорты сторонник библиотек
// https://modernizr.com/download?setclasses
import Modernizr from './import/modernizr-custom'; //Присваиваем класс webp если браузер имеет поддержку
import $ from 'jquery';

//JS компоненты из библиотеки uikit
import "./import/uikit.min";

import "./base/base";

//Импорты BEM модулей
import "./import/modules";

//Общий js код для всех страниц