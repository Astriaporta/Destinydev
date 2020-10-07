<template>
  <div>
    <div class="sidenav" :class="{'is-open': isOpen}">
      <div class="navbar navbar-darky h-100">
        <div class="d-flex flex-column justify-content-around h-100">
          <nav class="nav nav-masthead d-flex flex-column">
            <a v-for="item in menu" class="nav-link" :href="'#' + item.url" :aria-label="item.label" @click="isOpen = !isOpen">{{item.name}}</a>
          </nav>
        </div>
      </div>
    </div>
    <button class="hamburger"
    name="menu"
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
        {name: 'Accueil', url: 'top', label: "Voir le haut de la page"},
        {name: 'Services', url: 'services', label: "Quels sont les services que je propopse"},
        {name: 'A propos', url: 'about', label: "Qui suis-je ?"},
        {name: 'Compétences', url: 'skills', label: "Quels sont mes compétences"},
        {name: 'Contact', url: 'contact', label: "Me contacter"}
      ]
    };
  }
}
</script>
