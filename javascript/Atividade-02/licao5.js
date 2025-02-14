const cores = ["#cc02ff", "#ff0296"];
let controle = true;

trocaCor.addEventListener('click', () => {
  cor.style.backgroundColor = cores[1];  // segundo valor do array
  controle = !controle;   // nega o valor - se verdadeiro vira falso e vice e versa
  
  if(controle) cor.style.backgroundColor = cores[0];  // se true, primeira cor
  else cor.style.backgroundColor = cores[1];
})
