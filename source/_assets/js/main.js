import Vue from 'vue'

try {
    window.$ = window.jQuery = require('jquery');
    require('bootstrap-sass');
    if(typeof jQuery != 'undefined') {
        console.log(jQuery.fn.jquery);
    }
} catch (e) {}

let app = new Vue({
    el: "#app"
});
