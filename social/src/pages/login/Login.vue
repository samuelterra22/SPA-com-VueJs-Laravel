<template>

  <login-template>

    <span slot="menuesquerdo">
      <img class="responsive-img" src="https://www.designerd.com.br/wp-content/uploads/2013/06/criar-rede-social.png"/>
    </span>

    <span slot="principal">
      <span v-if="!cadastro">
        <h2>Login</h2>

        <input type="email" placeholder="E-mail" value=""/>
        <input type="password" placeholder="Senha" value=""/>
        <button class="btn">Entrar</button>
        <button class="btn orange" v-on:click="cadastro = !cadastro">Cadastre-se</button>
      </span>

      <span v-if="cadastro">
        <h2>Cadastro</h2>

        <input type="text" placeholder="Nome" value=""/>
        <input type="email" placeholder="E-mail" value=""/>
        <input type="password" placeholder="Senha" value=""/>
        <input type="password" placeholder="Confirme sua senha" value=""/>
        <button class="btn">Cadastrar</button>
        <button class="btn orange" v-on:click="cadastro = !cadastro">Já tenho conta</button>

      </span>
    </span>

  </login-template>

</template>

<script>
  import LoginTemplate from '@/templates/LoginTemplate'

  export default {
    name: 'Login',
    data () {
      return {
        cadastro: false
      }
    },
    components: {
      LoginTemplate,
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
