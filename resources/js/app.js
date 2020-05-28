require('./bootstrap');

window.Vue = require('vue');

Vue.component('nav-top', require('./components/NavtopComponent.vue').default);
Vue.component('home', require('./components/HomeComponent.vue').default);
Vue.component('redes', require('./components/RedesComponent.vue').default);
Vue.component('show', require('./components/ShowComponent.vue').default);
Vue.component('discografia', require('./components/DiscografiaComponent.vue').default);
Vue.component('galeria', require('./components/GaleriaComponent.vue').default);
Vue.component('galeriavideo', require('./components/GaleriaVideoComponent.vue').default);

const app = new Vue({
    el: '#app',
});
