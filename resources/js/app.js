/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

Vue.component('registro', require('./components/vehiculos/registrarVehiculo.vue').default);
Vue.component('login', require('./components/login.vue').default);
Vue.component('crearHorario', require('./components/vehiculos/crearHorario.vue').default);


const app = new Vue({
    el: '#app',
});

  