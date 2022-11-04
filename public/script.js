$(function(){

    $(document).on('change','#zip',function(){

        const ZIP = $(this).val();

        $.getJSON("src/ViaCepHandler.php?cep="+ZIP, function(data){

            $("#street").val(data.logradouro);
            $("#neighbourhood").val(data.bairro);
            $("#city").val(data.localidade);
            $("#state").val(data.uf);

        });

    });
   


})