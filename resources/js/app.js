/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(function(){
    $('body').on('click', '[data-href]', function(){
        $('.modal').modal('hide');
        var dataURL = $(this).attr('data-href');
        $('#modal').load(dataURL,function(){
            $('.modal').modal('show');
        });
    });
});
