<?php

abstract class Pattern
{
    abstract public function draw(int $color);
    protected function printChar(string $char, int $color)
    {
        echo "\e[{$color}m{$char}\e[0m";
    }
}

class Cross extends Pattern
{
    private $rows = 5;
    private $cols = 7;
    public function draw($color)
    {
        for ($row = 0; $row < $this->rows; $row++) {
            for ($col = 0; $col < $this->cols; $col++) {
                $this->isCross($row, $col) ? $this->printChar('*', $color) : print('.');
            }
            echo "\n";
        }
    }

    private function isCross($row, $col)
    {
        return $row == 1 || $col == 3;
    }
}

class X extends Pattern
{
    private $rows = 5;
    private $cols = 5;
    public function draw($color)
    {
        for ($row = 0; $row < $this->rows; $row++) {
            for ($col = 0; $col < $this->cols; $col++) {
                $this->isX($row, $col) ? $this->printChar('*', $color) : print('.');
            }
            echo "\n";
        }
    }

    private function isX($row, $col)
    {
        return $row == $col || $row + $col == $this->rows - 1;
    }
}

while (true) {
    $patternName = readline("Digite 'Cruz' ou 'X': ");
    echo "Agora escolha uma cor: \n\e[31mVermelho:\e[0m 31 || \e[32mVerde:\e[0m 32 || \e[33mAmarelo:\e[0m 33 || \e[34mAzul:\e[0m 34 || \e[35mRoxo:\e[0m 35 || \e[36mCiano:\e[0m 36 || \e[37mBranco:\e[0m 37\n";
    $color = readline("Número da cor: ");
    echo "Você escolheu desenhar: \e[{$color}m{$patternName}\e[0m\n";

    if (strtolower($patternName) == 'cruz') {
        $pattern = new Cross();
        break;
    } else if (strtolower($patternName) == 'x') {
        $pattern = new X();
        break;
    } else {
        echo "Opção inválida!\n";
    }
}

$pattern->draw($color);
