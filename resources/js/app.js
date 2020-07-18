require('./bootstrap');
require('./manage.js');

window.Vue = require('vue');
import Vue from 'vue';

import Buefy from 'buefy';
// import 'buefy/dist/buefy.css';

Vue.use(Buefy);

// Vue.component('example', require('./components/Example.vue'));

$(document).ready(function() {
  //  Dropdowns
  $('.dropdown').hover(function(e) {
    $(this).toggleClass('is-open');
  })
});
