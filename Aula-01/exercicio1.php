<?php

class moto{
    
//Atibuto 
  public $marca;
  public $modelo;
  public $velocidademaxima;

//Metodo
  public function ligar(){

  }
 public function acelerar(){
    
  }

public function trocarmarcha(){
  return "marcha";
 }

 $moto = new Veiculo();
 $moto ->marca= "yamaha";
 echo $moto->XJ6();
}



class geladeira{
    
    //Atibuto 
      public $marca;
      public $modelo;
      public $numerodeportas;
    
    //Metodo
      public functionacenderluzinterna(){
    
      }
     public function fazergelo(){
        
      }
    
    public function refrigerar(){
      return "temperatura"
     }
    
     $geladeira = new produto();
     $geladeira->modelo= "BO85AK";
     echo $geladeira->3();
    }


    class relogio{
    
      //Atibuto 
        public $marca;
        public $modelo;
        public $tipo;
      
      //Metodo
        public function mostrardata(){
      
        }
       public function ativaralarme(){
          
        }
      
  public function iluminaratela(){
     return "Ativa a luz de fundo para facilitar a visualização no escuro"
    }
      
  $relogio = new produto();
   $relogio->modelo= "F91W";
   echo $relogio->digital();
}
  
    class freezer{
    
       //Atibuto 
     public $marca;
     public $modelo;
    public $numerodeportas;
        
        //Metodo
      public function ligardesligar(){
        
    }
    public function controledetemperatura(){
     return "controlar temperatura"
  }
        
   public function compartimentoextrafrio(){
          
   }
        
   $freezer = new produto();
  $freezer->modelo= "vertical";
      echo $freezer->1();
   }
    
   class fogão{
    
      //Atibuto 
   public $marca;
   public $modelo;
   public $quantidadedebocas;
          
          //Metodo
     public function acenderboca(){
       return "acender chama"
   }
   public function desligarforno(){
              
   }
          
   public function ajustarchama(){
             
 }
          
  $fogão = new produto();
  $fogão->modelo= "4 bocas";
 echo $fogão->4();
 }
      

  class contabancaria{
    
      //Atibuto 
  public $numeroconta;
   public $titular;
   public $saldo;
   public $tipoconta;
            
            
     //Metodo
  public function depositar($deposito){
    $this->saldo += $deposito
     return "esse é o novo saldo"
  }
  public function sacar(saque){
    $this->saldo -= $saque
    return "esse é o novo saldo"
  }
            
  public function exibirsaldo(){
     return "saldo"
  }
            
  $joão = new contabancaria();
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
  }

?>