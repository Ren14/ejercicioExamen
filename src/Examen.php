<?php

class Examen {
    public $tamanioArray;
    public $arrayNumeros;    
    public $resultado;

    function __construct(){        
        $this->arrayNumeros = array();        
        $this->resultado = 0;             
    }

    public function setTamanioArray($_tamanioArray)
    {
        $this->tamanioArray = $_tamanioArray;
    }
    
    public function calcularResultado($_arrayNumeros, $_numeroEntero){        
        
        if($_numeroEntero< 0 || $_numeroEntero > 1000){
            throw new Exception('El número entero X debe estar en el rango 0-1000');
        }

        if(sizeof($_arrayNumeros) < 2){
            throw new Exception('El array no puede estar vacío, debe contener al menos dos elementos');
        }

        foreach($_arrayNumeros as $key => $valor){
            $posSiguiente = $key + 1;            
            
            for($k = $posSiguiente; $k < sizeof($_arrayNumeros); $k++){               
                
                if(($valor + $_arrayNumeros[$k]) == $_numeroEntero){                    
                    $this->resultado++;                    
                }
            }            
        }
    }

    public function inicializarArray(){
        for($i = 0; $i <= $this->tamanioArray; $i++){
            array_push($this->arrayNumeros, rand(-1000, 1000));
        }
    }

    public function getResultado()
    {
        return $this->resultado;
    }
}

?>