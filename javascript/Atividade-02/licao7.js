function verificarNumero() {
    var numero = document.getElementById("numero").value;
    if (numero < 0) {
        document.getElementById("resultado").innerText = "O numero é negativo";
    } else {
        document.getElementById("resultado").innerText = "O numero é positivo";
    }
}