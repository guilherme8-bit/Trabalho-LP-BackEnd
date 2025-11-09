<?php
session_start();
require_once "funcoesBD.php";


if(isset($_POST['inputNome']) && isset($_POST['inputDesc']) && isset($_POST['inputGen']) && isset($_POST['inputAva']) && isset($_POST['inputAno']) && isset($_FILES['arquivo'])){

    $nome = $_POST['inputNome'];
    $descricao = $_POST['inputDesc'];
    $genero = $_POST['inputGen'];
    $avaliacao = $_POST['inputAva'];
    $ano = $_POST['inputAno'];
    $arquivo = $_FILES['arquivo'];

    inserirFilme($nome, $descricao, $genero, $avaliacao, $ano, $arquivo);

    header('Location:../view/cadfilme.php');
    die();

} 



?>