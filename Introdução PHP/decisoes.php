<?php

$idade = 18;

$nome = "Mateus";

echo 'Você só pode entrar se tiver mais de 18 anos.' . PHP_EOL;


if ($idade >= 18 && $nome == 'Mateus') {
    echo "Você tem $idade anos, $nome.\nPode entrar.";
    }

else {
    echo "$nome, você não tem idade para entrar. Por favor se retire.";
}







?>