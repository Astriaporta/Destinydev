<template lang="html">
  <div v-if="show">
    <input type="text" name="test" value="">
    <button @click="rerender" class="btn">re-render</button>
  </div>
</template>

<script>
export default {
  name: 'TestReload',
  data() {
    return {show:true}
  },
  methods: {
    rerender() {
      this.show = false;
      this.$nextTick(() => {
        this.show = true;
        console.log('re-render start');
        this.$nextTick(() => {
          console.log('re-render end');
        });
      });
    }
  }
}
</script>
