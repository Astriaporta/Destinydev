<template>
  <section class="h-100">
    <div class="h-100 d-flex flex-column justify-content-between">
      <div class="h-100  d-flex flex-column justify-content-center text-center">
        <h1 class="main-title">Destinydev</h1>
        <div class="mb-1 mt-2 mr-3">
          <ul class="d-flex justify-content-center mt-4 social">
            <li class="mx-4" v-for="link in social">
              <a :href="link.url" :title="link.name" target="_blank">
                <i :class="['fab', link.classfas, 'fa-lg']"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="text-center">
        En savoir plus
        <h2 class="mb-2">
          <a href="#services" class="see-more">
            <i class="fa fa-angle-down"></i>
          </a>
        </h2>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'Home',
  data() {
    return {
      social: [
        {name: 'Github', url: 'https://github.com/astriaporta', classfas: 'fa-github'},
        {name: 'Twitter', url: 'https://twitter.com/astraporta', classfas: 'fa-twitter'},
        {name: 'Linkedin', url: 'https://www.linkedin.com/in/nico-skr-174192b5/', classfas: 'fa-linkedin'},
        {name: 'Viadeo', url: 'http://www.viadeo.com/p/002xcj689jaoihp', classfas: 'fa-viadeo'}
      ]
    };
  },
  methods: {
    ucfirst: (string) => {
      return string.charAt(0).toUpperCase() + string.slice(1);
    }
  }
}
</script>

<style lang="css">
</style>
