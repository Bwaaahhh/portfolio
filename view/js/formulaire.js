$( document ).ready(function() {

        $('.inputForm').on('click' , function(){
            $(this).val("");
        });
        $('#resetForm').on('click' , function(e){
            e.preventDefault();
            $('.inputForm').val("");
            $('.selectForm').val("");
        });

});
