require('./bootstrap');
import Vue from "vue";
import VueRouter from "vue-router";
import routes from "./routes";
import store from "./store"

Vue.use(VueRouter)

Vue.component('home',require('./components/Home.vue').default)

let router= new VueRouter({routes})

const app =new Vue({
    store,
    el:'#app',
    router
})
