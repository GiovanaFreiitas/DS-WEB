function validarLogin() {
    var nome = document.getElementById("nome").value;
    var pass = document.getElementById("pass").value;
    if (nome === "admin" && pass === "12345") {
        document.getElementById("resultado").innerText = "Login bem-sucedido!";
    } else {
        document.getElementById("resultado").innerText = "erro login ou senha errado";
    }
}