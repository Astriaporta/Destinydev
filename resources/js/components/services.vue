<template>
  <section id="services" class="d-flex justify-content-center bg-ice c-charcoal">
    <div class="container py-5">
      <h2>Services</h2>
      <div class="d-flex justify-content-around">
        <div class="px-2 services" v-for="service in services.first">
          <h3 class="text-center"><p :class="['title', service.bg]"><i :class="['fas', service.icon]"></i></p></h3>
          <p>{{ service.text }}</p>
        </div>
      </div>
      <div class="d-flex justify-content-around">
        <div class="px-2 services" v-for="service in services.two">
          <h3 class="text-center"><p :class="['title', service.bg]"><i :class="['fas', service.icon]"></i></p></h3>
          <p>{{ service.text }}</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'Services',
  data() {
    return {
      services: {
        first: [
          { text: 'Réalisation de projets sur-mesure', bg: 'bg-bittersweet', icon: 'fa-pencil-ruler'},
          { text: 'Adaptation pour une utilisation agréable', bg: 'bg-sass', icon: 'fa-hand-point-up'},
          { text: 'Choix de solutions technologiques adaptées à vos besoins et ceux des vos utilisateurs', bg: 'bg-javascript', icon: 'fa-map-signs'}
        ],
        two: [
          { text: 'Simplicité visuelle et confort d\'utilisation', bg: 'bg-bleue-de-france', icon: 'fa-eye'},
          { text: 'Complexité structurelle tout en gardant un code clair et optimisé', bg: 'bg-vuejs', icon: 'fa-cogs'},
          { text: 'Respect des normes W3C et PSR', bg: 'bg-php', icon: 'fa-code'}
        ]
      }
    };
  }
}
</script>
