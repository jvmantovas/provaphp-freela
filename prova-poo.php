<?php
$patternName = readline("Digite 'Cruz' ou 'X': ");

echo "Você escolheu desenhar: \e[33m{$patternName}\e[0m\n";

if (strtolower($patternName) == 'cruz') {
    $pattern = new Cross();
} else if (strtolower($patternName) == 'x') {
    $pattern = new X();
} else {
    echo "Opção inválida!\n";
    exit();
}

abstract class Pattern
{
    abstract public function draw();
    protected function printChar()
    {
        echo "\e[31m*\e[0m";
    }
}

class Cross extends Pattern
{
    function draw()
    {
        for ($row = 0; $row < 5; $row++) {
            for ($col = 0; $col < 7; $col++) {
                $this->isCross($row, $col) ? $this->printChar() : print('.');
            }
            echo "\n";
        }
    }

    function isCross($row, $col)
    {
        return $row == 1 || $col == 3;
    }
}

class X extends Pattern
{
    function draw()
    {
        for ($row = 0; $row < 5; $row++) {
            for ($col = 0; $col < 5; $col++) {
                $this->isX($row, $col) ? $this->printChar() : print('.');
            }
            echo "\n";
        }
    }

    function isX($row, $col)
    {
        return $row == $col || $row + $col == 5 - 1;
    }
}

$pattern->draw();
