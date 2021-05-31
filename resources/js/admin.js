try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('jquery-sortable');
    require('bootstrap');

} catch (e) {}

$(function () {

    // CK Editor
    var options = {
      filebrowserImageBrowseUrl: '/filemanager?type=Images',
      filebrowserImageUploadUrl: '/filemanager/upload?type=Images&_token='+ $('meta[name="csrf-token"]').attr('content'),
      filebrowserBrowseUrl: '/filemanager?type=Files',
      filebrowserUploadUrl: '/filemanager/upload?type=Files&_token='+ $('meta[name="csrf-token"]').attr('content'),
      allowedContent: true,
      extraAllowedContent: 'section(*); div(*); video(*); object(*)'
    };
    $('.editor').ckeditor(options);


    //laravel file manager
    $('#lfm').filemanager('image');

    $('#lfm').on('click', function(){
      $('#delete-image').removeClass('hidden');
    });
    //Delete uploaded image in form
    $('#delete-image').on('click', function(){
      $('#thumbnail').val(null);
      $('#holder').attr('src', '');
      $(this).removeClass('hidden');
      $(this).addClass('hidden');
    });

    //Delete record
    $('.delete-item').on('click', function (e) {
      if (!confirm('Are you sure you want to delete?')) return false;
    e.preventDefault();
      $.post({
          type: 'DELETE',  // destroy Method
          url: $(this).attr('href')
      }).done(function (data) {
          console.log(data);
          location.reload(true);
      });
    })

    //Change status of record
    $('.status').on('click', function (e) {
      e.preventDefault();
      var item = $(this);
      $.post({
          type: 'PUT',
          url: $(this).attr('href'),
          // data: {},
          dataType: 'json'
      }).done(function (data) {
          if (data.status == 1) {
            item.removeClass('fa-times-circle').addClass('fa-check-circle');
          } else {
            item.removeClass('fa-check-circle').addClass('fa-times-circle');
          }
      });
    });

});
