var cadastrarCliente = function () {

    var FormValidation = function () {
        // for more info visit the official plugin documentation: 
        // http://docs.jquery.com/Plugins/Validation

        var form1 = $('#cadastrar_cliente');
        var error1 = $('.alert-danger', form1);
        var success1 = $('.alert-success', form1);

        form1.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",  // validate all fields including form hidden input

            rules: {
                nome_cliente: {
                    required: true
                },
                cpf_cliente: {
                    required: true,
                    cpf: true
                },
                telefone_cliente: {
                    required: true
                },
                email_cliente: {
                    required: true,
                    email: true
                },
                data_nascimento_cliente: {
                    required: true,
                    date: true
                },
                cep_cliente: {
                    required: true
                },
                endereco_cliente: {
                    required: true
                },
                num_cliente: {
                    required: true
                },
                uf_cliente: {
                    required: true
                },
                municipio_cliente: {
                    required: true
                },
                bairro_cliente: {
                    required: true
                },
                senha_cliente: {
                    required: true
                },
                confirmar_senha_cliente: {
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
        $("#cep_cliente").blur(function () {
            var cep = $(this).val().replace(/\D/g, '');
            if (cep !== "") {
                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;
                if (validacep.test(cep)) {
                    $("#endereco_cliente").val("...");
                    $("#bairro_cliente").val("...");
                    $("#municipio_cliente").val("...");
                    $("#uf_cliente").val("...");

                    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#endereco_cliente").val(dados.logradouro);
                            $("#bairro_cliente").val(dados.bairro);
                            $("#municipio_cliente").val(dados.localidade);
                            $("#uf_cliente").val(dados.uf);
                        } //end if.
                        else {
                            //CEP pesquisado não foi encontrado.
                            $("#endereco_cliente").val("");
                            $("#bairro_cliente").val("");
                            $("#municipio_cliente").val("");
                            $("#uf_cliente").val("");
                            alert("CEP não encontrado.");
                        }
                    });
                } else {
                    $("#endereco_cliente").val("");
                    $("#bairro_cliente").val("");
                    $("#municipio_cliente").val("");
                    $("#uf_cliente").val("");
                    alert("CEP inválido.");
                }
            }
        });
    }

    var handleDatePickers = function () {

       if (jQuery().datepicker) {
           $('.date-picker').datepicker({
               rtl: App.isRTL(),
               orientation: "left",
               autoclose: true,
               format: 'dd/mm/yyyy',
               language: 'pt-BR'
           });
           //$('body').removeClass("modal-open"); // fix bug when inline picker is used in modal
       }

       /* Workaround to restrict daterange past date select: http://stackoverflow.com/questions/11933173/how-to-restrict-the-selectable-date-ranges-in-bootstrap-datepicker */

       // Workaround to fix datepicker position on window scroll
       $(document).scroll(function () {
           $('#modal-abordagem .date-picker').datepicker('place'); //#modal is the id of the modal
       });
    }

    var confirmarSenha = function(){
        $("#confirmar_senha_cliente").keyup(function(){
            var senha = $("#senha_cliente").val();
            var confirmarSenha = $(this).val();

            if(senha !== confirmarSenha){
                $(".senhas_clientes_erradas").removeClass("hide");
                $("#senha-cliente-error").addClass("has-error");
                $("#confirmar-senha-cliente-error").addClass("has-error");
            }else{
                $(".senhas_clientes_erradas").addClass("hide");
                $("#senha-cliente-error").removeClass("has-error");
                $("#confirmar-senha-cliente-error").removeClass("has-error");
            }
        });
    }

    var salvarCliente = function(){

        $("#cadastrar_cliente").submit(function(){
            if($(this).valid()){
               var dados = $("#cadastrar_cliente").serialize();
                $.ajax({ 
                    type: "POST", 
                    url: 'controller/adicionar-cliente.php', 
                    data: dados, 
                    success: function(msg){ 
                        if(msg === "Sucesso"){
                            $(".alert-danger").css({"display": "none"});
                            $(".alert-success").css({"display": "block"});
                            $(".alert-success").html(msg);
                        }else{
                            $(".alert-success").css({"display": "none"});
                            $(".alert-danger").css({"display": "block"});
                            $(".alert-danger").html(msg);
                        }
                    } 
                }); 
            }
                
        });
        
    }
    return {
        //main function to initiate the module

        init: function () {
            handleDatePickers();
            FormValidation();
            buscaCep();
            confirmarSenha();
            salvarCliente();
        }

    };

}();

jQuery(document).ready(function () {
    cadastrarCliente.init();
});