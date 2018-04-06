<template>

  <site-template>

    <span slot="menuesquerdo">
      <img class="responsive-img" src="https://www.designerd.com.br/wp-content/uploads/2013/06/criar-rede-social.png"/>
    </span>

    <span slot="principal">

        <h2>Perfil</h2>

        <input type="text" placeholder="Nome" v-model="name"/>
        <input type="email" placeholder="E-mail" v-model="email"/>
        <input type="password" placeholder="Senha" v-model="password"/>
        <input type="password" placeholder="Confirme sua senha" v-model="password_confirmation"/>
        <button class="btn" v-on:click="cadastro()">Cadastrar</button>
        <router-link class="btn orange right" to="/login">Já tenho conta</router-link>

    </span>

  </site-template>

</template>

<script>
  import SiteTemplate from '@/templates/SiteTemplate'
  import axios from 'axios'

  export default {
    name: 'Perfil',
    data () {
      return {
        name:'',
        email:'',
        password:'',
        password_confirmation:''
      }
    },
    components: {
      SiteTemplate,
    },
    methods: {
      cadastro () {
        axios.post('http://localhost/api/cadastro', {
          name: this.name,
          email: this.email,
          password: this.password,
          password_confirmation: this.password_confirmation
        })
          .then(response => {
            console.log(response)
            if (response.data.token) {
              // login com sucesso
              console.log('Cadastro realizado com sucesso')
              sessionStorage.setItem('usuario', JSON.stringify(response.data))
              this.$router.push('/')

            } else if (response.data.status == false) {
              // login não existe
              console.log('Erro no cadastro! Tente novamente mais tarde.')
              alert('Erro no cadastro! Tente novamente mais tarde.')

            } else {
              // erro de validação
              console.log('Erros de validação')
              let erros = ''
              for (let erro of Object.values(response.data)) {
                erros += erro + ' '
              }
              alert(erros)
            }
          })
          .catch(e => {
            console.log(e)
            alert('Erro! Tente novamente mais tarde.')
          })
      }
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
