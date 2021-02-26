<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class ExamenTest extends TestCase
{
    public function testTamanioArray()
    {
        $examen = new Examen();
        $examen->setTamanioArray(rand(0,1000));
        $this->assertNotEmpty($examen->tamanioArray);
    }

    public function testInicializarArray()
    {
        $examen = new Examen();
        $examen->setTamanioArray(rand(0,1000));
        $examen->inicializarArray();
        $this->assertNotEmpty($examen->arrayNumeros);        
    }

    public function testCalcularResultado()
    {
        $examen = new Examen();
        $examen->setTamanioArray( rand(0,1000) );
        $examen->inicializarArray();        
        $numeroEntero = rand(0, 1000);
        $examen->calcularResultado($examen->arrayNumeros, $numeroEntero);
        $resultado = $examen->getResultado();
        echo "Se encontraron " . $resultado . " pares de numeros, que sumados son igual a $numeroEntero, sobre un array de un tamanio de $examen->tamanioArray\n";
        $this->assertNotEmpty($resultado);
    }


}