<?php
function conectarBD(){

    $conexao = mysqli_connect("localhost","root","","cineprime");
    return($conexao);
}

function inserirFilme($nome, $descricao, $genero, $avaliacao, $ano, $arquivo){

    $conexao = conectarBD();
    $consulta = "INSERT INTO filmes (nome, descricao, genero, avaliacao, ano, imagem)
                    VALUES('$nome','$descricao','$genero','$avaliacao','$ano','$arquivo')";

mysqli_query($conexao,$consulta);
}

function inserirSerie($nome, $descricao, $genero, $avaliacao, $ano, $arquivo){

    $conexao = conectarBD();
    $consulta = "INSERT INTO series (nome, descricao, genero, avaliacao, ano, imagem)
                    VALUES('$nome','$descricao','$genero','$avaliacao','$ano','$arquivo')";

mysqli_query($conexao,$consulta);
}  

function inserirPlano($nome, $descricao, $valorMensal, $valorAnual, $qualidade, $telas, $ativo, $anuncio){

    $conexao = conectarBD();
    $consulta = "INSERT INTO plano (nome, descricao, valor_mensal, valor_anual, qualidade, telas, ativo, anuncio)
                    VALUES('$nome','$descricao','$valorMensal','$valorAnual','$qualidade','$telas', '$ativo', '$anuncio')";

mysqli_query($conexao,$consulta);
}  

?>