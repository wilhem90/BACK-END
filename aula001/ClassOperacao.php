<?php

class Operacao {
    public $valor1 = 0;
    public $valor2 = 0;
    public $resultado = 0;

    function __construct($val1, $val2){
        $this->valor1 = $val1;
        $this->valor2 = $val2;
    }
    
    public function soma(){
        $this->resultado = $this->valor1 + $this->valor2;
        return $this->resultado;
    }
    
    public function resta(){
        $this->resultado = $this->valor1 + $this->valor2;
        return $this->resultado;
    }
    
    public function multi(){
        $this->resultado = $this->valor1 * $this->valor2;
        return $this->resultado;
    }

    public function div(){
        $this->resultado = $this->valor1 / $this->valor2;
        return $this->resultado;
    }
}
// Fim da class Operacao

?>