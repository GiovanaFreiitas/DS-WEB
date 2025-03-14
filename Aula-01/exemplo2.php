<?php

class contabancaria{
    
    //Atibuto 
public $numeroconta;
 public $titular;
 public $saldo;
 public $tipoconta;
          
          
   //Metodo
public function depositar($deposito){
  $this->saldo += $deposito;
   return "esse é o novo saldo" . $this->saldo;
}
public function sacar($saque){
  $this->saldo -= $saque;
  return "esse é o novo saldo"  . $this->saldo;
}
          
public function exibirsaldo(){
   return "saldo"  . $this->saldo;
}
}       
$joao = new contabancaria();
$joao->saldo= "500";
$joao->tipoconta= "debito";
echo $joao->exibirsaldo();

$sabrina = new contabancaria();
$sabrina->saldo= "1000";
$sabrina->tipoconta= "debito";
echo $sabrina->exibirsaldo();

$giovana = new contabancaria();
$giovana->saldo= "1500";
$giovana->tipoconta= "credito";
echo $giovana->exibirsaldo();


?>