<?php
function conectarBD(){

    $conexao = mysqli_connect("localhost","root","","cineprime");
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

function retornarFilmes($genero = null, $id = null){
    
    $conexao = conectarBD();
    
    if($id !== null){
        $stmt = mysqli_prepare($conexao, "SELECT id, nome, descricao, genero, avaliacao, ano, imagens FROM filmes WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        return mysqli_stmt_get_result($stmt);
    }

    if($genero !== null){
        $stmt = mysqli_prepare($conexao, "SELECT id, nome, imagens FROM filmes WHERE genero = ?");
        mysqli_stmt_bind_param($stmt, "s", $genero);
        mysqli_stmt_execute($stmt);
        return mysqli_stmt_get_result($stmt);
    }

    $consulta = "SELECT id, nome, imagens FROM filmes";
    return mysqli_query($conexao, $consulta);
}

function retornarSeries($genero = null, $id = null){
    
    $conexao = conectarBD();
    
    if($id !== null){
        $stmt = mysqli_prepare($conexao, "SELECT id, nome, descricao, genero, avaliacao, ano, imagem FROM series WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        return mysqli_stmt_get_result($stmt);
    }
    if($genero !== null){
        $stmt = mysqli_prepare($conexao, "SELECT id, nome, imagem FROM series WHERE genero = ?");
        mysqli_stmt_bind_param($stmt, "s", $genero);
        mysqli_stmt_execute($stmt);
        return mysqli_stmt_get_result($stmt);
    }
    $consulta = "SELECT id, nome, imagem FROM series";
    return mysqli_query($conexao, $consulta);
}

function procurarFilmesESeries($filtro){
    $conexao = conectarBD();
    $procurar = "SELECT id, nome, imagens, 'filme' AS tipo 
        FROM filmes 
        WHERE nome LIKE '%$filtro%'
        UNION
        SELECT id, nome, imagem AS imagens, 'serie' AS tipo 
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