<template>

  <span>

     <div class="row">
        <grid-vue class="input-field" tamanho="12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">O que está acontecendo?</label>
        </grid-vue>
       <p>
         <grid-vue class="btn waves-effect waves-light" tamanho="2 offset-s10">Publicar</grid-vue>
       </p>
     </div>

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
  import GridVue from '@/components/layouts/GridVue'

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
      GridVue
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
