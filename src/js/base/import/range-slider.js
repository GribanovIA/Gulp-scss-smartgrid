//TODO: Добавить js файл range-slider
import noUiSlider from 'nouislider';

const rangeSlider = document.querySelector('.range-slider');
//Проверяем что такой элемент существует , иначе появляется тупая ошибка о то что такого элемента нет
if(rangeSlider) {
  noUiSlider.create(rangeSlider, {
  // Handles start at ...
    start: [500, 999999],
    step: 1,
    connect: true, //Отрезок между ползунками заполняется цветом
    range: {
          'min': 500,
          'max': 999999
    },
  });

  const inputFrom = document.querySelector('.range-slider__start-js');
  const inputTo = document.querySelector('.range-slider__end-js');

  const inputs = [inputFrom, inputTo];


  rangeSlider.noUiSlider.on('update',function(values, handle){
    inputs[handle].value = Math.round(values[handle])
  });

  const setRangeSlider = (i, value) => {
    let arr = [null, null];
    arr[i] = value;
    rangeSlider.noUiSlider.set(arr);
  }

  inputs.forEach((el,index) => {
    el.addEventListener('change', (e)=>{
      setRangeSlider(index, e.currentTarget.value);
    })
  })
}
