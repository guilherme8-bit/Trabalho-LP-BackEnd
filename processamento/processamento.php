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

if(isset($_POST['inputNomeS']) && isset($_POST['inputDescS']) && isset($_POST['inputGenS']) && isset($_POST['inputAvaS']) && isset($_POST['inputAnoS']) && isset($_FILES['arquivoS'])){
    
    $nomeS = $_POST['inputNomeS'];
    $descricaoS = $_POST['inputDescS'];
    $generoS = $_POST['inputGenS'];
    $avaliacaoS = $_POST['inputAvaS'];
    $anoS = $_POST['inputAnoS'];
    $arquivoS = $_FILES['arquivoS'];
    
    inserirSerie($nomeS, $descricaoS, $generoS, $avaliacaoS, $anoS, $arquivoS);
    
    header('Location:../view/cadserie.php');
    die();
    
}

if(isset($_POST['inputNome']) && isset($_POST['inputDesc']) && isset($_POST['inputVM']) && isset($_POST['inputVA']) && isset($_POST['inputQM']) && isset($_POST['inputTS'])){

    $nome = $_POST['inputNome'];
    $descricao = $_POST['inputDesc'];
    $valorMensal = $_POST['inputVM'];
    $valorAnual = $_POST['inputVA'];
    $qualidade = $_POST['inputQM'];
    $telas = $_POST['inputTS'];
    $ativo = isset($_POST['inputAtivo'])? 1 : 0;
    $anuncio = isset($_POST['inputAnuncio'])? 1 : 0;
    
    inserirPlano($nome, $descricao, $valorMensal, $valorAnual, $qualidade, $telas, $ativo, $anuncio);

    header('Location:../view/cadplano.php');
    die();

}

?>