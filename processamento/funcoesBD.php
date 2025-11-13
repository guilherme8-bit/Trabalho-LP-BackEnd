<?php
function conectarBD(){

    $conexao = mysqli_connect("localhost","root","admin","cineprime");
    return($conexao);
}

function inserirFilme($nome, $descricao, $genero, $avaliacao, $ano, $arquivo){
    $conexao = conectarBD();

    $pasta = "../arquivos/";
    $nomeArquivo = basename($arquivo['name']);
    $caminhoCompleto = $pasta . $nomeArquivo; 

    move_uploaded_file($arquivo['tmp_name'], $caminhoCompleto);

    $consulta = "INSERT INTO filmes (nome, descricao, genero, avaliacao, ano, imagens)
                    VALUES('$nome','$descricao','$genero','$avaliacao','$ano','$caminhoCompleto')";

mysqli_query($conexao,$consulta);
}

function inserirSerie($nomeS, $descricaoS, $generoS, $avaliacaoS, $anoS, $arquivoS){
    $conexao = conectarBD();

    $pastaS = "../arquivos/";
    $nomeArquivoS = basename($arquivoS['name']);
    $caminhoCompletoS = $pastaS . $nomeArquivoS;
    
    move_uploaded_file($arquivoS['tmp_name'], $caminhoCompletoS);

    $consulta = "INSERT INTO series (nome, descricao, genero, avaliacao, ano, imagem)
                    VALUES('$nomeS','$descricaoS','$generoS','$avaliacaoS','$anoS','$caminhoCompletoS')";

mysqli_query($conexao,$consulta);
}  

function inserirPlano($nome, $descricao, $valorMensal, $valorAnual, $qualidade, $telas, $ativo, $anuncio){

    $conexao = conectarBD();
    $consulta = "INSERT INTO plano (nome, descricao, valor_mensal, valor_anual, esta_ativo, qualidade_maxima, telas_simultaneas, tem_anuncios)
                    VALUES('$nome','$descricao','$valorMensal','$valorAnual','$ativo','$qualidade','$telas','$anuncio')";

mysqli_query($conexao,$consulta);
}

function inserirUsuario($nomeU, $cpf, $email, $senha){
    
    $conexao = conectarBD();
    $consulta = "INSERT INTO usuario (nome, cpf, Email, senha, id_plano)
                    VALUES('$nomeU','$cpf','$email','$senha', 1)";
    
    mysqli_query($conexao,$consulta);

}

function retornarFilmes($genero = null){
    
    $conexao = conectarBD();
    
    if($genero){
        $stmt = mysqli_prepare($conexao, "SELECT nome, imagens FROM filmes WHERE Genero = ?");
        mysqli_stmt_bind_param($stmt, "s", $genero);
        mysqli_stmt_execute($stmt);
        $listarFilmes = mysqli_stmt_get_result($stmt);
    }else{
        $consulta = "SELECT nome, imagens FROM filmes";
        $listarFilmes = mysqli_query($conexao,$consulta);
    }
    return $listarFilmes;
}

function procurarFilmesESeries($filtro){
    $conexao = conectarBD();
    $procurar = "SELECT nome, imagens, 'filme' AS tipo 
        FROM filmes 
        WHERE nome LIKE '%$filtro%'
        UNION
        SELECT nome, imagem AS imagens, 'serie' AS tipo 
        FROM series 
        WHERE nome LIKE '%$filtro%'";
    $procFilmesESeries = mysqli_query($conexao,$procurar);
    return $procFilmesESeries;
}

function retornarUsuarios(){
    $conexao = conectarBD();
    $consulta = "SELECT * FROM usuario";
    $listarUsuarios = mysqli_query($conexao, $consulta);
    return $listarUsuarios;
}

?>