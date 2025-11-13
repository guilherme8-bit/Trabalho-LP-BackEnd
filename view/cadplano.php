<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilizacao/cadplano.css">
    <title>cadplano</title>
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
                    <a href="../view/usuarios.php">Sair</a>
                </section>
            </section>
        </nav>
    </header>
    <main class="login-container">
        <section class="login-box">
            <h3 class="titulo-filme">Cadastro de Planos</h3>
            <form action="../processamento/processamento.php" method="POST">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="inputNome">

                <label for="cpf">Descrição</label>
                <input type="text" id="descricao" name="inputDesc">

                <label for="email">Valor Mensal</label>
                <input type="number" id="email" name="inputVM" min="0" step="0.01">
                
                <label for="senha">Valor Anual</label>
                <input type="number" id="senha" name="inputVA" min="0">

                <label for="senha">Qualidade Máxima</label>
                <input type="number" id="senha" name="inputQM" min="0">

                <label for="senha">Telas Simultaneas</label>
                <input type="number" id="senha" name="inputTS">

                <section class="opcoes">
                <label>
                <input type="checkbox" name="inputAtivo" value="1">Está ativo</label>

                <label>
                <input type="checkbox" name="inputAnuncio" value="1">Tem anúncios</label>
                </section>
                

                <section class="buttons">
                    <button type="submit" class="btn">Cadastrar</button>
                </section>
            </form>
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
            &copy; Cineprime. Todos os direitos reservados.
        </section>
    </footer>
</body>
</html>