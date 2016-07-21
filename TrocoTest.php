<?php

require_once 'Troco.php';

/**
 * Class TrocoTest
 * Teste unitário para a classe Troco.
 * Executar na linha de comando utilizando: php phpunit.phar TrocoTest.php
 */
class TrocoTest extends PHPUnit_Framework_Testcase
{
    /**
     * @var Troco
     */
    protected $troco;

    public function setUp()
    {
        $this->troco = new Troco();
    }

    /**
     * Para 0 Reais, a quantidade de notas deve ser zero para todas.
     */
    public function testZero()
    {
        $notas = $this->troco->getQtdeNotas(0);

        $resultadoEsperado = [
            "100"  => 0,
            "50"   => 0,
            "20"   => 0,
            "10"   => 0,
            "5"    => 0,
            "2"    => 0,
            "1"    => 0,
            "0.5"  => 0,
            "0.25" => 0,
            "0.1"  => 0,
            "0.01" => 0,
        ];

        $this->assertEquals($resultadoEsperado, $notas);
    }

    public function test100()
    {
        $notas = $this->troco->getQtdeNotas(100);
        $this->assertEquals(1, $notas["100"]);
    }

    public function test50()
    {
        $notas = $this->troco->getQtdeNotas(50);
        $this->assertEquals(1, $notas["50"]);
    }
}
