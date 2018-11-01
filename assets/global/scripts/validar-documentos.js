// valida CNPJ
function validarCNPJ(cnpj) {

    cnpj = cnpj.replace(/[^\d]+/g, '');

    if (cnpj == '') return false;

    if (cnpj.length != 14)
        return false;

    // Elimina CNPJs invalidos conhecidos
    if (cnpj == "00000000000000" ||
        cnpj == "11111111111111" ||
        cnpj == "22222222222222" ||
        cnpj == "33333333333333" ||
        cnpj == "44444444444444" ||
        cnpj == "55555555555555" ||
        cnpj == "66666666666666" ||
        cnpj == "77777777777777" ||
        cnpj == "88888888888888" ||
        cnpj == "99999999999999")
        return false;

    // Valida DVs
    tamanho = cnpj.length - 2
    numeros = cnpj.substring(0, tamanho);
    digitos = cnpj.substring(tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
        soma += numeros.charAt(tamanho - i) * pos--;
        if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(0))
        return false;

    tamanho = tamanho + 1;
    numeros = cnpj.substring(0, tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
        soma += numeros.charAt(tamanho - i) * pos--;
        if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(1))
        return false;

    return true;

}
// valida RG
function ValRG(numero){

    // Garante que o valor é uma string
    numero = numero.toString();
	    
    // Remove caracteres inválidos do valor
    numero = numero.replace(/[^0-9]/g, '');

    //var numero = numero.split("");
    tamanho = numero.length;
    vetor = new Array(tamanho);
    
    if(numero === "000000000" ||
       numero === "111111111" ||
       numero === "222222222" ||
       numero === "333333333" ||
       numero === "444444444" ||
       numero === "555555555" ||
       numero === "666666666" ||
       numero === "777777777" ||
       numero === "888888888" ||
       numero === "999999999"){
        return false;
    }
    if(tamanho>=1)
    {
        vetor[0] = parseInt(numero[0]) * 2; 
    }
    if(tamanho>=2){
        vetor[1] = parseInt(numero[1]) * 3; 
    }
    if(tamanho>=3){
        vetor[2] = parseInt(numero[2]) * 4; 
    }
    if(tamanho>=4){
        vetor[3] = parseInt(numero[3]) * 5; 
    }
    if(tamanho>=5){
        vetor[4] = parseInt(numero[4]) * 6; 
    }
    if(tamanho>=6){
        vetor[5] = parseInt(numero[5]) * 7; 
    }
    if(tamanho>=7){
        vetor[6] = parseInt(numero[6]) * 8; 
    }
    if(tamanho>=8){
        vetor[7] = parseInt(numero[7]) * 9; 
    }
    if(tamanho>=9){
        vetor[8] = parseInt(numero[8]) * 100; 
    }
 
    total = 0;
 
    if(tamanho>=1){
        total += vetor[0];
    }
    if(tamanho>=2){
        total += vetor[1]; 
    }
    if(tamanho>=3){
        total += vetor[2]; 
    }
    if(tamanho>=4){
        total += vetor[3]; 
    }
    if(tamanho>=5){
        total += vetor[4]; 
    }
    if(tamanho>=6){
        total += vetor[5]; 
    }
    if(tamanho>=7){
        total += vetor[6];
    }
    if(tamanho>=8){
        total += vetor[7]; 
    }
    if(tamanho>=9){
        total += vetor[8]; 
    }
 
 
    resto = total % 11;
    if(resto!=0){
        
        return false;
    }
    else{
        return true;
    }
}

function verificaCpf(cpf){
    var re = RegExp("^[a-zA-Z]")
    if(re.test(cpf)){
        return false;
            
    }else{
        var result = valida_cpf(cpf);
        if (result) {
            return true;
        } else {
            return false;
        }
    }
}

function mascaraCpf(valor){
    return valor.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/g,"\$1.\$2.\$3\-\$4");
}
function calc_digitos_posicoes( digitos, posicoes = 10, soma_digitos = 0) {
 
    
    digitos = digitos.toString();
	 
    // Faz a soma dos dígitos com a posição
    // Ex. para 10 posições:
    //   0    2    5    4    6    2    8    8   4
    // x10   x9   x8   x7   x6   x5   x4   x3  x2
    //   0 + 18 + 40 + 28 + 36 + 10 + 32 + 24 + 8 = 196
    for ( var i = 0; i < digitos.length; i++  ) {
        // Preenche a soma com o dígito vezes a posição
        soma_digitos = soma_digitos + ( digitos[i] * posicoes );
	 
        // Subtrai 1 da posição
        posicoes--;
	 
        // Parte específica para CNPJ
        // Ex.: 5-4-3-2-9-8-7-6-5-4-3-2
        if ( posicoes < 2 ) {
            // Retorno a posição para 9
            posicoes = 9;
        }
    }
	 
    // Captura o resto da divisão entre soma_digitos dividido por 11
    // Ex.: 196 % 11 = 9
    soma_digitos = soma_digitos % 11;
	 
    // Verifica se soma_digitos é menor que 2
    if ( soma_digitos < 2 ) {
        // soma_digitos agora será zero
        soma_digitos = 0;
    } else {
        // Se for maior que 2, o resultado é 11 menos soma_digitos
        // Ex.: 11 - 9 = 2
        // Nosso dígito procurado é 2
        soma_digitos = 11 - soma_digitos;
    }
	 
    // Concatena mais um dígito aos primeiro nove dígitos
    // Ex.: 025462884 + 2 = 0254628842
    var cpf = digitos + soma_digitos;
	 
		
    return cpf;
		
}
 

    function valida_cpf( valor ) {
 
        // Garante que o valor é uma string
        valor = valor.toString();
	    
        // Remove caracteres inválidos do valor
        valor = valor.replace(/[^0-9]/g, '');

        if(valor === "00000000000" ||
           valor === "11111111111" ||
           valor === "22222222222" ||
           valor === "33333333333" ||
           valor === "44444444444" ||
           valor === "55555555555" ||
           valor === "66666666666" ||
           valor === "77777777777" ||
           valor === "88888888888" ||
           valor === "99999999999"){
            return false;
        }
        // Captura os 9 primeiros dígitos do CPF
        // Ex.: 02546288423 = 025462884
        var digitos = valor.substr(0, 9);
	 
        // Faz o cálculo dos 9 primeiros dígitos do CPF para obter o primeiro dígito
        var novo_cpf = calc_digitos_posicoes( digitos );
	 
        // Faz o cálculo dos 10 dígitos do CPF para obter o último dígito
        var novo_cpf = calc_digitos_posicoes( novo_cpf, 11 );
	 
        // Verifica se o novo CPF gerado é idêntico ao CPF enviado
        if ( novo_cpf === valor ) {
            // CPF válido
            return true;
        } else {
            // CPF inválido
            return false;
        }
    
    }