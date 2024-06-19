<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Xhopii | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/login.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/logo.png"/>
</head>
<body>
    <header>
        <section class="logo">
            <img src="../img/logo.png" height="50px" alt="Xhopii Logo">
            <h1>Xhopii</h1>
            <h1 id="entre">Entre</h1>
        </section>
        <section class="out-button">
            <a href="#">Precisa de ajuda?</a>
        </section>
    </header>
    <main>
        <form id="form-log" method="POST" action="../processamento/processamento.php">
            <h2>Login</h2>
            <input type="text" name="inputEmailLog" placeholder="Email" required>
            <input type="password" name="inputSenhaLog" placeholder="Senha" required>
            <input value="ENTRE" type="submit" id="confirmButton">
            <section class="separation1">
                <a href="redefinirsenha.php">Esqueci minha senha</a>
                <a href="#">Fazer login com SMS</a>
            </section>
            <section class="separation2">
                <span class="line"></span>
                <span>OU</span>
            </section>
            <ul class="separation3">
                <li>
                    <img src="../img/faceIcon.png" height="40px" alt="Facebook">
                    Facebook
                </li>
                <li>
                    <img src="../img/googleIcon.png" height="40px" alt="Google">
                    Google
                </li>
                <li>
                    <img src="../img/appleIcon.png" height="40px" alt="Apple">
                    Apple
                </li>
            </ul>
            <span class="separation4">Novo na Xhopii? <a href="cadastroCliente.php">Cadastrar</a></span>
        </form>
    </main>
    <footer>
        <section>
            <nav>
                <h2>ATENDIMENTO AO CLIENTE</h2>
                <a href="#">Central de Ajuda</a>
                <a href="#">Como Comprar</a>
                <a href="#">Métodos de Pagamento</a>
                <a href="#">Garantia Xhopii</a>
                <a href="#">Devolução e Reembolso</a>
                <a href="#">Fale Conosco</a>
                <a href="#">Ouvidoria</a>
            </nav>
            <nav>
                <h2>SOBRE A XHOPII</h2>
                <a href="#">Sobre Nós</a>
                <a href="#">Políticas Xhopii</a>
                <a href="#">Política de Privacidade</a>
                <a href="#">Programas de Filiados da Xhopii</a>
                <a href="#">Seja um Entregador Xhopii</a>
                <a href="#">Ofertas Relâmpago</a>
                <a href="#">Xhopii Blog</a>
                <a href="#">Imprensa</a>
            </nav>
            <nav class="imagens">
                <h2>PAGAMENTO</h2>
                <section>
                    <img src="../img/pix.png" alt="Pix">
                    <img src="../img/boleto.png" alt="Boleto">
                    <img src="../img/americane.png" alt="American Express">
                    <img src="../img/vsa.png" alt="Visa">
                    <img src="../img/master.png" alt="MasterCard">
                    <img src="../img/hper.png" alt="Hiper">
                    <img src="../img/elo.png" alt="Elo">
                </section>
            </nav>
            <nav>
                <h2>SIGA-NOS</h2>
                <div>
                    <i class="bx bxl-instagram-alt"></i>
                    <span>Instagram</span>
                </div>
                <div>
                    <i class="bx bxl-twitter"></i>
                    <span>Twitter</span>
                </div>
                <div>
                    <i class="bx bxl-facebook-square"></i>
                    <span>Facebook</span>
                </div>
                <div>
                    <i class="bx bxl-youtube"></i>
                    <span>YouTube</span>
                </div>
                <div>
                    <i class="bx bxl-linkedin-square"></i>
                    <span>LinkedIn</span>
                </div>
            </nav>
            <nav class="qr-code">
                <h2>ATENDIMENTO AO CLIENTE</h2>
                <img src="../img/qr-code.png" class="image-qr" alt="QR Code">
                <img src="../img/play.png" alt="Google Play">
                <img src="../img/appstore.png" alt="App Store">
            </nav>
        </section>
        <div class="copyright">
            <hr>
            <div>&copy; 2023 Xhopii. Todos os Direitos Reservados</div>
        </div>
    </footer>
</body>
</html>
