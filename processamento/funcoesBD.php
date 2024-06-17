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

function inserirFuncionarios($funccpf, $funcnome, $funcsobrenome, $funcdatanas, $functelefone, $funcemail, $funcsalario){

    $conexao = conectarBD();
    $consulta = "INSERT INTO funcionarios (funccpf, funcnome, funcsobrenome, funcdatanas, functelefone, funcemail, funcsalario) VALUES ('$funccpf','$funcnome','$funcsobrenome','$funcdatanas','$functelefone','$funcemail','$funcsalario')";

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

function retornarFuncionarios(){

    $conexao = conectarBD();
    $consulta = "SELECT * FROM funcionarios";
    $listaFuncionarios = mysqli_query($conexao, $consulta);
    return($listaFuncionarios);

}

?>