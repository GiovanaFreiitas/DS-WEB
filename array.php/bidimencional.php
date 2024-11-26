<?php

$produtos = array(
    array(
        "nome" => "estojo",
        "preco" => 20.00,
        "estoque" => 25
    ),
    array(
        "nome" => "necessarie",
        "preco" => 23.00,
        "estoque" => 5
    ),
    array(
        "nome" => "garrafinha",
        "preco" => 15.00,
        "estoque" => 7
    ),

    array(
    "nome" => "lapis",
    "preco" => 5.00,
    "estoque" => 10
)
);

echo "<h3>Informações dos Produtos:</h3>";
foreach ($produtos as $produto) {
    echo "<ul>";
    foreach ($produto as $chave => $valor) {
        echo "<li><strong>" . ucfirst($chave) . ":</strong> " . $valor . "</li>";
    }
    echo "</ul>";
}

$valorTotalEstoque = 0;

foreach ($produtos as $produto) {
    $valorTotalEstoque += $produto["preco"] * $produto["estoque"];
}

echo "<h3>Valor Total em Estoque</h3>";
echo "R$ " . number_format($valorTotalEstoque, 2, ',', '.') . "<br>";

$alunos = [
    [
        "nome" => "João",
        "matematica" => 8.5,
        "portugues" => 10.00
    ],
    [
        "nome" => "Giovana",
        "matematica" => 9.0,
        "portugues" => 8.0
    ],
    [
        "nome" => "Sabrina",
        "matematica" => 10.00,
        "portugues" => 9,5
    ]
];


echo "<h3>Alunos e Notas</h3>";
foreach ($alunos as $aluno) {
    echo "Nome: " . $aluno["nome"] . " | Matemática: " . number_format($aluno["matematica"], 1, ',', '.') . " | Português: " . number_format($aluno["portugues"], 1, ',', '.') . "<br>";
}


echo "<h3>Médias dos Alunos</h3>";
foreach ($alunos as $aluno) {
    $media = ($aluno["matematica"] + $aluno["portugues"]) / 2;
    echo "Aluno: " . $aluno["nome"] . " | Média: " . number_format($media, 1, ',', '.') . "<br>";
}


?>