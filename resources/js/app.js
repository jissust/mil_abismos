require('./bootstrap');

window.Vue = require('vue');

Vue.component('nav-top', require('./components/NavtopComponent.vue').default);
Vue.component('home', require('./components/HomeComponent.vue').default);

const app = new Vue({
    el: '#app',
});
