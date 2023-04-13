<?php
$pattern = readline("Digite 'Cruz' ou 'X': ");

$cruz = array(
    array('.', '.', '.', "\e[31m*\e[0m", '.', '.', '.'),
    array('.', "\e[31m*\e[0m", "\e[31m*\e[0m", "\e[31m*\e[0m", "\e[31m*\e[0m", "\e[31m*\e[0m", '.'),
    array('.', '.', '.', "\e[31m*\e[0m", '.', '.', '.'),
    array('.', '.', '.', "\e[31m*\e[0m", '.', '.', '.'),
    array('.', '.', '.', "\e[31m*\e[0m", '.', '.', '.')
);

$x = array(
    array("\e[31m*\e[0m", '.', '.', '.', "\e[31m*\e[0m"),
    array('.', "\e[31m*\e[0m", '.', "\e[31m*\e[0m", '.'),
    array('.', '.', "\e[31m*\e[0m", '.', '.'),
    array('.', "\e[31m*\e[0m", '.', "\e[31m*\e[0m", '.'),
    array("\e[31m*\e[0m", '.', '.', '.', "\e[31m*\e[0m")
);

if (strtolower($pattern) == 'cruz') {
    $printPattern = $cruz;
} elseif (strtolower($pattern) == 'x') {
    $printPattern = $x;
} else {
    echo "Opção inválida.";
    exit();
}

foreach ($printPattern as $row) {
    foreach ($row as $col) {
        echo $col;
    }
    echo "\n";
}
