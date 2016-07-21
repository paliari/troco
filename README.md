# TROCO

Este projeto é uma classe simples para avaliar programadores PHP.
A classe *Troco* no arquivo *Troco.php*, possui apenas um método, *getQtdeNotas*,
que retorna a um array contendo a quantidade de notas necessárias de cada cédula, para completar o valor em reais passado no parâmetro.

Trata-se de um problema simples, para ser resolvido no máximo em 1 hora.

###### Exemplo de resposta esperada ao executar console.php:

```PHP
<?php

require_once 'Troco.php';
$troco = new Troco();
$notas = $troco->getQtdeNotas(289.99);
print_r($notas);
/*
Array
(
    [100] => 2
    [50] => 1
    [20] => 1
    [10] => 1
    [5] => 1
    [2] => 2
    [1] => 0
    [0.5] => 1
    [0.25] => 1
    [0.1] => 2
    [0.01] => 4
)
*/
```

### Executando os testes unitários

Na linha de comando, utilizando o php 5.4 ou superior, digite:

`php phpunit.phar --colors TrocoTest.php`

Tire o parâmetro --colors caso não funcione no MS-DOS.  
Utilize o PHP **5.4** ou superior.

## Os seguintes critérios serão avaliados

1. Clareza do código
2. Comentários relevantes
3. Método protegido para auxiliar o cálculo, tirand a carga do método *getQtdeNotas*
4. Suite de teste unitário completa para garantir o funcionamento da classe
5. Código formatado de acordo com os padrões do PHP [PSR-1](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md) e [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md)
6. Este problema possui algumas soluções, mas será preferida aquela utilizando o loop **foreach**.

Ao concluir, publicar o código na sua conta do GitHub e me enviar um Pull Request.

## Pontos extras

Os critérios acima são os requisitos mínimos. Mas para os candidatos que pretendem se destacar, segue algumas sugestões.

Adicionar no construtor da classe, uma array opcional contendo a quantidade de notas disponíveis para cada cédula. O troco deve ser retornado respeitando este limite de notas imposto. Caso não tenha cédulas suficientes para retornar o troco, gerar uma exceção.

## Observação
Pode adaptar o código para sua linguagem de preferência, o importante nesse teste é avaliar o raciocínio lógico.
