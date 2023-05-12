$(document).ready(function () {

    $('#cnpj').mask('000.000.000-00', {reverse: true});
    
    $("#formCliente").validate({
        rules: {
            nomeFantasia: {
                required: true,
                minlength: 3
            },
            cnpj: {
                required:true,
                cpf: "cpf"
            },
            razaoSocial:{
                required:true,
                minlength: 3
            },
            email:{
                required:true
            }
            
        },
        messages: {
            nomeFantasia: {
                required: "Por favor, informe seu nome",
                minlength: "O nome deve ter pelo menos 3 caracteres"
            },
            cnpj: {
                required:"Por favor, informe seu CNPJ",
                cpf: "CNPJ inválido"
            },
            razaoSocial:{
                required:"Por favor, informe seu cep",
                minlength:"O nome deve ter pelo menos 3 caracteres"
            },
            email:{
                required:"Por favor, informe seu email",
                minlength:"Email inválido"
            }
        }
    });
});
