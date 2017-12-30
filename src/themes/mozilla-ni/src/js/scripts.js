$(document).ready(function(){
    var open_menu = $('.open-menu');
    var menu_mobile = $('#mobile-menu');

    open_menu.on('click', function(){
        menu_mobile.addClass('active');
    });

    menu_mobile.find('.close-modal').on('click', function(){
        menu_mobile.removeClass('active');
    });

});