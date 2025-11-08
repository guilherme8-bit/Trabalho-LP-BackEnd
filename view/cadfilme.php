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
        <p class="logo">MOVIEFLIX</p>
        <section class="nav-links">
            <a href="../index.php" class="entrar">Sair</a>
        </section>
    </header>
    <main class="login-container">
        <section class="login-box">
            <h3 class="titulo-filme">Cadastro de Filmes</h3>
            <form action="../processamento/processamento.php" method="POST" enctype="multipart/form-data">
                <label for="Nome">Nome</label>
                <input type="text" id="nome" name="inputNome">

                <label for="Descricao">Descrição</label>
                <input type="text" id="descricao" name="inputDesc">

                <label for="Genero">Gênero</label>
                <input type="text" id="genero" name="inputGen">
                
                <label for="Avaliacao">Avaliação</label>
                <input type="number" id="avaliacao" name="inputAva" min="0" max="10">

                <label for="senha">Ano</label>
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
                    <a href="#"><img src="../img/ex-twitter.png" alt="twitter"></a>
                </section>
            </section>
        </section>

        <section class="footer-bottom">
            &copy; <span id="current-year"></span> Movieflix. Todos os direitos reservados.
        </section>
    </footer>
</body>
</html>