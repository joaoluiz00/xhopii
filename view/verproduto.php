<?php

    require_once "../processamento/funcoesBD.php";

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="icon" href="../img/logo.png" type="image/png">
    <title>Xhopii - Ver Produtos</title>
</head>
<body>

    <header>
        <section id="cabecalho-logo">
            <img src="../img/logo.png">
            <h1>Xhopii</h1>
        </section>
        <section id="cabecalho-logout">
            <a href="login.php">Sair</a>
        </section>
    </header>

    <nav class="menu-horizontal">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="cadastroCliente.php">Cadastro Cliente</a></li>
            <li><a href="cadastroFuncionario.php">Cadastro Funcionário</a></li>
            <li><a href="cadastroProduto.php">Cadastro Produto</a></li>
            <li><a href="verCliente.php">Ver Clientes</a></li>
            <li><a href="verFuncionario.php">Ver Funcionários</a></li>
            <li><a href="verProduto.php">Ver Produtos</a></li>
        </ul>
    </nav>

    <section class="produtos">
    <span class="title">
        <h2>Produtos</h2>
    </span>
    <div class="content">
        <?php
            $listaProdutos = retornarProdudos();
            while ($produtos = mysqli_fetch_assoc($listaProdutos)) {
                echo "<div>";
                if (!empty($produtos["imagem"])) {
                    $imagemBase64 = base64_encode($produtos["imagem"]);
                    echo '<img src="data:image/jpeg;base64,' . $imagemBase64 . '" alt="Imagem do Produto" />';
                } else {
                    echo '<img src="../img/produto_default.png" alt="Sem imagem" />';
                }
                echo '<span class="desc">' . $produtos["nome"] . '</span>';
                echo '<span class="fabricante"><strong>Fabricante:</strong> ' . $produtos["fabricante"] . '</span>';
                echo '<span class="desc"><strong>Descrição:</strong> ' . $produtos["descricao"] . '</span>';
                echo '<span class="price">R$ ' . $produtos["valor"] . '</span>';
                echo '<span class="storage">' . $produtos["quantidade"] . ' disponíveis</span>';
                echo "</div>";
            }
        ?>
    </div>
</section>

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