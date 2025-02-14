function verificarNumero() {
    var valor = document.getElementById("numero").value; 
    var numero = parseInt(valor); 

    if (isNaN(numero)) { // Verifica se não é um número
        document.getElementById("resultado").innerHTML = "Por favor, insira um número válido.";
        return;
    }

    var resultado = numero % 2 === 0 ? "Par" : "Ímpar"; 
    document.getElementById("resultado").innerHTML = numero + " é " + resultado; 
}




