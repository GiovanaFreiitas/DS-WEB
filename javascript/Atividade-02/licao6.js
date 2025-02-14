function verificarIdade() {
    var idade = document.getElementById("idade").value;
    if (idade < 18) {
       greeting="menor de idade";
    } else {
        greeting="maior de idade";
    }
    document.getElementById("resultado3").innerHTML = greeting;
}
