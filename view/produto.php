<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Xhoppi | Cadastro de Produto</title>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/produto.css'>
    <link rel="shortcut icon" href="img/logo.png"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/logo.png" height="50px">
            <h1>Xhopii</h1>
        </div>
        <div class="out-button">
            <a href="login.html">Sair</a>
        </div>
    </header>
    <nav class="navbar">
        <ul>
            <li>Home</li>
            <li>Cadastro Cliente</li>
            <li>Cadastro Funcionário</li>
            <li>Cadastro Produto</li>
            <li>Ver Clientes</li>
            <li>Ver Funcionários</li>
            <li>Ver Produtos</li>
        </ul>
    </nav>
    <main>
        <form>
            <h2>Cadastrar Produto</h2>
            <input placeholder="Nome" type="text">
            <input placeholder="Fabricante" type="text">
            <input placeholder="Descrição" type="text">
            <input placeholder="Valor" type="number">
            <input placeholder="Quantidade" type="number">
            <section class="photo">
                <h3>Selecionar foto do produto:</h3>
                <section>
                    <label for="file-upload" id="button">Escolher arquivo</label>
                    <!-- <input type="file" id="file-upload"> -->
                    <label>Nenhum arquivo escolhido</label>
                </section>
            </section>
            <input value="CADASTRAR" type="submit" id="cadastar">
        </form>
    </main>
    <footer>
        <section>
            <nav>
                <h2>ATENDIMENTO AO CLIENTE</h2>
                <a href="#">Central de Ajuda</a>
                <a href="#">Como Comprar</a>
                <a href="#">Métodos de Pagamento</a>
                <a href="#">Garantia Xhoppi</a>
                <a href="#">Devolução e Reembolso</a>
                <a href="#">Fale Conosco</a>
                <a href="#">Ouvidoria</a>
            </nav>
            <nav>
                <h2>SOBRE A XHOPPI</h2>
                <a href="#">Sobre Nós</a>
                <a href="#">Políticas Xhopii</a>
                <a href="#">Política de Privacidade</a>
                <a href="#">Programas de Filiados da Xhopii</a>
                <a href="#">Seja um Entregador Xhoppi</a>
                <a href="#">Ofertas Relâmpago</a>
                <a href="#">Xhopii Blog</a>
                <a href="#">Impresa</a>
            </nav>
            <nav class="imagens">
                <h2>PAGAMENTO</h2>
                <section>
                    <img src="img/pix.png">
                    <img src="img/boleto.png">
                    <img src="img/americane.png">
                    <img src="img/vsa.png">
                    <img src="img/master.png">
                    <img src="img/hper.png">
                    <img src="img/elo.png">
                </section>
            </nav>
            <nav>
                <h2>SIGA-NOS</h2>
                <div>
                    <i class='bx bxl-instagram-alt'></i>
                    <span>Instagram</span>
                </div>
                <div>
                    <i class='bx bxl-twitter'></i>
                    <span>Twitter</span>
                </div>
                <div>
                    <i class='bx bxl-facebook-square'></i>
                    <span>Facebook</span>
                </div>
                <div>
                    <i class='bx bxl-youtube' ></i>
                    <span>Youtube</span>
                </div>
                <div>
                    <i class='bx bxl-linkedin-square' ></i>
                    <span>LinkedIn</span>
                </div>
            </nav>
            <nav class="qr-code">
                <h2>ATENDIMENTO AO CLIENTE</h2>
                <img src="img/qr-code.png" class="image-qr">
                <img src="img/play.png">
                <img src="img/appstore.png">
            </nav>
        </section>
        <div class="copyright">
            <hr>
            <div>&copy 2023 Xhoppi. Todos Direitos Acadêmicos Reservados</div>
        </div>
    </footer>
   
</body>
</html>