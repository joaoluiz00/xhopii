<?php

function conectarBD() {
    $conexao = mysqli_connect("127.0.0.1", "root", "", "xhopii");
    if (!$conexao) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conexao;
}

function inserirCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha) {
    $conexao = conectarBD();
    $consulta = "INSERT INTO cliente (cpf, nome, sobrenome, dataNascimento, telefone, email, senha) VALUES ('$cpf','$nome','$sobrenome','$dataNasc','$telefone','$email','$senha')";
    mysqli_query($conexao, $consulta);
    mysqli_close($conexao);
    header('Location: ../view/cadastroCliente.php');
    die();
}

function inserirFuncionarios($funccpf, $funcnome, $funcsobrenome, $funcdatanas, $functelefone, $funcemail, $funcsalario) {
    $conexao = conectarBD();
    $consulta = "INSERT INTO funcionarios (funccpf, funcnome, funcsobrenome, funcdatanas, functelefone, funcemail, funcsalario) VALUES ('$funccpf','$funcnome','$funcsobrenome','$funcdatanas','$functelefone','$funcemail','$funcsalario')";
    mysqli_query($conexao, $consulta);
    mysqli_close($conexao);
    header('Location: ../view/cadastroFuncionario.php');
    die();
}
function inserirProdutos($nome, $fabricante, $descricao, $quantidade, $valor, $imagem) {
    $conexao = conectarBD();

    $consulta = $conexao->prepare("INSERT INTO produtos (nome, fabricante, descricao, quantidade, valor, imagem) VALUES (?, ?, ?, ?, ?, ?)");
    $null = NULL;
    $consulta->bind_param("sssiib", $nome, $fabricante, $descricao, $quantidade, $valor, $null);
    $consulta->send_long_data(5, $imagem);

    if ($consulta->execute()) {
        echo "Produto cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar produto: " . $consulta->error;
    }

    $consulta->close();
    $conexao->close();

    header('Location: ../view/cadastroProduto.php');
    die();
}

function retornarClientes() {
    $conexao = conectarBD();
    $consulta = "SELECT * FROM cliente";
    $listaClientes = mysqli_query($conexao, $consulta);
    mysqli_close($conexao);
    return $listaClientes;
}

function retornarProdudos() {
    $conexao = conectarBD();
    $consulta = "SELECT * FROM produtos";
    $listaClientes = mysqli_query($conexao, $consulta);
    mysqli_close($conexao);
    return $listaClientes;
}

function retornarFuncionarios() {
    $conexao = conectarBD();
    $consulta = "SELECT * FROM funcionarios";
    $listaFuncionarios = mysqli_query($conexao, $consulta);
    mysqli_close($conexao);
    return $listaFuncionarios;
}

function redefinirSenha($email, $new_password) {
    $conexao = conectarBD();
    $email = mysqli_real_escape_string($conexao, $email);
    $new_password = mysqli_real_escape_string($conexao, $new_password);
    $consulta = "SELECT * FROM cliente WHERE email = '$email'";
    $resultado = mysqli_query($conexao, $consulta);
    if (mysqli_num_rows($resultado) > 0) {
        $update = "UPDATE cliente SET senha = '$new_password' WHERE email = '$email'";
        if (mysqli_query($conexao, $update)) {
            echo "Senha redefinida com sucesso.";
        } else {
            echo "Erro ao redefinir a senha: " . mysqli_error($conexao);
        }
    } else {
        echo "Email não encontrado.";
    }
    mysqli_close($conexao);
}

function loginClientes($email, $senha) {
    $conexao = conectarBD();
    $email = mysqli_real_escape_string($conexao, $email);
    $senha = mysqli_real_escape_string($conexao, $senha);
    $consulta = "SELECT * FROM cliente WHERE email = '$email' AND senha = '$senha'";
    $resultado = mysqli_query($conexao, $consulta);
    if (mysqli_num_rows($resultado) > 0) {
        // Login bem-sucedido
        header('Location: ../view/home.php');
    } else {
        // Login falhou
        header('Location: ../view/login.php?erro=1');
    }
    mysqli_close($conexao);
    die();
}
function retornarProdutoPorId($id) {
    // Substitua esses valores pelos dados corretos de conexão ao banco de dados
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "xhopii";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $query = "SELECT * FROM produtos WHERE id = $id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}

function retornarTodosProdutos() {
    // Substitua esses valores pelos dados corretos de conexão ao banco de dados
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "xhopii";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $query = "SELECT * FROM produtos";
    return $conn->query($query);
}

?>
