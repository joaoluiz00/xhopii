<?php

function conectarBD(){

    $conexao = mysqli_connect("127.0.0.1","root","","xhopii");
    return($conexao);
}

function inserirCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha){

    $conexao = conectarBD();
    $consulta = "INSERT INTO cliente (cpf, nome, sobrenome, dataNascimento, telefone, email, senha) VALUES ('$cpf','$nome','$sobrenome','$dataNasc','$telefone','$email','$senha')";

    mysqli_query($conexao, $consulta);
    
    header('Location:../view/cadastroCliente.php');
    die();
}

function inserirFuncionario($funcnome, $funcsobrenome, $funccpf, $funcdataNasc, $functelefone, $funcemail, $funcsalario){

    $conexao = conectarBD();
    $consulta = "INSERT INTO funcionario (nome, sobrenome, cpf, dataNasc, telefone, email, salario) VALUES ('$funcnome','$funcsobrenome','$funccpf','$funcdataNasc','$functelefone','$funcemail','$funcsalario')";

    mysqli_query($conexao, $consulta);
    
    header('Location:../view/cadastroFuncionario.php');
    die();
}

function retornarClientes(){

    $conexao = conectarBD();
    $consulta = "SELECT * FROM cliente";
    $listaClientes = mysqli_query($conexao, $consulta);
    return($listaClientes);

}

function retornarFuncionario(){

    $conexao = conectarBD();
    $consulta = "SELECT * FROM funcionario";
    $listaFuncionario = mysqli_query($conexao, $consulta);
    return($listaFuncionario);

}

?>