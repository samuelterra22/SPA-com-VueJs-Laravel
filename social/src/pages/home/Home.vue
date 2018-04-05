<template>

  <span>

    <publicar-conteudo-vue/>

      <card-conteudo-vue
        perfil="http://materializecss.com/images/yuna.jpg"
        nome="Maria Silva"
        data="13/01/18 13:30">

      <card-detalhe-vue
        imagem="http://materializecss.com/images/sample-1.jpg"
        titulo="Card Title"
        texto="I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively."
      />

    </card-conteudo-vue>
  </span>

</template>

<script>
  import CardConteudoVue from '@/components/social/CardConteudoVue'
  import CardDetalheVue from '@/components/social/CardDetalheVue'
  import PublicarConteudoVue from '@/components/social/PublicarConteudoVue'

  export default {
    name: 'Home',
    data () {
      return {
        msg: 'Welcome to Your Vue.js App'
      }
    },
    components: {
      CardConteudoVue,
      CardDetalheVue,
      PublicarConteudoVue
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
