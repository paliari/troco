<?php

// Utilize este arquivo para testar rapidamente a classe pela linha de comando
// executar assim: php console.php 123.45

require_once 'Troco.php';

$reais = $argv[1] ?: 289.99;

$troco = new Troco();

$notas = $troco->getQtdeNotas($reais);

print_r($notas);
