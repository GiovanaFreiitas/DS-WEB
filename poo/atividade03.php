<?php
    class Veiculo {
        public $marca;
        public $modelo;
        private $velocidade;

    public function getexibirVelocidade(){
        return $this->velocidade;
    }
    public function setDefinir($v){
        $this->velocidade = $v;
    }
    }

class carro extends Veiculo{
    public function acelerar(){
        return "Velocidade Maxima 150km/h";
    }
}
class moto extends Veiculo{
    public function acelerar(){
        return "Velocidade Maxima 190km/h";
    }
}

$corsa = new carro();
$corsa->acelerar();
echo "Velocidade: " . $corsa->acelerar() . "<br/>";

$XJ = new moto();
$XJ->acelerar();
echo "Velocidade: " . $XJ->acelerar() . "<br/>";
?>