import Vue from 'vue';
import Hello from '../components/Hello/Hello.vue';
let app = new Vue({
  el: '#app',
  components: {
    //Регистрация компонентов в kebab-notation
    'Hello': Hello,
  },
  data: {
    msg: 'Hello, this is Vue !!!'
  }
})