import Vue from 'vue';
import Vuelidate from 'vuelidate'
import Hello from '../components/Hello/Hello.vue';
import Popup from '../components/Popup/Popup.vue';

Vue.use(Vuelidate);

let app = new Vue({
  el: '#app',
  components: {
    //Регистрация компонентов в kebab-notation. Все буквы должны быть в нижнем регистре
    'hello': Hello,
    'popup': Popup,
  },
  data: {
    msg: 'Hello, this is Vue !!!'
  }
})