<template>
  <button :type="nativeType" :name="name" :disabled="buttonDisabled" class="btn btn-white"
  @click="handleClick">
    <div v-if="loading" class="loader-ripple"><div></div><div></div></div>
    <slot></slot>
  </button>
</template>

<script>
export default {
  name: 'dd-button',
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
