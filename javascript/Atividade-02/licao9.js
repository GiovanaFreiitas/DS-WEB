function calculadora() {
    var operação1 = parseFloat(document.getElementById("operacao1").value);
    var operação2 = parseFloat(document.getElementById("operacao2").value);
    var operação = document.getElementById("operacao").value;
    var resultado4;
    console.log(operação1, operação2)
    switch (operação) {
      case "+":
        resultado4 = operação1 + operação2;
        break;
      case "-":
        resultado4 = operação1 - operação2;
        break;
      case "*":
        resultado4 = operação1 * operação2;
        break;
      case "/":
        if (operação2 !== 0) {
          resultado4 = operação1 / operação2;
        } else {
          resultado4 = "Erro: divisão por zero.";
        }
        break;
      default:
        resultado4 = "Operação inválida.";
    }

    document.getElementById("resultado4").innerText = "Resultado: " + resultado4;
  }
