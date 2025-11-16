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


if(isset($_POST['inputNomeU']) && isset($_POST['inputCPF'])&& isset($_POST['inputEmail'])&& isset($_POST['inputSenha'])){

    $nomeU = $_POST['inputNomeU'];
    $cpf = $_POST['inputCPF'];
    $email = $_POST['inputEmail'];
    $senha = $_POST['inputSenha'];

    inserirUsuario($nomeU, $cpf, $email, $senha);

    header('Location:../view/telapag.php');
    die();
}

if(isset($_POST['inputNomeT']) && isset($_POST['inputCPFT']) && isset($_POST['inputNC']) && isset($_POST['inputDV']) && isset($_POST['inputCS'])&& isset($_POST['plano'])&& isset($_POST['parc'])){

    $nomeT = $_POST['inputNomeT'];
    $cpfT = $_POST['inputCPFT'];
    $numCartao = $_POST['inputNC'];
    $datValidade = $_POST['inputDV'];
    $codSeg = $_POST['inputCS'];
    $plano = $_POST['plano'];
    $parc = $_POST['parc'];

    inserirPag($nomeT,$cpfT,$numCartao,$datValidade,$codSeg,$plano,$parc);

    header('Location:../view/usuarios.php');
    die();
    
}

if (isset($_POST['inputEmailL']) && isset($_POST['inputSenhaL'])) {

    $email = $_POST['inputEmailL'];
    $senha = $_POST['inputSenhaL'];

    $conexao = conectarBD();

    $sql = "SELECT * FROM usuario WHERE Email = '$email' AND Senha = '$senha'";
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) === 1) {
        
        $usuario = mysqli_fetch_assoc($resultado);

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['email'] = $usuario['Email'];

        header("Location: ../view/usuarios.php");
        exit();

    } else {
        echo "Email ou senha incorretos!";
        exit();
    }
}

if (!isset($_SESSION['id'])) {
    $_SESSION['id'] = $usuario['id']; ;
}



if (isset($_POST['acao']) && $_POST['acao'] === "adicionar_lista") {

    if (!isset($_SESSION['id'])) {
        
        echo "ERRO: Usuário não está logado (variável de sessão não existe).";
        exit();
    }

    $idUsuario = $_SESSION['id'];
    $idItem = intval($_POST['id_item']);
    $tipo = $_POST['tipo'];   

    adicionarNaLista($idUsuario, $idItem, $tipo);

   
    header("Location: ../view/minha_lista.php");
    exit();
}


if (isset($_GET['acao']) && $_GET['acao'] === "remover_lista") {

    if (!isset($_SESSION['id'])) {
        echo "ERRO: usuário não está logado.";
        exit();
    }

    $idUsuario = $_SESSION['id'];
    $idItem = intval($_GET['id']);
    $tipo = $_GET['tipo']; 

    if ($tipo === "filme") {
        $sql = "DELETE FROM minha_lista 
                WHERE id_usuario = $idUsuario 
                AND id_filme = $idItem";
    } else {
        $sql = "DELETE FROM minha_lista 
                WHERE id_usuario = $idUsuario 
                AND id_serie = $idItem";
    }

    mysqli_query(conectarBD(), $sql);

    header("Location: ../view/minha_lista.php");
    exit();
}

if (isset($_POST['acao']) && $_POST['acao'] === "editarPerfil") {

    $conexao = conectarBD();
    mysqli_begin_transaction($conexao);

    try {

        $id_usuario     = $_POST['id_usuario'];

        
        $numero_cartao  = $_POST['inputNCE'];
        $data_validade  = $_POST['inputDVE'];
        $cod_seguranca  = $_POST['inputCDE'];
        $plano_nome     = $_POST['plano'];   
        $parcelamento   = $_POST['parc'];     

     
        $sqlPag = "UPDATE pagamentos SET 
            numero_cartao = ?, 
            data_validade = ?, 
            cod_seguranca = ?, 
            nome_plano = ?, 
            parcelamento = ?
        WHERE id = ?";

        $stmtP = mysqli_prepare($conexao, $sqlPag);
        mysqli_stmt_bind_param($stmtP, "sssssi",
            $numero_cartao, 
            $data_validade, 
            $cod_seguranca, 
            $plano_nome, 
            $parcelamento, 
            $id_usuario   
        );
        mysqli_stmt_execute($stmtP);

       
        mysqli_commit($conexao);

        header("Location: ../view/perfis.php?atualizado=1");
        exit();

    } catch (Exception $erro) {
        mysqli_rollback($conexao);
        echo "Erro ao atualizar: " . $erro->getMessage();
    }
}

?>