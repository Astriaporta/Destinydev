<template lang="html">
  <div v-if="show" class="input-group mt-4">
    <my-captcha :callSuccess="enableBtn" resolve="text"></my-captcha>

    <div class="input-group mt-4">
      <!-- <button  @click="contactMe()" :disabled="btndis" class="btn btn-white">Envoyer</button> -->
      <dd-button @click="contactMe()" :disabled="btndis" :loading="loading">Envoyer</dd-button>
    </div>
  </div>
</template>

<script>
import VueCaptcha from 'vue-captcha'
import Button from './button'

export default {
  name: 'Captcha',
  props: {
    loading: {
      type: Boolean,
      default: false
    },
  },
  data () {
    return {
      btndis: true,
      show: true,
    }
  },
  computed: {
  },
  methods: {
    enableBtn() {
      this.btndis = false;
   },
   reloading() {
     this.show = false;
     this.btndis = true;
     this.$nextTick(() => {
       this.show = true;
     });
   },
   contactMe() {
     this.reloading();
     this.$emit('me-contacter');
   }
  },
  components: {
    'my-captcha': VueCaptcha,
    'dd-button': Button
  }
}
</script>

<style lang="css" scoped>
.vue-captcha {background-color: #FAFFFD}
</style>
