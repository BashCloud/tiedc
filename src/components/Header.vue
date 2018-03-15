<template>
  <div class="mainNav">
       
      <div class="navLinks">
        <router-link to="/">Home</router-link>
        <router-link to="/about">About</router-link>
        <img class="logo" src="../assets/TIEDC_Logo.png" />
        <router-link to="/new">new</router-link>
        <router-link to="/aditya">Aditya</router-link>
      </div>
  </div>
</template>

<script>
export default {

}
</script>

<style>
.mainNav{
  height: 60px;
  background: #dedede;
  padding: 10px;
}
.mainNav .logo{
  height: 60px;
}
.mainNav .navLinks{
  float: center;
  text-decoration: none;
}
</style>
