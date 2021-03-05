<template>
  <div>
    <div class="popup-form popup-form-initial">
      <popup-status :status="status" />
      <h1 class="popup-form__title">Popup header</h1>
      <svg class='popup-form__close popup-close-js' version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
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
      <form @submit.prevent="submit" class="popup-form__form">
        <!-- <========== 3) Добавить поля инпуты в разметку ==========> -->


        <div class="popup-form__input">
          <input 
                v-model.trim="name"
                placeholder="Ваше имя"
                type="text"
                class="popup-form__form-input d-block"
                :class="$v.name.$error ? 'is-invalid': ''"
          >
          <p v-if="$v.name.$dirty && !$v.name.required">
            Данное поле обазательное
          </p>
        </div>
        <div class="popup-form__input">
          <input 
                v-model.trim="email"
                placeholder="Ваш email"
                type="text"
                class="popup-form__form-input d-block"
                :class="$v.email.$error ? 'is-invalid': ''"
          >
          <p v-if="$v.email.$dirty && !$v.email.required">
            Данное поле обазательное
          </p>
        </div>
        <div class="popup-form__input">
          <input 
                v-model.trim="phone"
                placeholder="Номер телефона"
                type="text"
                class="popup-form__form-input d-block"
                :class="$v.phone.$error ? 'is-invalid': ''"
          >
          <p v-if="$v.phone.$dirty && !$v.phone.required">
            Данное поле обазательное
          </p>
          <p v-if="$v.phone.$dirty && !$v.phone.minLength">
            Данное поле должно содержать больше 8-ми символов
          </p>
        </div> 


        <div v-if="status === 'ERROR'" class='popup-form__server-error'>
          <p v-for="error in serverErrorMessages" :key='error'>
            {{error}}
          </p>
        </div>


        <button :disabled="$v.$dirty && $v.$invalid" type="submit" class="popup-form__form-btn btn btn-primary">Оставить заявку</button>
      </form>
    </div>  
  </div>
</template>

<script>
import { required, minLength } from 'vuelidate/lib/validators'
import {sendFormData} from '../../js/api/api-methods';
import PopupStatus from '../PopupStatus/PopupStatus.vue';
function delay(ms) {
  return new Promise((resolve, reject) => {
    setTimeout(resolve, ms);
  });
}

export default {
  components: {
    'popup-status': PopupStatus
  },
  data: ()=> ({
    //<========== 1) Определить поля формы ==========>

    name: '',
    email: '',
    phone: '',
    formName: 'Сделать расчет стоимости',
    serverErrorMessages: '',
    status: '',
  }),
    //<========== 2) Что необходимо валидировать ==========>

  validations: {
    name: {
      required
    },
    email: {
      required
    },
    phone: {
      required,
      minLength: minLength(8)
    }
  },
  methods: {
    submit() {
      //Метод touch запускает валидацию
      this.$v.$touch()
      if (this.$v.$invalid) {
        // this.status = 'ERROR'
      } else {
        // do your submit logic here
        this.status = 'PENDING'
        // <========== 4) Отправляем значение инпутов на сервер ==========>
        // <========== Далее необходимо смотреть файл mail.php ==========>

        sendFormData({
          name: this.name,
          email: this.email,
          phone: this.phone,
          formName: this.formName
        })
        .then((response)=>{
          //<=== 11) Проверяем статус ответа от сервера ===>
          if(response.data.status === "ERROR") {
            throw {
              status: response.data.status,
              messages: response.data.messages
            }
          } else if(response.data.status === "SUCCESS") {
            console.log(response.data);
            this.status = 'SUCCESS';
            //Задержка перед закрытием модального окна
            return delay(1600);
          }
        })
        .then(()=>{
          //<=== 12) Сбрасываем все поля и закрываем модальное окно ===>
          this.status = '';
          this.name = '';
          this.email = '';
          this.phone = '';
          this.$v.$reset();
          //Закрываем popup
          $.magnificPopup.close();
        })
        .catch((err)=>{
          if(err.response) {
            //Сервер ответил с ошибкой 4хх/5хх
            console.log(err.response);
          } else if(err.request) {
            //Запрос сделан, но не получен ответ
            console.log(err.request);
          } else {
            console.log()
            //Ошибка на уровне программы, проброс исключения throw
            this.status = "ERROR"
            this.serverErrorMessages = err.messages;
          }
          
        })
      }
    }
  }
}
</script>