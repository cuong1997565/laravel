<template>
 <div class="container">
 <router-view></router-view>
<!--  </transition>
 --> </div>
</template>

<script>
import nav from './layout/master.vue'
export default {
 mounted() {
 console.log('Component mounted.')
 }
 }
</script>
