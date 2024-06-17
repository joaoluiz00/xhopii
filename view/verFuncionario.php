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

    <section class="conteudo-visualizar">
        <section class="conteudo-visualizar-box">
            <h1>Funcionários</h1>
            <!-- INSERIR AQUI O RESULTADO DA CONSULTA POR FUNCIONÁRIOS -->
            <?php
                $listaFuncionarios = retornarFuncionarios();
                while ($funcionario = mysqli_fetch_assoc($listaFuncionarios)){
                    echo "<section class=\"conteudo-bloco\">";
                    echo "<h2>" . $funcionario["funcnome"]. " " . $funcionario["funcsobrenome"] . "</h2>";
                    echo "<p>CPF:". $funcionario["funccpf"]."</p>";
                    echo "<p>Data de Nascimento:". $funcionario["funcdatanas"]."</p>";
                    echo "<p>Telefone:". $funcionario["functelefone"]."</p>";
                    echo "<p>Email:". $funcionario["funcemail"]."</p>";
                    echo "<p>Salário:". $funcionario["funcsalario"]."</p>";
                    echo "</section>";
                }
            ?>
        </section>
    </section>

    <footer class="rodape-login">
        <img src="../img/footer-login.png">
        <hr>
        <p>© 2024 Xhopii. Todos os direitos reservados</p>
    </footer>
</body>
</html>