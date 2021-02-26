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

    
}