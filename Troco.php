<?php

/**
 * Class Troco
 * Classe para calcular a quantidade de notas necessárias para um determinado valor em Reais.
 * Suporta centavos.
 */
class Troco
{
    /**
     * Dado um valor em reais, retorna a quantidade de notas necessárias para formar o troco.
     *
     * @param $reais Valor em reais, podendo conter centavos.
     * @return array Quantidade de notas, indexada pelo seu valor.
     */
    public function getQtdeNotas($reais)
    {
        $qtdeNotas = [
          "100" => 0,
           "50" => 0,
           "20" => 0,
           "10" => 0,
            "5" => 0,
            "2" => 0,
            "1" => 0,
          "0.5" => 0,
         "0.25" => 0,
          "0.1" => 0,
         "0.01" => 0,
        ];

        // colocar o código aqui, exemplo:

        if ($reais == 100) {
            $qtdeNotas["100"] = 1;
        }

        return $qtdeNotas;
    }
}
