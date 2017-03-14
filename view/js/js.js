$( document ).ready(function() {

    $('.link_menu').on('click', function(){
        console.log('pouet');
        $('.menu').css('visibility' , 'visible');
        $('.visu_menu div').css('transform' , 'rotateY(0deg)');
    });
    $('.close_menu').on('click', function(){
        $('.menu').css('visibility' , 'hidden');
        $('.visu_menu div').css('transform' , 'rotateY(90deg)');
    });
});
