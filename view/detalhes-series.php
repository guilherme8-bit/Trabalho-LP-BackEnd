<?php
session_start();
require_once "../processamento/funcoesBD.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $listarSerie = retornarSeries(null, $id);
    $serie = mysqli_fetch_assoc($listarSerie);

}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilizacao/detalhes-serie.css">
    <?php
    echo "<title>{$serie['nome']}</title>";
    ?>

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
                    <a href="../view/usuarios.php">Sair</a>
                </section>
            </section>
        </nav>
    </header>
    <main>
        <section class='serie'>
        <?php
            echo "<img src='{$serie['imagem']}' alt='{$serie['nome']}' class='banner'>";
            echo "<section class='sobreposicao'></section>";
            

            echo "<section class='content'>";
                echo "<h2 class='title'>{$serie['nome']}</h2>";

                echo "<section class='detalhes'>";
                    echo "<p>{$serie['ano']}</p>";
                    echo "<p style='text-transform: capitalize;'>{$serie['genero']}</p>";
                    echo "<p> {$serie['avaliacao']}/10</p>";
                echo "</section>";

                echo "<section class='descricao'>";
                    echo "{$serie['descricao']}";
                echo "</section>";
            echo "</section>";
            ?>
        <section class="buttons">
    <button class="btn-play">Assista Agora</button>
    
    <form method="POST" action="../processamento/processamento.php" style="display:inline;">
        <input type="hidden" name="id_serie" value="<?php echo $serie['id']; ?>">
        <button type="submit" class="btn-info">+ Minha Lista</button>
    </form>
        </section>
        </section>
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