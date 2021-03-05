import Choices from 'choices.js';

const elements = document.querySelectorAll('.js-choice');

elements.forEach((el)=>{
  new Choices(el, {
    searchEnabled: true, //Убираем поиск в select
    searchPlaceholderValue: 'Поиск…', //Текст placeholder для поиска
    itemSelectText: "", //Убираем надпись Press to select напротив option
    noResultsText: "Ничего не найдено",
  });
})