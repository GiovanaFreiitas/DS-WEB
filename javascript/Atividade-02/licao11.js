function maiorNumero() {
    var numero01 = document.getElementById("numero01").value;
    var numero02 = document.getElementById("numero02").value;
    var numero03 = document.getElementById("numero03").value;
    var resultado01 = document.getElementById("resultado01").value;
   
    if (numero01 < numero02){
      resultado01 = "o segundo numero é o maior"
    }
   
  else {
    resultado01="o primeiro numero é o maior"
  
  }
  if (numero01 < numero03){
    resultado01 = "o terceiro numero é o maior"
  }
  
  else {
  resultado01="o primeiro numero é o maior"
  
  }
  if (numero02 < numero03){
    resultado01 = "o terceiro numero é o maior"
  }
  
  else {
  resultado01="o segundo numero é o maior"
  
  }
  
  document.getElementById("resultado01").innerText = "Resultado: " + resultado01;
  
  }
  
  