<?php
    require_once "../processamento/funcoesBD.php"
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filme</title>
    <link rel="stylesheet" href="../estilizacao/filme.css">
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
                    <a href="#">Meu Perfil</a>
                    <a href="../view/cadfilme.php">Cadastrar filmes</a>
                    <a href="../view/cadserie.php">Cadastrar séries</a>
                    <a href="../view/cadplano.php">Cadastrar planos</a>
                    <a href="../view/usuarios.php">Sair</a>
                </section>
            </section>
        </nav>
    </header>
    <h2>Filmes</h2>
            <section class="bloco-principal">
                <h3>Ação</h3>
                <section class="flex-filmes">
                    <?php
                        $listarFilmes = retornarFilmes('Ação');
                        while ($filme = mysqli_fetch_assoc($listarFilmes)) {
                            echo "<section class='card'>";
                            echo "<img src='{$filme['imagens']}'>";
                            echo "</section>";
                        }
                    ?>
                </section>
              
                <h3>Aventura</h3>
                <section class="flex-filmes">
                    <section class="card"><img src="../img/filmes/O_Rei_Leão_2019.jpg"></section>
                    <section class="card"><img src="../img/filmes/hobbit.jpg"></section>
                    <section class="card"><img src="../img/filmes/tintin.jpg"></section>
                    <section class="card"><img src="../img/filmes/pj.jpg"></section>
                    <section class="card"><img src="../img/filmes/Piratas do Caribe 5.jpg"></section>
                    <section class="card"><img src="../img/filmes/jumanji.webp"></section>
                    <section class="card"><img src="../img/filmes/dragao.jpg"></section>
                    <section class="card"><img src="../img/filmes/ps.jpeg"></section>
                    <section class="card"><img src="../img/filmes/Alice-In-Wonderland-Theatrical-Poster.jpg"></section>
                    <section class="card"><img src="../img/filmes/moana.jpg"></section>
                </section>
            </section>
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
            &copy; Cineprime. Todos os direitos reservados.
        </section>
    </footer>
            
</body>
</html>