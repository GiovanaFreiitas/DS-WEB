var a = window.document.getElementById('area')

a.addEventListener('mouseenter', entrar)
a.addEventListener('mouseout', sair)

function entrar(){
a.innerText = 'entrou!'
a.style.background = 'red'
a.style.width= '200px'
}

function sair(){

 a.innerText = 'Saiu!'
a.style.background = 'blue'
a.style.width= '300px'
}
