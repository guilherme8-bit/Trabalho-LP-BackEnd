<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilizacao/style.css">
    <title>MOVIEFLIX</title>
</head>
<body>
    <section class="background-container">
    <header class="navbar">
        <p class="logo">MOVIEFLIX</p>
        <section class="nav-links">
            <a href="view/login.php" class="entrar">Entrar</a>
            <a href="" class="assinar">Assine Agora</a>
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
                    <section class="plano">
                        <h3>Básico com Anúncios</h3>
                        <ul>
                            <li>- <strong>2 dispositivos</strong> ao mesmo tempo</li>
                            <li>- Resolução <strong>Full HD</strong></li>
                        </ul>
                        <p class="preco">12x <span>R$22,90</span>/mês</p>
                        <p class="preco-total">Preço total anual R$274,80</p>
                        <button class="btn-plano">ESCOLHA SEU PLANO</button>
                    </section>

                    <section class="plano">
                        <h3>Standard</h3>
                        <ul>
                            <li>- <strong>2 dispositivos</strong> ao mesmo tempo</li>
                            <li>- Resolução <strong>Full HD</strong></li>
                            <li>- <strong>30 downloads</strong> para curtir off-line</li>
                        </ul>
                        <p class="preco">12x <span>R$34,90</span>/mês</p>
                        <p class="preco-total">Preço total anual R$418,80</p>
                        <button class="btn-plano">ESCOLHA SEU PLANO</button>
                    </section>

                    <section class="plano">
                        <h3>Platinum</h3>
                        <ul>
                            <li>-<strong>4 dispositivos</strong> ao mesmo tempo</li>
                            <li>- Resolução <strong>Full HD e 4K Ultra HD</strong></li>
                            <li>- Áudio <strong>Dolby Atmos</strong></li>
                            <li>- <strong>100 downloads</strong> para curtir off-line</li>
                        </ul>
                        <p class="preco">12x <span>R$44,90</span>/mês</p>
                        <p class="preco-total">Preço total anual R$538,80</p>
                        <button class="btn-plano">ESCOLHA SEU PLANO</button>
                    </section>
                </section>
            </section>

            <section class="destaque">
                <h2>Filmes em alta</h2>
                <section class="grade">
                    <section class="card">
                        <img src="img/filmes/filme1.webp" alt="Premonição 6">
                        <p>Premonição 6</p>
                    </section>
                    <section class="card">
                        <img src="img/filmes/filme2.jpg" alt="Superman">
                        <p>Superman</p>
                    </section>
                    <section class="card">
                        <img src="img/filmes/filme3.webp" alt="Quarteto Fantastico">
                        <p>Quarteto Fantastico</p>
                    </section>
                </section>
            </section>
            <section class="destaque">
                <h2>Séries em alta</h2>
                <section class="grade">
                    <section class="card">
                        <img src="img/series/breaking bad.jpg" alt="Breaking bad">
                        <p>Breaking bad</p>
                    </section>
                    <section class="card">
                        <img src="img/series/got.jpg" alt="GOT">
                        <p>Game of Thornes</p>
                    </section>
                    <section class="card">
                        <img src="img/series/it.avif" alt="Quarteto Fantastico">
                        <p>Quarteto Fantastico</p>
                    </section>
                </section>
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
                    <a href="#"><img src="img/instagram.png" alt="instagrma"></a>
                    <a href="#"><img src="img/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="img/ex-twitter.png" alt="twitter"></a>
                </section>
            </section>
        </section>

        <section class="footer-bottom">
            &copy; <span id="current-year"></span> Movieflix. Todos os direitos reservados.
        </section>
    </footer>
</body>
</html>