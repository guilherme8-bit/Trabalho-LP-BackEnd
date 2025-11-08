<?php
session_start();
require "funcoesBD.php";


if(isset($_POST['inputNome']) && isset($_POST['inputDesc']) && isset($_POST['inputGen']) && isset($_POST['inputAva']) && isset($_POST['inputAno']) && isset($_FILES['arquivo'])){

$nome = $_POST['inputNome'];
$descricao = $_POST['inputDesc'];
$genero = $_POST['inputGen'];
$avaliacao = $_POST['inputAva'];
$ano = $_POST['inputAno'];
$arquivo = $_FILES['arquivo'];

echo "Nome: " . $nome . "Descrição: " .$descricao . "Genero: " . $genero . "Avaliação: " . $avaliacao . "Ano: " . $ano;

inserirFilme($nome, $descricao, $genero, $avaliacao, $ano, $arquivo);

header('Location:../view/cadfilme.php');
die();

} 



?>