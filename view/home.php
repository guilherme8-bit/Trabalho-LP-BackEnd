<?php
    require_once "../processamento/funcoesBD.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilizacao/home.css">
    <title>Home</title>
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
        <section class="filme">
            <img src="../img/filmes/filme2.jpg" alt="Banner do filme" class="banner">
            <section class="sobreposicao"></section>

            <section class="content">
                <h2 class="title">SUPERMAN</h2>
                <p class="descricao">
                    Super-herói · Aventura · Ação — Segue o super-herói titular enquanto ele reconcilia sua herança com sua educação humana. Ele é a personificação da verdade, da justiça e de um futuro melhor em um mundo que vê a bondade como algo antiquado.
                </p>
                <section class="buttons">
                    <?php
                        $listarFilmes = retornarFilmes();
                        while($filme = mysqli_fetch_assoc($listarFilmes)){
                            if ($filme['id'] == 11) {
                                echo "<a href='../view/detalhes-filmes.php?id={$filme['id']}'>";
                                echo "<button class='btn-info'>Mais informações</button>";
                                echo "</a>";
                                }
                        }
                    ?>
                </section>
            </section>
        </section>
        <section class="container">
            <h3>Filmes em alta</h3>
            <section class="flex-filmes">
                <?php
                        $listarFilmes = retornarFilmes();
                        $contador = 0;
                        while ($filme = mysqli_fetch_assoc($listarFilmes)) {
                            if ($contador >= 10) break;
                            echo "<a href='../view/detalhes-filmes.php?id={$filme['id']}' class='card'>";
                            echo "<img src='{$filme['imagens']}'>";
                            echo "</a>";
                            $contador++;
                        }
                    ?>
            </section>
        </section>
        <section class="container">
            <h3>Series em alta</h3>
            <section class="flex-filmes">
                <section class="flex-filmes">
                    <?php
                        $listarSeries = retornarSeries();
                        $contador = 0;
                        while ($serie = mysqli_fetch_assoc($listarSeries)) {
                            if ($contador >= 10) break;
                            echo "<a href='../view/detalhes-series.php?id={$serie['id']}' class='card'>";
                            echo "<img src='{$serie['imagem']}'>";
                            echo "</a href='../view/detalhes-series.php?id={$serie['id']}'>";
                            $contador++;
                        }
                    ?>
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