function sauldar(str) {
    return str.replace(/[^a-zA-Z0-9]/g, ' ' )
 }
 
 let input = document.getElementById('um')
 let input2 = document.getElementById('dois')
 
 input.onkeyup = function(){ 
   input2.value = sauldar(input.value)
 }