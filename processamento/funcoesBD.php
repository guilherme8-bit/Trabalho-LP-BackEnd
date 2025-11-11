<?php
function conectarBD(){

    $conexao = mysqli_connect("localhost","root","","cineprime");
    return($conexao);
}

function inserirFilme($nome, $descricao, $genero, $avaliacao, $ano, $arquivo){

    $imagemBinaria = file_get_contents($arquivo['tmp_name']);

    $conexao = conectarBD();
    $consulta = "INSERT INTO filmes (nome, descricao, genero, avaliacao, ano, imagem)
                    VALUES('$nome','$descricao','$genero','$avaliacao','$ano','$imagemBinaria')";

mysqli_query($conexao,$consulta);
}

function inserirSerie($nomeS, $descricaoS, $generoS, $avaliacaoS, $anoS, $arquivoS){
    $conexao = conectarBD();
    $consulta = "INSERT INTO series (nome, descricao, genero, avaliacao, ano, imagem)
                    VALUES('$nomeS','$descricaoS','$generoS','$avaliacaoS','$anoS','$arquivoS')";

mysqli_query($conexao,$consulta);
}  

function inserirPlano($nome, $descricao, $valorMensal, $valorAnual, $qualidade, $telas, $ativo, $anuncio){

    $conexao = conectarBD();
    $consulta = "INSERT INTO plano (nome, descricao, valor_mensal, valor_anual, esta_ativo, qualidade_maxima, telas_simultaneas, tem_anuncios)
                    VALUES('$nome','$descricao','$valorMensal','$valorAnual','$ativo','$qualidade','$telas','$anuncio')";

mysqli_query($conexao,$consulta);
}

function retornarFilmes(){
    $conexao = conectarBD();
    $consulta = "SELECT * FROM filmes";
    $listaFilmes = mysqli_query($conexao, $consulta);
    return $listaFilmes;
}

?>