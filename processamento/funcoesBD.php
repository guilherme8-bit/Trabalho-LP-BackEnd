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

?>