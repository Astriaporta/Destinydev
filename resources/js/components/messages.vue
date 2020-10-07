<template>
  <div :class="['messages', {hide:!isOpen}]">
    <slot></slot>
    <button type="button" class="btn btn-close close" data-dismiss="alert" aria-label="Close" @click="isOpen = !isOpen">
        <span aria-hidden="true">&times;</span>
    </button>
  </div>
</template>

<script>
export default {
  name: 'Messages',
  data() {
    return {
        isOpen: true,
    }
  }
}
</script>
