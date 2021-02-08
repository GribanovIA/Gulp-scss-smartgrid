<template>
  <div>
    <div v-if="status == 'INITIAL'" class="popup popup-initial">
      <h1 class="popup__title">Popup header {{message}}</h1>
      <svg class='popup__close popup-close-js' version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
        <g>
          <g>
            <path d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717
              L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859
              c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287
              l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285
              L284.286,256.002z"/>
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
      <form @submit.prevent="submit" class="popup__form">
        <input 
                v-model.trim="name"
                placeholder="Ваше имя"
                type="text"
                class="popup__form-input d-block"
                :class="$v.name.$error ? 'is-invalid': ''"
        >
        <p v-if="$v.name.$dirty && !$v.name.required">
          Данное поле обазательное
        </p>
        <input 
                v-model.trim="phone"
                placeholder="Номер телефона"
                type="text"
                class="popup__form-input d-block"
                :class="$v.phone.$error ? 'is-invalid': ''"
        >
        <p v-if="$v.phone.$dirty && !$v.phone.required">
          Данное поле обазательное
        </p>
        <p v-if="$v.phone.$dirty && !$v.phone.minLength">
          Данное поле должно содержать больше 8-ми символов
        </p>
        <button type="submit" class="popup__form-btn btn btn-primary">Оставить заявку</button>
      </form>
    </div>  
    <div v-if="status == 'PENDING'" class="popup popup-pending">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: none; display: block; shape-rendering: auto;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
        <circle cx="50" cy="50" fill="none" stroke="#1d0e0b" stroke-width="4" r="20" stroke-dasharray="94.24777960769379 33.41592653589793">
        <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="0.9345794392523364s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
        </circle>
      </svg>
    </div>
    <div v-if="status == 'SUCCESS'" class="popup popup-success">
      <h1 class="popup-success__message">Ваша заявка успешно отправлена</h1>
    </div>
  </div>
</template>

<script>
import { required, minLength } from 'vuelidate/lib/validators'

function delay(ms) {
  return new Promise((resolve, reject) => {
    setTimeout(resolve, ms);
  });
}

export default {
  data: ()=> ({
    name: '',
    phone: '',
    message: 'Привет, Popup!',
    status: 'INITIAL',
  }),
  validations: {
    name: {
      required
    },
    phone: {
      required,
      minLength: minLength(8)
    }
  },
  methods: {
    submit() {
      console.log('Click submit btn');
      //Метод touch запускает валидацию
      this.$v.$touch()
      if (this.$v.$invalid) {
        // this.status = 'ERROR'
      } else {
        // do your submit logic here
        this.status = 'PENDING'
        delay(1000)
        .then(()=>{
          this.status = 'SUCCESS';
          console.log('Success');
          return delay(1500);
        })
        .then(()=>{
          this.status = 'INITIAL';
          this.name = '';
          this.phone = '';
          this.$v.$reset();
          //Закрываем popup
          $.magnificPopup.close();
        })
      }
    }
  }
}
</script>