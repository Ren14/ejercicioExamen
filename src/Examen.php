<?php

class Examen {
    public $tamanioArray;
    public $arrayNumeros;    
    public $resultado;
    public $verDetalleResultado = TRUE;

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

        $parKey = 1;

        foreach($_arrayNumeros as $key => $valor){
            $posSiguiente = $key + 1;            
            
            for($k = $posSiguiente; $k < sizeof($_arrayNumeros); $k++){               
                
                if(($valor + $_arrayNumeros[$k]) == $_numeroEntero){                    
                    $this->resultado++;                    

                    if($this->verDetalleResultado){
                        echo "Par #$parKey: ($valor + $_arrayNumeros[$k]) = $_numeroEntero \n";
                        $parKey++;
                    }
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

### Aquí se realiza el testeo sin framework del ejercicio

$examen = new Examen();
$examen->setTamanioArray( rand(0,1000) );
$examen->inicializarArray();
if($examen->verDetalleResultado){
    echo "El array inicializado es: \n";
    print_r($examen->arrayNumeros);     
    echo "\n\n";
}
$numeroEntero = rand(0, 1000);
$examen->calcularResultado($examen->arrayNumeros, $numeroEntero);
$resultado = $examen->getResultado();
echo "\nSe encontraron [" . $resultado . "] pares de numeros, que sumados son igual al numero [$numeroEntero], sobre un array de un tamanio de [$examen->tamanioArray]\n";

?>