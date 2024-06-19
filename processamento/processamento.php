<?php

require_once "funcoesBD.php";

// Cadastro de Cliente
if (!empty($_POST['inputNome']) && !empty($_POST['inputSobrenome']) && 
    !empty($_POST['inputCPF']) && !empty($_POST['inputDataNasc']) && 
    !empty($_POST['inputTelefone']) && !empty($_POST['inputEmail']) && 
    !empty($_POST['inputSenha'])) {
    
    $nome = $_POST['inputNome'];
    $sobrenome = $_POST['inputSobrenome'];
    $cpf = $_POST['inputCPF'];
    $dataNasc = $_POST['inputDataNasc'];
    $telefone = $_POST['inputTelefone'];
    $email = $_POST['inputEmail'];
    $senha = $_POST['inputSenha'];
    
    inserirCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha);
}

// Cadastro de Funcionário
if (!empty($_POST['inputNomeFunc']) && !empty($_POST['inputSobrenomeFunc']) && 
    !empty($_POST['inputCPFFunc']) && !empty($_POST['inputDataNascFunc']) && 
    !empty($_POST['inputTelefoneFunc']) && !empty($_POST['inputEmailFunc']) && 
    !empty($_POST['inputSalarioFunc'])) {
    
    $funcnome = $_POST['inputNomeFunc'];
    $funcsobrenome = $_POST['inputSobrenomeFunc'];
    $funccpf = $_POST['inputCPFFunc'];
    $funcdatanas = $_POST['inputDataNascFunc'];
    $functelefone = $_POST['inputTelefoneFunc'];
    $funcemail = $_POST['inputEmailFunc'];
    $funcsalario = $_POST['inputSalarioFunc'];
    
    inserirFuncionarios($funccpf, $funcnome, $funcsobrenome, $funcdatanas, $functelefone, $funcemail, $funcsalario);
}

// Login de Clientes
if (!empty($_POST['inputEmailLog']) && !empty($_POST['inputSenhaLog'])) {
    $email = $_POST['inputEmailLog'];
    $senha = $_POST['inputSenhaLog'];
    loginClientes($email, $senha);
}

// Redefinição de Senha
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['new_password'])) {
    $email = $_POST['email'];
    $new_password = $_POST['new_password'];
    redefinirSenha($email, $new_password);
}

?>
