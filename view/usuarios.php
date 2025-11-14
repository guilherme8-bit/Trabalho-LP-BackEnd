<?php
    require_once "../processamento/funcoesBD.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilizacao/usuarios.css">
    <title>usuarios</title>
</head>
<body>
    <header class="navbar">
        <p class="logo">CINEPRIME</p>
        <section class="nav-links">
            <a href="../view/login.php">Sair</a>
        </section>
    </header>

    <main class="container">
        <h1>Quem está Assitindo?</h1>
        <section class="perfil-container">
        <?php
            $listarUsuarios = retornarUsuarios();
            $cores = ["#ff4757", "#1e90ff", "#2ed573", "#3742fa"];
            while($usuario = mysqli_fetch_assoc($listarUsuarios)){
                $cor = $cores[$usuario['id'] % count($cores)];
                echo "<a href='../view/home.php?id={$usuario['id']}' class='perfil'>";
                echo "<section class='perfil-icon' style='background-color: {$cor};'>";
                echo "<img src='../img/default.png' alt='{$usuario['Nome']}'>";
                echo "</section>";
                echo "<p>{$usuario['Nome']}</p>";
                echo "</a>";
            }
        ?>

        <a href="cadstro.php" class="add-conta">
                <section class="add-icon">
                    <img src="../img/mais.png" alt="Adicionar perfil">
                </section>
                <p >Adicionar perfil</p>
            </a>
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