<template>
  <span>

    <header>
      <nav-bar-vue logo="Social" url="/" cor="green darken-1"/>
    </header>

    <main>
      <div class="container">
        <div class="row">
          <grid-vue tamanho="4">

            <card-menu-vue>
              <div class="row valign-wrapper">
                <grid-vue tamanho="4">
                  <img src="http://materializecss.com/images/yuna.jpg" alt="" class="circle responsive-img">
                  <!-- notice the "circle" class -->
                </grid-vue>
                <grid-vue tamanho="8">
                  <span class="black-text">
                    <h5>Maria Silva</h5>
                    This is a square image.
                  </span>
                </grid-vue>
              </div>
            </card-menu-vue>

          </grid-vue>
          <grid-vue tamanho="8">
            <router-view/>
          </grid-vue>
        </div>
      </div>
    </main>

    <footer-vue cor="green darken-1" logo="Social" descricao="Teste de descricao">
      <li><a class="grey-text text-lighten-3" href="#">Link 1</a></li>
      <li><a class="grey-text text-lighten-3" href="#">Link 2</a></li>
      <li><a class="grey-text text-lighten-3" href="#">Link 3</a></li>
      <li><a class="grey-text text-lighten-3" href="#">Link 4</a></li>
    </footer-vue>

  </span>
</template>

<script>

  import NavBarVue from '@/components/layouts/NavBarVue'
  import FooterVue from '@/components/layouts/FooterVue'
  import GridVue from '@/components/layouts/GridVue'
  import CardMenuVue from '@/components/layouts/CardMenuVue'

  export default {
    name: 'App',
    components: {
      CardMenuVue,
      NavBarVue,
      FooterVue,
      GridVue
    }
  }
</script>

<style>

</style>
