/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.loader = function(view)
{
    if (view == 'show') {
        $('#loader').css('display', 'block');
        $('body').on('click', '#loader', function(){
            $('#loader').css('display', 'none');
        });
    } else {
        $('#loader').css('display', 'none');
    }
}

window.sort = function()
{
    $('.sortable').sortable({
        delay: 300,
        update: function( event, ui ) {

           var action = $(this).data('action');
           var data = $(this).sortable('toArray');

           $.ajax({
              headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              data: {'items' : data},
              url: action,
              type: 'POST',
              success: function(response)
              {
                //   if (response.reload) {
                //     window.location.reload();
                //   }
              },
              dataType: 'json'
           });
        }
     });
}

$(function(){
    $('body').on('click', '[data-href]', function(){
        window.loader('show');
        $('.modal').modal('hide');
        var dataURL = $(this).attr('data-href');
        $('#modal').load(dataURL,function(){
            $('.modal').modal('show');
            window.sort();
            window.loader('hide');
        });
    });

    $('body').on('submit', 'form', function(){
        window.loader('show');
    });

    $('body').on('click', '[data-delete]', function(){
        if (confirm($(this).data('delete'))) {
            window.location.href = $(this).attr('href');
        }

        return false;
    });
});
