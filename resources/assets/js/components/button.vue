<template lang="html">
  <button
  :type="nativeType"
  :name="name"
  :disabled="buttonDisabled"
   class="btn btn-white"
  @click="handleClick">
    <loader v-if="loading"></loader>
    <slot></slot>
  </button>
</template>

<script>
import Loader from './loader'

export default {
  name: 'dd-button',
  components: {Loader},
  props: {
    loading: {
      type: Boolean,
      default: false
    },
    name: {
      type: String,
      default: ''
    },
    nativeType: {
      type: String,
      default: 'button'
    },
     disabled: Boolean,
  },
  computed: {
    buttonDisabled() {
      return this.disabled || this.loading;
    }
  },
  methods: {
    handleClick(evt) {
      this.$emit('click', evt);
    }
  }
}
</script>

<style lang="css">
.loading {opacity: 0.5}
</style>
