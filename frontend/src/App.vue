<script setup>
</script>

<template>
  <header>
    <div id="banner" class="wrapper">
      <nav>
        <router-link to="/dashboard" class="banner-itens">Painel de Controle</router-link>
      </nav>
      <h1>FitClima</h1>
      <nav>
        <router-link to="/sobre" class="banner-itens">Sobre</router-link>
        <router-link to="/login" class="banner-itens">Login</router-link>
      </nav>
    </div>
  </header>

  <router-view/>
</template>

<style>
@import "@/assets/app.css";
</style>
