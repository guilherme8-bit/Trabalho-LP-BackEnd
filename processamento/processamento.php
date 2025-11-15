<?php
session_start();
require_once "funcoesBD.php";

//cadastro de filme
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

//cadastro de serie
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

//cadastro de plano
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

//cadastro de usuario
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

    header('Location:../view/home.php');
    die();
    
}

if (isset($_POST['inputEmailL']) && isset($_POST['inputSenhaL'])) {
    $email = $_POST['inputEmailL'];
    $senha = $_POST['inputSenhaL'];

    $conexao = conectarBD();

    $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {

        $usuario = mysqli_fetch_assoc($resultado);

        session_start();
        $_SESSION['id'] = $usuario['id'];    
        $_SESSION['email'] = $usuario['email'];


        header("Location: ../view/usuarios.php"); 
        die();
    } else {
        echo "<script>alert('E-mail ou senha incorretos!'); window.location.href='../view/login.php';</script>";
    }
}

session_start();
require_once "../processamento/funcoesBD.php";

if (!isset($_SESSION['usuario'])) {
    header("Location: ../view/login.php");
    exit();
}

$conexao = conectarBD();


$email = $_SESSION['usuario'];
$sqlUser = "SELECT id FROM usuario WHERE Email = '$email'";
$resultUser = mysqli_query($conexao, $sqlUser);
$user = mysqli_fetch_assoc($resultUser);
$id_usuario = $user['id'];


$id_filme = $_POST['id_filme'] ?? null;
$id_serie = $_POST['id_serie'] ?? null;


adicionarNaLista($id_usuario, $id_filme, $id_serie);

header("Location: ../view/minha_lista.php");
exit();

?>