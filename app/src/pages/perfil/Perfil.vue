<template>

    <site-template>

    <span slot="menuesquerdo">
      <img :src="usuario.imagem" class="responsive-img"/>
    </span>

        <span slot="principal">

        <h2>Perfil</h2>

        <input type="text" placeholder="Nome" v-model="name"/>
        <input type="email" placeholder="E-mail" v-model="email"/>

        <div class="file-field input-field">
          <div class="btn">
            <span>Imagem</span>
            <input type="file" v-on:change="salvaImagem">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>

        <input type="password" placeholder="Senha" v-model="password"/>
        <input type="password" placeholder="Confirme sua senha" v-model="password_confirmation"/>
        <button class="btn" v-on:click="perfil()">Atualizar</button>

    </span>

    </site-template>

</template>

<script>
  import SiteTemplate from '@/templates/SiteTemplate'

  export default {
    name: 'Perfil',
    data () {
      return {
        usuario: false,
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
        imagem: ''
      }
    },
    created () {
      let usuarioAux = sessionStorage.getItem('usuario')
      if (usuarioAux) {
        this.usuario = JSON.parse(usuarioAux)
        this.name = this.usuario.name
        this.email = this.usuario.email
      }
    },
    components: {
      SiteTemplate
    },
    methods: {
      salvaImagem (e) {
        let arquivo = e.target.files || e.dataTransfer.files
        if (!arquivo.length) {
          return
        }

        let reader = new FileReader()
        reader.onloadend = (e) => {
          this.imagem = e.target.result
        }
        reader.readAsDataURL(arquivo[0])

      },
      perfil () {
        this.$http.put(this.$urlApi + 'perfil', {
            name: this.name,
            email: this.email,
            imagem: this.imagem,
            password: this.password,
            password_confirmation: this.password_confirmation
          },
          {
            'headers': {
              'authorization': 'Bearer ' + this.usuario.token
            }
          })
          .then(response => {

            if (response.data.status) {

              console.log(response.data)
              this.usuario = response.data.usuario
              sessionStorage.setItem('usuario', JSON.stringify(response.data))
              alert('Perfil atualizado!')

            } else if (response.data.status === false && response.data.validacao) {
              // erro de validação
              // console.log('Erros de validação')
              let erros = ''
              for (let erro of Object.values(response.data.erros)) {
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
