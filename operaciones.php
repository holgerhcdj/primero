<?php
class operaciones
{
   public $n1;
   public $n2;
   public $resultado;

   function __construct(){
   	$this->n1=50;
   	$this->n2=25;
   }
   function sumar(){
   	   	return $this->resultado=$this->n1+$this->n2;
    function restar(){
   		return $this->resultado=$this->n1-$this->n2;
   	function multiplicar(){
   		return $this->resultado=$this->n1*$this->n2;
   		
  	
  
   	}
   	   }
}
}

$operaciones=new operaciones();
echo $operaciones->sumar();




?>