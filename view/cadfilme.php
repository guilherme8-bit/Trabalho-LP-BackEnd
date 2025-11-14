<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilizacao/cadfilme.css">
    <title>cadfilme</title>
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
                    <a href="../view/cadserie.php">Cadastrar séries</a>
                    <a href="../view/cadplano.php">Cadastrar planos</a>
                    <a href="../view/usuarios.php">Sair</a>
                </section>
            </section>
        </nav>
    </header>
    <main class="login-container">
        <section class="login-box">
            <h3 class="titulo-filme">Cadastro de Filmes</h3>
            <form action="../processamento/processamento.php" method="POST" enctype="multipart/form-data">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="inputNome">

                <label for="descricao">Descrição</label>
                <textarea id="descricao" name="inputDesc"></textarea>

                <label for="genero">Gênero</label>
                <input type="text" id="genero" name="inputGen">
                
                <label for="avaliacao">Avaliação</label>
                <input type="number" id="avaliacao" name="inputAva" min="0" max="10">

                <label for="ano">Ano</label>
                <input type="number" id="ano" name="inputAno" min="1900" max="2025">
                <section>
                    <p class="cor-titulo">Selecionar imagem do filme:</p>
                </section>
                <label for="fileInput" class="label-botao">
                    Escolher arquivo
                    <input type="file" name="arquivo" id="fileInput" class="botao-arquivo">
                </label>
                <section class="buttons">
                    <button type="submit" name="upload" class="btn">Cadastrar</button>
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
            &copy; Ciniprime. Todos os direitos reservados.
        </section>
    </footer>
</body>
</html>