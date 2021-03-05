<template>
  <div>
    <div v-if="status == 'PENDING'" class="popup-form__pending">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: none; display: block; shape-rendering: auto;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
          <circle cx="50" cy="50" fill="none" stroke="#1d0e0b" stroke-width="4" r="20" stroke-dasharray="94.24777960769379 33.41592653589793">
          <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="0.9345794392523364s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
          </circle>
        </svg>
      </div>
    <div v-if="status == 'SUCCESS'" class="popup-form__success">
      <h1 class="popup-form-success__message">Ваша заявка успешно отправлена</h1>
    </div>
  </div>
  
</template>

<script>
export default {
  props: {
    status: String
  },
  data: ()=> ({
    
  })
}
</script>