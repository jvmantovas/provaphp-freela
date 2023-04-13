<?php
//codigo antigo
$pattern = readline("Digite 'Cruz' ou 'X': ");

if (strtolower($pattern) == 'cruz') {
    echo "Você escolheu desenhar: Cruz\n";
    for ($row = 0; $row < 5; $row++) {
        for ($col = 0; $col < 7; $col++) {
            if ($row == 0 && $col == 3) {
                echo "\e[31m*\e[0m";
            } else if ($row == 1 && ($col == 1 || $col == 2 || $col == 3 || $col == 4 || $col == 5)) {
                echo "\e[31m*\e[0m";
            } else if ($row == 2 && $col == 3) {
                echo "\e[31m*\e[0m";
            } else if ($row == 3 && $col == 3) {
                echo "\e[31m*\e[0m";
            } else if ($row == 4 && $col == 3) {
                echo "\e[31m*\e[0m";
            } else {
                echo ".";
            }
        }
        echo "\n";
    }
} else if (strtolower($pattern) == 'x') {
    echo "Você escolheu desenhar: X\n";
    for ($row = 0; $row < 5; $row++) {
        for ($col = 0; $col < 5; $col++) {
            if ($row == 0 && ($col == 0 || $col == 4)) {
                echo "\e[31m*\e[0m";
            } else if ($row == 1 && ($col == 1 || $col == 3)) {
                echo "\e[31m*\e[0m";
            } else if ($row == 2 && $col == 2) {
                echo "\e[31m*\e[0m";
            } else if ($row == 3 && ($col == 1 || $col == 3)) {
                echo "\e[31m*\e[0m";
            } else if ($row == 4 && ($col == 0 || $col == 4)) {
                echo "\e[31m*\e[0m";
            } else {
                echo ".";
            }
        }
        echo "\n";
    }
} else {
    echo "Opção inválida!";
    exit();
}
