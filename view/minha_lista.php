<?php
session_start();
require "../processamento/funcoesBD.php";

$idUsuario = $_SESSION['id'];

$resultado = retornarLista($idUsuario);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilizacao/minha_lista.css">
    <title>Minha_lista</title>
</head>
<body>
    <header class="navbar">
        <p class="logo">CINEPRIME</p>
        <nav class="nav-links">
            <a href="../view/home.php" class="icon"><img src="../img/house.png">Home</a>
            <a href="../view/procurar.php" class="icon"><img src="../img/lupa.png">Procurar</a>
            <a href="../view/minha_lista.php" class="icon"><img src="../img/mais.png">Minha lista</a>
            <a href="../view/filme.php" class="icon"><img src="../img/camera.png">Filmes</a>
            <a href="../view/serie.php" class="icon"><img src="../img/tv_show.png">Séries</a>
            <section class="perfil">
                <img src="../img/default.png" alt="Perfil" class="perfil-img">
                <section class="menu-perfil">
                    <a href="../view/perfis.php">Perfis</a>
                    <a href="../view/cadfilme.php">Cadastrar filmes</a>
                    <a href="../view/cadserie.php">Cadastrar séries</a>
                    <a href="../view/cadplano.php">Cadastrar planos</a>
                    <a href="../view/login.php">Sair</a>
                </section>
            </section>
        </nav>
    </header>
    <h2>Minha Lista</h2>
    <main class="lista-filmes">
    

    <?php while ($item = mysqli_fetch_assoc($resultado)) { ?>

    <?php
    // Verifica automaticamente se é filme ou série
    if ($item['id_filme']) {
        // É um FILME
        $link = "../view/detalhes-filmes.php?id={$item['id_filme']}";
        $imagem = $item['imagem_filme'];
        $nome = $item['nome_filme'];
    } else {
        // É uma SÉRIE
        $link = "../view/detalhes-series.php?id={$item['id_serie']}";
        $imagem = $item['imagem_serie'];
        $nome = $item['nome_serie'];
    }
    ?>

    <section class="card">
        <a href="<?= $link ?>">
            <img src="<?= $imagem ?>" alt="<?= $nome ?>">
        </a>
        <p><?= $nome ?></p>
    </section>

<?php } ?>
</main>
    <footer class="main-footer">
        <section class="footer-content">
            <section class="footer-section about">
                <h3>CINEPRIME</h3>
                <p>O melhor lugar para maratonar filmes e séries. Cancelamento fácil a qualquer momento.</p>
            </section>

            <section class="footer-section links">
                <h3>Links Rápidos</h3>
                <ul>
                    <li><a href="#">Sobre Nós</a></li>
                    <li><a href="#">Perguntas Frequentes</a></li>
                    <li><a href="#">Termos de Uso</a></li>
                    <li><a href="#">Política de Privacidade</a></li>
                </ul>
            </section>

            <section class="footer-section social">
                <h3>Siga-nos</h3>
                <section class="social-icons">
                    <a href="#"><img src="../img/instagram.png" alt="instagrma"></a>
                    <a href="#"><img src="../img/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="../img/ex-twitter.png" alt="twitter" class="x"></a>
                </section>
            </section>
        </section>

        <section class="footer-bottom">
            &copy;  Cineprime. Todos os direitos reservados.
        </section>
    </footer>
</body>
</html>