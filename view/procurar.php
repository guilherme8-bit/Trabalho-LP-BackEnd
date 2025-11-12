<?php
    require "../processamento/funcoesBD.php";
    $mensagem = "";
    $listarFilmes = null;


if (isset($_GET['procurar']) && !empty(trim($_GET['procurar']))) {
    $filtro = trim($_GET['procurar']);
    $listarFilmes = procurarFilmesESeries($filtro);

    
if (mysqli_num_rows($listarFilmes) == 0) {
        $mensagem = "Não encontrado";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procurar</title>
    <link rel="stylesheet" href="../estilizacao/procurar.css">
</head>
<body>
    <header class="navbar">
        <p class="logo">CINEPRIME</p>
        <nav class="nav-links">
            <a href="../view/home.php" class="icon"><img src="../img/house.png">Home</a>
            <a href="#" class="icon"><img src="../img/lupa.png">Procurar</a>
            <a href="#" class="icon"><img src="../img/mais.png">Minha lista</a>
            <a href="../view/filme.php" class="icon"><img src="../img/camera.png">Filmes</a>
            <a href="../view/serie.php" class="icon"><img src="../img/tv_show.png">Séries</a>
            <section class="perfil">
                <img src="../img/usuario.png" alt="Perfil" class="perfil-img">
                <section class="menu-perfil">
                    <a href="#">Meu Perfil</a>
                    <a href="../view/cadfilme.php">Cadastrar filmes</a>
                    <a href="../view/cadserie.php">Cadastrar séries</a>
                    <a href="../view/cadplano.php">Cadastrar planos</a>
                    <a href="../view/login.php">Sair</a>
                </section>
            </section>
        </nav>
    </header>
    <section>
        <form method="GET" action="">
            <label for="nome">
                <section class="titulo">
                    <img class="lupa" src="../img/lupa.png" alt="">
                    <h3>Procurar</h3>
                </section>  
            </label>
                <input type="procurar" id="procurar" name="procurar">  
        </form>
        <?php
        if ($mensagem != "") {
            echo "<p class='mensagem'>$mensagem</p>";
        } elseif (isset($listarFilmes) && mysqli_num_rows($listarFilmes) > 0) {
    
            while ($filme = mysqli_fetch_assoc($listarFilmes)) {
                echo "<section class='bloco-principal'>";
                echo "<h3>{$filme['nome']}</h3>";
                echo "<img src='{$filme['imagens']}' width='200'>";
                echo "</section>";
    }
} 

        
        ?>

    </section>
    <footer class="main-footer">
        <section class="footer-content">
            <section class="footer-section about">
                <h3>MOVIEFLIX</h3>
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
            &copy; Movieflix. Todos os direitos reservados.
        </section>
    </footer>
</body>
</html>
    
</body>
</html>