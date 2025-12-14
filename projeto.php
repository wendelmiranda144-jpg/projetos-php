<?php

// Solicita a idade do usuário

echo "Digite a sua idade: ";
$idade = (int) fgets(STDIN); // lê do terminal e converte para inteiro

// Classificação por idade
if ($idade <= 12) {
    echo "Você é criança.\n";
} elseif ($idade >= 13 && $idade <= 17) {
    echo "Você é adolescente.\n";
} elseif ($idade >= 18 && $idade <= 58) {
    echo "Você é adulto.\n";
} else {
    echo "Você é idoso.\n";
}

?>
