<template>
  <nav :class="cor || 'blue'">
    <div class="nav-wrapper container">
      <a v-bind:href="url || '#'" class="brand-logo">{{logo || 'Site'}}</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>
</template>

<script>
  export default {
    name: 'NavBarVue',
    props: ['logo', 'url', 'cor'],
    data () {
      return {

      }
    }
  }
</script>

<style scoped>

</style>
