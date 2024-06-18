<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Xhopii | Redefinir Senha</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/redefinirsenha.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/logo.png"/>
</head>
<body>
    <header>
        <section class="logo">
            <img src="../img/logo.png" height="50px" alt="Xhopii Logo">
            <h1>Xhopii</h1>
            <h1 id="entre">Redefinir Senha</h1>
        </section>
        <section class="out-button">
            <a href="#">Precisa de ajuda?</a>
        </section>
    </header>
    <main>
        <form method="POST" action="../processamento/processamento.php">
            <a href="javascript:history.back()" style="display: inline-block; padding: 10px 20px; background-color: rgb(0, 0, 0); color: #fff; text-decoration: none; margin-right: 80%;">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.14648 1.14648C5.34131 0.951655 5.65867 0.951655 5.8535 1.14648L9.8535 5.14648C10.0483 5.34131 10.0483 5.65867 9.8535 5.8535C9.65867 6.04833 9.34131 6.04833 9.14648 5.8535L6.5 3.20703V10.5C6.5 10.7761 6.27614 11 6 11C5.72386 11 5.5 10.7761 5.5 10.5V3.20703L2.8535 5.8535C2.65867 6.04833 2.34131 6.04833 2.14648 5.8535C1.95165 5.65867 1.95165 5.34131 2.14648 5.14648L5.14648 1.14648Z" fill="white"/>
                </svg>
            </a>
            <h2>Redefinir Senha</h2>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="new_password" placeholder="Nova Senha" required>
            <input value="ENVIAR" type="submit" id="confirmButton">
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
