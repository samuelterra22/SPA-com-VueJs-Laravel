<template>

  <login-template>

    <span slot="menuesquerdo">
      <img class="responsive-img" src="https://www.designerd.com.br/wp-content/uploads/2013/06/criar-rede-social.png"/>
    </span>

    <span slot="principal">
      <h2>Login</h2>

      <input type="text" placeholder="E-mail" value=""/>
      <input type="text" placeholder="Senha" value=""/>
      <button type="button" class="btn">Entrar</button>
    </span>

  </login-template>

</template>

<script>
  import LoginTemplate from '@/templates/LoginTemplate'
  import CardConteudoVue from '@/components/social/CardConteudoVue'
  import CardDetalheVue from '@/components/social/CardDetalheVue'
  import PublicarConteudoVue from '@/components/social/PublicarConteudoVue'

  export default {
    name: 'Login',
    data () {
      return {
        msg: 'Welcome to Your Vue.js App'
      }
    },
    components: {
      LoginTemplate,
      CardConteudoVue,
      CardDetalheVue,
      PublicarConteudoVue
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
