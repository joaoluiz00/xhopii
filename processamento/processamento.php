<?php

require_once "funcoesBD.php";

//Cadastro de Cliente
if(!empty($_POST['inputNome']) && !empty($_POST['inputSobrenome']) && 
   !empty($_POST['inputCPF']) && !empty($_POST['inputDataNasc']) && 
   !empty($_POST['inputTelefone']) && !empty($_POST['inputEmail']) &&
   !empty($_POST['inputSenha'])){

      $nome = $_POST['inputNome'];
      $sobrenome = $_POST['inputSobrenome'];
      $cpf = $_POST['inputCPF'];
      $dataNasc = $_POST['inputDataNasc'];
      $telefone = $_POST['inputTelefone'];
      $email = $_POST['inputEmail'];
      $senha = $_POST['inputSenha'];

      inserirCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha);
}
//Cadastro Funcionario
if(!empty($_POST['inputNomeFunc']) && !empty($_POST['inputSobrenomeFunc']) && 
   !empty($_POST['inputCPFFunc']) && !empty($_POST['inputDataNascFunc']) && 
   !empty($_POST['inputTelefoneFunc']) && !empty($_POST['inputEmailFunc']) &&
   !empty($_POST['inputSalarioFunc'])){

      $funcnome = $_POST['inputNomeFunc'];
      $funcsobrenome = $_POST['inputSobrenomeFunc'];
      $funccpf = $_POST['inputCPFFunc'];
      $funcdataNasc = $_POST['inputDataNascFunc'];
      $functelefone = $_POST['inputTelefoneFunc'];
      $funcemail = $_POST['inputEmailFunc'];
      $funcsalario = $_POST['inputSalarioFunc'];

      inserirFuncionario($funcnome, $funcsobrenome, $funccpf, $funcdataNasc, $functelefone, $funcemail, $funcsalario);
}



?>