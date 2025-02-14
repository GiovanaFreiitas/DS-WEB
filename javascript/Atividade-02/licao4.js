function verificarNumero2() {
    var valor2 = document.getElementById("numero2").value; // Pega o valor do número
    var valorPorcentagem = document.getElementById("porcentagem").value; // Pega o valor da porcentagem

    var numero2 = parseFloat(valor2); // Converte para número decimal
    var porcentagem = parseFloat(valorPorcentagem); // Converte para número decimal
   
    if (isNaN(numero2)) { // Verifica se não é um número
        document.getElementById("porcentagem").innerHTML = "Por favor, insira um número válido.";
        return;
    }
   
    var resultado2 = (numero2 * porcentagem / 100); // Calcula a porcentagem
            document.getElementById("resultado2").innerHTML =
            numero2 + " acrescido de " + porcentagem + "% é " + (numero2 + resultado2);
        }
