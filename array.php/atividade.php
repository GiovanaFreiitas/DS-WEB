<?php

$frutas = array("Maçã", "Banana", "Laranja", "Manga", "Uva");

array_push($frutas, "Pera");
sort($frutas);

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}
$produto = array(
    "nome" => "Banana",
    "preco" => 3.99,
    "estoque" => 15
);
$produto["preco"] = 6.75;

$unidadesvendidas = 5;

$valorfinal = array(6.75,5);

$nomesProdutos = array("Banana", "Maça", "Uva", "manga", "laranja");

$precosProdutos = array(6.70, 5.90, 4.80,7.40,2.90);

$produtos = array_combine($nomesProdutos, $precosProdutos);

echo "<h3>Array Associativo de Produtos e Preços:</h3>";
    print_r($produtos);

echo "<h3>Informações do Produto:</h3>";
foreach ($produto as $chave => $valor) {
    echo "<li><strong>" . ucfirst($chave) . ":</strong> " . $valor . "</li>";
}
echo "<h3>Valor Final de Unidades Vendidas</h3>";
$total = $produto["preco"] * $unidadesvendidas;
print_r($total). "<br>";
echo "<br>";
echo "<br>";

$cores = array("amarelo", "verde", "azul", "roxo", "rosa");
if(in_array("verde", $cores));
echo "cor encontrada";
echo "<br>";
echo "<br>";
$numero = array(1,2,3,4,5,6,7,8,9);
$total = array_sum($numero);
print_r($total). "<br>";


?>