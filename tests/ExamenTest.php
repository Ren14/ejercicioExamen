<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class ExamenTest extends TestCase
{
    public function testTamanioArray(): void
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
        $examen->calcularResultado($examen->arrayNumeros, rand(0, 1000));
        $resultado = $examen->getResultado();
        $this->assertNotEmpty($resultado);
    }


}