<template lang="html">
  <div>
    <div class="sidenav" :class="{'is-open': isOpen}">
      <div class="navbar navbar-darky h-100">
        <div class="d-flex flex-column justify-content-around h-100">
          <nav class="nav nav-masthead d-flex flex-column">
            <a v-for="item in menu" class="nav-link" :href="'#' + item.url">{{item.name}}</a>
          </nav>
        </div>
      </div>
    </div>
    <button class="hamburger"
    :class="{'is-open':isOpen, 'is-closed': !isOpen}" @click="isOpen = !isOpen">
      <span class="hamb-top"></span>
      <span class="hamb-middle"></span>
      <span class="hamb-bottom"></span>
    </button>
  </div>
</template>

<script>
export default {
  name: 'Menu',
  data() {
    return {
      isOpen: false,
      menu: [
        {name: 'Accueil', url: 'top'},
        {name: 'Services', url: 'services'},
        {name: 'A propos', url: 'about'},
        {name: 'Compétences', url: 'skills'},
        {name: 'Contact', url: 'contact'}
      ]
    };
  }
}
</script>
