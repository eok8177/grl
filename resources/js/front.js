try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');

    window.owl = require('owl.carousel');
} catch (e) {}

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';



$(document).ready(function () {

     // script for smooth scrolling //

    // $('body').on('click', '.scroll', function (event) {
    //     event.preventDefault();

    //     $('html,body').animate({
    //         scrollTop: $(this.hash).offset().top
    //     }, 1000);
    // });

});