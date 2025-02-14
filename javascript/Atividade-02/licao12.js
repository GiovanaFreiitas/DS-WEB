function verificarTriangulo(){
    var lado1 = Number(window.document.getElementById("lado1").value);
   
    var lado2= Number(window.document.getElementById("lado2").value);
  
    var lado3= Number(window.document.getElementById("lado3").value);
  
    var resultado = document.getElementById("resultado50");
  
  
  
    if (lado1 + lado2 > lado3 && lado1 + lado3 > lado2 && lado2 + lado3 > lado1) {
        if (lado1 === lado2 && lado2 === lado3) {
            resultado = "É um triângulo equilátero (todos os lados iguais).";
        } else if (lado1 === lado2 || lado1 === lado3 || lado2 === lado3) {
            resultado = "É um triângulo isósceles (dois lados iguais).";
        } else {
            resultado = "É um triângulo escaleno (todos os lados diferentes).";
        }
    } else {
        resultado.textContent = "Os lados fornecidos não formam um triângulo válido.";
        resultado.style.color = "red";
    }
    document.getElementById("resultado50").innerHTML = resultado;
  }