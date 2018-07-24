<template lang="html">
  <div v-if="show" class="input-group mt-4">
    <my-captcha :callSuccess="enableBtn" resolve="text"></my-captcha>

    <div class="input-group mt-4">
      <button  @click="contactMe()" :disabled="btndis" class="btn btn-white">Envoyer</button>
    </div>
  </div>
</template>

<script>
import VueCaptcha from 'vue-captcha'

export default {
  name: 'Captcha',
  data () {
    return {
      btndis: true,
      show: true
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
       console.log('re-render start');
       this.$nextTick(() => {
         console.log('re-render end');
       });
     });
   },
   contactMe() {
     this.reloading();
     this.$emit('me-contacter');
   }
  },
  components: {
    'my-captcha': VueCaptcha
  }
}
</script>

<style lang="css">
.vue-captcha {background-color: #FAFFFD}
</style>
