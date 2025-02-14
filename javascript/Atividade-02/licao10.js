function Valor1(){
    var mensagem = Number(window.document.getElementById("valorizando").value);
    console.log(mensagem);
    var numero = Number.parseInt(mensagem);
    var resultado = mensagem % 2 == 0 ? 'Par' : 'Impar';
    document.getElementById("mensagem3").innerHTML =  resultado;
  }