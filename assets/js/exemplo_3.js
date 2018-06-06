// Testando a validação usando jQuery
$(function(){

    // ## EXEMPLO 3
    // Aciona a validação e formatação ao sair do input
    $('.valida_cpf_cnpj').blur(function(){
    
        // O CPF ou CNPJ
        var cpf_cnpj = $(this).val();
        
        // Testa a validação e formata se estiver OK
        if ( formata_cpf_cnpj( cpf_cnpj ) ) {
            $(this).val( formata_cpf_cnpj( cpf_cnpj ) );
        } else {
            alert('CPF ou CNPJ inválido!');
        }
        
    });

    $('.valida_data').blur(function(){
    
        // A data
        var data = $(this).val();
        
        // Testa a validação e formata se estiver OK
        if ( validar_data( data ) ) {
            $(this).val( data );
        } else {
            alert('Data inválida!');
        }
        
    });

});
