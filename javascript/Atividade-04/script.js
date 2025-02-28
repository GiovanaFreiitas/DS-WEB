const formulario = document.getElementById('cartao');
const container = document.getElementById('cartao2');

    function criarCartao(nome, descricao) {
      const cartao = document.createElement('div');
      cartao.setAttribute('class', 'cartao');  

      const titulo = document.createElement('h3');
      titulo.textContent = nome;
      cartao.appendChild(titulo);

      const texto = document.createElement('p');
      texto.textContent = descricao;
      cartao.appendChild(texto);

      const botaoExcluir = document.createElement('button');
      botaoExcluir.textContent = 'Excluir';
      botaoExcluir.addEventListener('click', () => {
        cartao.remove();
      });
      cartao.appendChild(botaoExcluir);

      container.appendChild(cartao);  
    }

    formulario.addEventListener('submit', function(event) {
      event.preventDefault();

      const nome = document.getElementById('nome').value;
      const descricao = document.getElementById('descricao').value;

      if (nome && descricao) {
        criarCartao(nome, descricao);
        formulario.reset();  
      }
    });
  
