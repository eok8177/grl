try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');

    window.owl = require('owl.carousel');
} catch (e) {}

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';



$(document).ready(function () {

    //Submit ajax form
    $('.feedback-form').submit(function(e){
      e.preventDefault();
      let form = $(this);
      // if (validateForm(form))
        postForm(form, function(response) {
          console.log(response);
          form.trigger("reset");
          formSuccessMsg(form);
        });
      return false;
    }); 

});

function postForm($form, callback) {
  /*
   * Get all form values
   */
  var values = {};
  $.each( $form.serializeArray(), function(i, field) {
    values[field.name] = field.value;
  });
  $form.find('.btn-submit').attr('disabled',true);
 
  /*
   * Throw the form values to the server!
   */
  $.ajax({
    type        : $form.attr( 'method' ),
    url         : $form.attr( 'action' ),
    data        : values,
    success     : function(data) {
      callback(data);
    }
  }); 
}

function formSuccessMsg(form) {
  form.find('.success').show();
}