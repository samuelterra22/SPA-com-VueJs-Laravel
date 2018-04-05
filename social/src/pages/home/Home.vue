<template>
  <card-conteudo-vue
    perfil="http://materializecss.com/images/yuna.jpg"
    nome="Maria Silva"
    data="13/01/18 13:30">

    <div class="card-image">
      <img src="http://materializecss.com/images/sample-1.jpg">
      <span class="card-title">Card Title</span>
    </div>

    <div class="card-content">
      <p>I am a very simple card. I am good at containing small bits of information.
        I am convenient because I require little markup to use effectively.</p>
    </div>

  </card-conteudo-vue>
</template>

<script>
  import CardConteudoVue from '@/components/social/CardConteudoVue'

  export default {
    name: 'Home',
    data () {
      return {
        msg: 'Welcome to Your Vue.js App'
      }
    },
    components: {
      CardConteudoVue
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
