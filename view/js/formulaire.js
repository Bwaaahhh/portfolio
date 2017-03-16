$( document ).ready(function() {

        $('.inputForm').on('click' , function(){
            $(this).val("");
        });
        $('#resetForm').on('click' , function(e){
            e.preventDefault();
            $('#nameForm').val("nom & prenom");
            $('#societeForm').val("nom de la société");
            $('#mailForm').val("mon adresse e-mail");
            $('#phoneForm').val("+33");
            $('.selectForm').val("");
        });

});
