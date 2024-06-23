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

    <footer class="rodape-login">
        <img src="../img/footer-login.png">
        <hr>
        <p>© 2024 Xhopii. Todos os direitos reservados</p>
    </footer>
</body>
</html>