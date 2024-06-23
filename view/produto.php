<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="icon" href="../img/logo.png" type="image/png">
    <title>Xhopii - Detalhes
    </title>
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
<?php
require_once "../processamento/funcoesBD.php";
require_once "../processamento/processamento.php";

$idProduto = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$produto = retornarProdutoPorId($idProduto);
$listaProdutos = retornarTodosProdutos();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Ver Produto</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 5px;
            padding: 20px;
        }
        .product-details {
            flex: 1;
            padding-right: 20px;
        }
        .product-details h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }
        .product-details .desc {
            color: #666;
            margin-bottom: 10px;
        }
        .product-details .fabricante {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .product-details .price {
            font-size: 20px;
            color: #007bff;
            margin-bottom: 10px;
        }
        .product-details .storage {
            color: #666;
            margin-bottom: 10px;
        }
        .product-details .btn-comprar {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-top: 10px;
            display: block;
            text-align: center;
        }
        .product-details .btn-comprar:hover {
            background-color: #0056b3;
        }
        .product-image {
            flex: 1;
            text-align: center;
        }
        .product-image img {
            max-width:300px;
            height: 300px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .other-products div {
            display: inline-block;
            margin: 10px;
            text-align: center;
        }
        .other-products {
            margin: 20px;
        }
        .other-products img {
            width: 100px;
            height: 100px;
        }
        .other-products span {
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="product-details">
            <?php if ($produto): ?>
                <h2><?php echo htmlspecialchars($produto["nome"]); ?></h2>
                <?php if (!empty($produto["imagem"])): ?>
                    <div class="product-image">
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($produto["imagem"]); ?>" alt="Imagem do Produto" />
                    </div>
                <?php else: ?>
                    <div class="product-image">
                        <img src="../img/produto_default.png" alt="Sem imagem" />
                    </div>
                <?php endif; ?>
                <div class="desc"><?php echo htmlspecialchars($produto["descricao"]); ?></div>
                <div class="fabricante"><strong>Fabricante:</strong> <?php echo htmlspecialchars($produto["fabricante"]); ?></div>
                <div class="price">Preço: R$ <?php echo number_format($produto["valor"], 2, ',', '.'); ?></div>
                <div class="storage">Quantidade disponível: <?php echo $produto["quantidade"]; ?></div>
                <a href="checkout.php?id=<?php echo $produto["id"]; ?>" class="btn-comprar">Comprar</a>
            <?php else: ?>
                <p>Produto não encontrado.</p>
            <?php endif; ?>
        </div>
        <div class="other-products">
            <h3>Outros Produtos</h3>
            <?php while ($produtos = mysqli_fetch_assoc($listaProdutos)): ?>
                <?php if ($produtos["id"] != $idProduto): ?>
                    <div>
                        <?php if (!empty($produtos["imagem"])): ?>
                            <img src="data:image/jpeg;base64,<?php echo base64_encode($produtos["imagem"]); ?>" alt="Imagem do Produto" />
                        <?php else: ?>
                            <img src="../img/produto_default.png" alt="Sem imagem" />
                        <?php endif; ?>
                        <span class="desc"><?php echo htmlspecialchars($produtos["nome"]); ?></span>
                        <span class="price">R$ <?php echo number_format($produtos["valor"], 2, ',', '.'); ?></span>
                        <a href="produto.php?id=<?php echo $produtos["id"]; ?>" style="text-decoration: none;">Ver Produto</a>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
                        </div>
                        </div>
</body>
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

</html>
