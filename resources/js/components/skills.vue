<template>
  <section id="skills" class="d-flex justify-content-center bg-ice c-charcoal">
    <div class="container py-5">
      <h2>Compétences</h2>
      <div v-for="skill in skills">
        <p>{{ skill.name}}</p>
        <div class="skills-bar">
          <div :class="['skill', skill.color]" :data-lvl="skill.lvl" :style="{width: skill.lvl + '%'}">{{ skill.lvl}}%</div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'Skills',
  data() {
    return {
      skills: [
        {name: 'HTML', color: 'html', lvl: '90'},
        {name: 'CSS', color: 'css', lvl: '70'},
        {name: 'SASS', color: 'sass', lvl: '60'},
        {name: 'JavaScript', color: 'javascript', lvl: '75'},
        {name: 'Vue.js', color: 'vuejs', lvl: '60'},
        {name: 'PHP', color: 'php', lvl: '80'},
        {name: 'Laravel', color: 'laravel', lvl: '75'}
      ]
    };
  }
}
</script>
