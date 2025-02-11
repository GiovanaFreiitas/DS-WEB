<?php

class moto{
    
//Atibuto 
  public $marca;
  public $modelo;
  public $velocidade maxima;

//Metodo
  public function ligar(){

  }
 public function acelerar(){
    
  }

public function trocar marcha(){
  return "mudar  marchagit commit"
 }

 $moto = new Veiculo();
 $moto ->marca= "yamaha";
 echo $moto->XJ6();
}



class geladeira{
    
    //Atibuto 
      public $marca;
      public $modelo;
      public $numero de portas;
    
    //Metodo
      public function acender luz interna(){
    
      }
     public function fazer gelo(){
        
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
        public function mostrar data(){
      
        }
       public function ativar alarme(){
          
        }
      
      public function iluminar a tela(){
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
          public $numero de portas;
        
        //Metodo
          public function ligar/desligar(){
        
          }
         public function controle de temperatura(){
          return "controlar temperatura"
          }
        
        public function compartimento extra frio(){
          
         }
        
         $freezer = new produto();
         $freezer->modelo= "vertical";
         echo $freezer->1();
        }
    
        class fogão{
    
          //Atibuto 
            public $marca;
            public $modelo;
            public $quantidade de bocas;
          
          //Metodo
            public function acender boca(){
              return "acender chama"
            }
           public function desligar forno(){
              
            }
          
          public function ajustar chama(){
             
           }
          
           $fogão = new produto();
           $fogão->modelo= "4 bocas";
           echo $fogão->4();
          }
      

          class contabancaria{
    
            //Atibuto 
              public $numero conta;
              public $titular;
              public $saldo;
              public $tipoconta;
            
            
            //Metodo
              public function depositar(){
                  return "depositar"
              }
             public function sacar(){
              return "sacar"
              }
            
            public function exibir saldo(){
              return "saldo"
             }
            
             $joão = new contabancaria();
             $joao->saldo= "500";
             $joao->tipoconta= "debito";
             echo $joao->();

             $sabrina = new contabancaria();
             $sabrina->saldo= "1000";
             $sabrina->tipoconta= "debito";
             echo $sabrina->();

             $giovana = new contabancaria();
             $giovana->saldo= "1500";
             $giovana->tipoconta= "credito";
             echo $giovana->());
            }

?>