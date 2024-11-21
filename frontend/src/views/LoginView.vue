<template>
  <form @submit.prevent="login">
    <input 
      type="text" 
      placeholder="Insira seu e-mail"
      v-model="user.email"
    >
    <input 
      type="password"
      placeholder="Insira sua senha"
      v-model="user.password"
    >
    <button type="submit">Login</button>
  </form>
</template>

<script setup>
  import http from '@/services/http.js';
  import {reactive} from 'vue';

  const user = reactive({
    email: 'champlin.rae@example.net',
    password: '$2y$12$Wi2HXq1IaFCRk/5fPQIvCeVijK0J44ruotnfRReFtSGX42VvNBQz2'
  })

  async function login(){
    try {
      console.log(user);
      const {data} = await http.post('/auth', user);
      console.log(data);
    } catch (error) {
      console.log(error?.responde?.data);
    }
  }

</script>

<style>
@import "@/assets/login.css";

@media (min-width: 1024px) {
  .login {
    min-height: 100vh;
    display: flex;
    align-items: center;
  }
}
</style>
  