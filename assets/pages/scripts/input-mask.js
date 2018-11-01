var FormInputMask = function () {

    var handleInputMasks = function () {

       //ADD mascara nos campos formulario cadaastro-usuario-empresa    'wellington' INICIO
        $(".mask_phone_fixo").inputmask("mask", {
            "mask": "9999-9999"
        });
        $(".mask_phone_cel").inputmask("mask", {
            "mask": "99999-9999"
        });
        $(".mask_phone_ddd").inputmask("mask", {
            "mask": "(99)"
        });
        $(".mask_matricula").inputmask("mask", {
            "mask": "99999999999999999999"
        });
        //ADD mascara nos campos formulario cadaastro-usuario-empresa    'wellington' FIM

        $(".mask_date").inputmask("99/99/9999");
        $(".mask_phone").inputmask("mask", {
            "mask": "(99) 99999-9999"
        });
        $(".mask_telefone_fixo").inputmask("mask", {
            "mask": "(99) 9999-9999"
        });
        $(".phone").keydown(function (event) {
            var tamanho = $(this).val().replace(/[^\d]+/g, '').length;
            if (event.KeyCode !== 9) {
                if (tamanho === 9) {
                    $(".phone").inputmask("(99) 9999-9999");

                }
                else {
                    $(".phone").inputmask("(99) 99999-9999");
                }
            }


        });
        $(".mask_rg").inputmask("mask", {
            "mask": "99.999.999-9"
        });
        $(".mask_cep").inputmask("99999-999");
        $(".mask_cpf").inputmask("999.999.999-99");
        $(".mask_cnpj").inputmask("99.999.999/9999-99");
        $(".mask_rne").inputmask("*******-*");
        $(".mask_cnh").inputmask("99999999999");
        $(".mask_valor").inputmask('R$ 999.999.999,99', {
            numericInput: true
        });
        $(".mask_cpf_cnpj").keydown(function (event) {
            var tamanho = $(this).val().replace(/[^\d]+/g, '').length;
            if (event.KeyCode !== 9) {
                if (tamanho === 10) {
                    $("#mask_cpf_cnpj").inputmask("999.999.999-99");
                }
                else {
                    $("#mask_cpf_cnpj").inputmask("99.999.999/9999-99");
                }
            }

        });
        $(".mask_number").inputmask({
            "mask": "9",
            "repeat": 15,
            "greedy": false
        });
        $(".mask_anos").inputmask({
            "mask": "9",
            "repeat": 2,
            "greedy": false
        });

    }


    return {
        //main function to initiate the module
        init: function () {
            handleInputMasks();
        }
    };

}();

if (App.isAngularJsApp() === false) {
    jQuery(document).ready(function () {
        FormInputMask.init(); // init metronic core componets
    });
}