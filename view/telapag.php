<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilizacao/telapag.css">
    
    <title>Tela de pagamento</title>
</head>
<body>
    <script src="../script/funcoes.js"></script>
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
            <h3 class="titulo-filme">Inserir dados do Cartão</h3>
            <section class="cartoes">
                    <a href="#"><img src="../img/visa_349221.png" alt="instagrma"></a>
                    <a href="#"><img src="../img/Elo_logo.png" alt="facebook"></a>
                    <a href="#"><img src="../img/american-express-logo-.webp" alt="twitter" class="h"></a>
                    <a href="#"><img src="../img/mastercard.png" alt="twitter"></a>
                </section>
            <form action="../processamento/processamento.php"  method="POST">
                <label for="nome">Nome Completo</label>
                <input type="text" id="nome" name="inputNomeT">

                <label for="cpf">CPF</label>
                <input type="text" id="descricao" name="inputCPFT">

                <label for="nc">Numero do cartão</label>
                <input type="text" id="email" name="inputNC" min="0">
                
                <label for="dv">Data de validade</label>
                <input type="text" id="senha" name="inputDV" placeholder="MM/YYYY">

                <label for="scs">Código de Segurança</label>
                <input type="text" id="senha" name="inputCS" placeholder="CVV">

                <h4>Escolha seu plano:</h4>

             <section class="planos">
                <input type="hidden" name="plano" id="nome_plano">
                <button type="button" onclick="mudarPlano('com_anuncios') ;mudarParcelas('com_anuncios')"  class="btn-plano">Básico sem anúncios</button>
                <button type="button" onclick="mudarPlano('standard'); mudarParcelas('standard')"  class="btn-plano">Standard</button>
                <button type="button" onclick="mudarPlano('platinum'); mudarParcelas('platinum')"  class="btn-plano">Platinum</button>
            </section>


               <select name="parc" id="parcelas" class="select-parcelas">
                <option value="1x de R$ 274,80">1x de R$ 274,80</option>
                <option value="3x de R$ 91,60">3x de R$ 91,60</option>
                <option value="6x de R$ 45,80">6x de R$ 45,80</option>
                <option value="12x de R$ 22,90">12x de R$ 22,90</option>
            </select>



                <section class="buttons">
                    <button type="submit" class="btn">Salvar</button>
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