$( document ).ready(function() {

//------------------------------ apparition et disparition du menu
    $('.link_menu').on('click', function(){
        console.log('poeut');
        $('.menu').css('visibility' , 'visible');
        $('.visu_menu div').css('transform' , 'rotateY(0deg)');
        $('body').css('overflow-y' , 'hidden');
    });
    $('.close_menu').on('click', function(){
        $('.menu').css('visibility' , 'hidden');
        $('.text_menu').fadeOut().delay(360).fadeIn() ;
        $('.visu_menu div').css('transform' , 'rotateY(90deg)');
        $('body').css('overflow-y' , 'visible');
    });
});
