var cadastrarFornecedor = function () {

    var FormValidation = function () {
        // for more info visit the official plugin documentation: 
        // http://docs.jquery.com/Plugins/Validation

        var form1 = $('#cadastrar_fornecedor');
        var error1 = $('#fornecedor-danger', form1);
        var success1 = $('#fornecedor-success', form1);

        form1.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",  // validate all fields including form hidden input

            rules: {
                nome_fantasia: {
                    required: true
                },
                cnpj: {
                    required: true,
                    cnpj: true
                },
                site: {
                    required: true,
                    url: true
                },
                telefone_fornecedor: {
                    required: true
                },
                email_fornecedor: {
                    required: true,
                    email: true
                },
                cep_fornecedor: {
                    required: true
                },
                endereco_fornecedor: {
                    required: true
                },
                num_fornecedor: {
                    required: true
                },
                uf_fornecedor: {
                    required: true
                },
                municipio_fornecedor: {
                    required: true
                },
                bairro_fornecedor: {
                    required: true
                },
                senha_fornecedor: {
                    required: true
                },
                confirmar_senha_fornecedor: {
                    required: true
                }
            },
            messages: {
                radio: {
                    required: "Por favor, selecione uma opção."
                },
                checkbox: {
                    required: "Por favor, selecione uma opção."
                }
            },
            errorPlacement: function (error, element) {
                // render error placement for each input typeW
                if (element.parents('.mt-radio-list').size() > 0 || element.parents('.mt-checkbox-list').size() > 0) {
                    if (element.parents('.mt-radio-list').size() > 0) {
                        error.appendTo(element.parents('.mt-radio-list')[0]);
                    }
                    if (element.parents('.mt-checkbox-list').size() > 0) {
                        error.appendTo(element.parents('.mt-checkbox-list')[0]);
                    }
                } else if (element.parents('.mt-radio-inline').size() > 0 || element.parents('.mt-checkbox-inline').size() > 0) {
                    if (element.parents('.mt-radio-inline').size() > 0) {
                        error.appendTo(element.parents('.mt-radio-inline')[0]);
                    }
                    if (element.parents('.mt-checkbox-inline').size() > 0) {
                        error.appendTo(element.parents('.mt-checkbox-inline')[0]);
                    }
                } else if (element.parent(".input-group").size() > 0) {
                    error.insertAfter(element.parent(".input-group"));
                } else if (element.attr("data-error-container")) {
                    error.appendTo(element.attr("data-error-container"));
                } else {
                    error.insertAfter(element); // for other inputs, just perform default behavior
                }

            },
            invalidHandler: function (event, validator) { //display error alert on form submit              
                success1.hide();
                error1.show();
                App.scrollTo(error1, -200);
            },
            highlight: function (element) { // hightlight error inputs

                $(element)
                    .closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            unhighlight: function (element) { // revert the change done by hightlight
                $(element)
                    .closest('.form-group').removeClass('has-error'); // set error class to the control group
            },

            success: function (label) {
                label
                    .closest('.form-group').removeClass('has-error'); // set success class to the control group
            },

            submitHandler: function (form) {
                success1.show();
                error1.hide();
            }
        });

    }

    var buscaCep = function () {
        $("#cep_fornecedor").blur(function () {
            var cep = $(this).val().replace(/\D/g, '');
            if (cep !== "") {
                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;
                if (validacep.test(cep)) {
                    $("#endereco_fornecedor").val("...");
                    $("#bairro_fornecedor").val("...");
                    $("#municipio_fornecedor").val("...");
                    $("#uf_fornecedor").val("...");

                    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#endereco_fornecedor").val(dados.logradouro);
                            $("#bairro_fornecedor").val(dados.bairro);
                            $("#municipio_fornecedor").val(dados.localidade);
                            $("#uf_fornecedor").val(dados.uf);
                        } //end if.
                        else {
                            //CEP pesquisado não foi encontrado.
                            $("#endereco_fornecedor").val("");
                            $("#bairro_fornecedor").val("");
                            $("#municipio_fornecedor").val("");
                            $("#uf_fornecedor").val("");
                            alert("CEP não encontrado.");
                        }
                    });
                } else {
                    $("#endereco_fornecedor").val("");
                    $("#bairro_fornecedor").val("");
                    $("#municipio_fornecedor").val("");
                    $("#uf_fornecedor").val("");
                    alert("CEP inválido.");
                }
            }
        });
    }

    var confirmarSenhaFornecedor = function(){
        $("#confirmar_senha_fornecedor").keyup(function(){
            var senha = $("#senha_fornecedor").val();
            var confirmarSenha = $(this).val();

            if(senha !== confirmarSenha){
                $(".senhas_fornecedor_erradas").removeClass("hide");
                $("#senha-fornecedor-error").addClass("has-error");
                $("#confirmar-senha-fornecedor-error").addClass("has-error");
            }else{
                $(".senhas_fornecedor_erradas").addClass("hide");
                $("#senha-fornecedor-error").removeClass("has-error");
                $("#confirmar-senha-fornecedor-error").removeClass("has-error");
            }
        });
    }

    var salvarFornecedor = function(){
        
        $("#cadastrar_fornecedor").submit(function(){
            if($(this).valid()){
               var dados = $("#cadastrar_fornecedor").serialize();
                $.ajax({ 
                    type: "POST", 
                    url: 'controller/adicionar-fornecedor.php', 
                    data: dados, 
                    success: function(msg){ 
                        if(msg === "Sucesso"){
                            $("#fornecedor-danger").css({"display": "none"});
                            $("#fornecedor-success").css({"display": "block"});
                            $("#fornecedor-success").html(msg);
                        }else{
                            $("#fornecedor-success").css({"display": "none"});
                            $("#fornecedor-danger").css({"display": "block"});
                            $("#fornecedor-danger").html(msg);
                        }
                    } 
                }); 
            }
                
        });
        
    }

    return {
        //main function to initiate the module

        init: function () {
            FormValidation();
            buscaCep();
            confirmarSenhaFornecedor();
            salvarFornecedor();
        }

    };

}();

jQuery(document).ready(function () {
    cadastrarFornecedor.init();
});