<?php
    require_once "processamento/funcoesBD.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilizacao/style.css">
    <title>CINEPRIME</title>
</head>
<body>
    <section class="background-container">
    <header class="navbar">
        <p class="logo">CINEPRIME</p>
        <section class="nav-links">
            <a href="view/login.php" class="entrar">Entrar</a>
            <a href="view/cadstro.php" class="assinar">Assine Agora</a>
        </section>
    </header>
        <main>
            <section class="main-content">
                <h1>Filmes, séries e muitos mais</h1>
                <h2>Escolha um plano a partir de <span>R$ 20,90</span>. Cancele quando quiser</h2>
                <p>Digite seu e-mail para começar</p>
                <section class="semi-login">
                    <p>O próximo grande momento está te esperando.</p>
                    <a href="view/login.php">Entre agora &gt;</a>
                </section>
            </section>
    </section>
            <section class="planos">
                <h2>Escolha o plano ideal para você</h2>
                <p class="economia">Economize até 36% com o plano anual parcelado</p>

                <section class="planos-container">
                    <?php
                        $planos = listarPlanosSite();

                        while ($p = mysqli_fetch_assoc($planos)) {

                            echo "<section class='plano'>";

                            echo "<h3>{$p['Nome']}</h3>";

                            echo "<ul>";
                            echo "<li>- <strong>{$p['Telas_simultaneas']} dispositivos</strong> ao mesmo tempo</li>";
                            echo "<li>- Resolução <strong>{$p['Qualidade_maxima']}</strong></li>";
                            echo "</ul>";

                            echo "<p class='preco'>12x <span>R$ {$p['Valor_mensal']}</span>/mês</p>";
                            echo "<p class='preco-total'>Preço total anual R$ {$p['Valor_anual']}</p>";

                            echo "<a href='view/cadstro.php?id_plano={$p['id']}' class='btn-plano'>ESCOLHA SEU PLANO</a>";

                            echo "</section>";
                        }
                    ?>  
                </section>
            </section>

            <section class="destaque">
                <h2>Filmes em alta</h2>
                <section class="grade">
                    <?php
                        $listarFilmes = retornarFilmes();
                        $contador = 0;
                        while ($filme = mysqli_fetch_assoc($listarFilmes)) {
                            if ($contador >= 5) break;
                            echo "<section class='card'>";
                            echo "<img src='arquivos/{$filme['imagens']}'>";
                            echo "</section>";
                            $contador++;
                        }
                    ?>
                </section>
            </section>
            <section class="destaque">
                <h2>Séries em alta</h2>
                <section class="grade">
                    <?php
                        $listarSeries = retornarSeries();
                        $contador = 0;
                        while ($serie = mysqli_fetch_assoc($listarSeries)) {
                            if ($contador >= 5) break;
                            echo "<section class='card'>";
                            echo "<img src='arquivos/{$serie['imagem']}'>";
                            echo "</section>";
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
                    <a href="#"><img src="img/instagram.png" alt="instagrma"></a>
                    <a href="#"><img src="img/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="img/ex-twitter.png" alt="twitter" class="x"></a>
                </section>
            </section>
        </section>

        <section class="footer-bottom">
            &copy; Cineprime. Todos os direitos reservados.
        </section>
    </footer>
</body>
</html>