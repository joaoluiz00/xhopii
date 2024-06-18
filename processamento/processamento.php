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
      $funcdatanas = $_POST['inputDataNascFunc'];
      $functelefone = $_POST['inputTelefoneFunc'];
      $funcemail = $_POST['inputEmailFunc'];
      $funcsalario = $_POST['inputSalarioFunc'];

      inserirFuncionarios($funccpf, $funcnome, $funcsobrenome, $funcdatanas, $functelefone, $funcemail, $funcsalario);
}


if (!empty($_POST['inputEmailLog']) && !empty($_POST['inputSenhaLog'])) {
    $email = $_POST['inputEmailLog'];
    $senha = $_POST['inputSenhaLog'];
    loginClientes($email, $senha);
}

function loginClientes($email, $senha) {
    $conexao = conectarBD();
    $consulta = "SELECT * FROM cliente WHERE email = '$email' AND senha = '$senha'";
    $resultado = mysqli_query($conexao, $consulta);
    if (mysqli_num_rows($resultado) > 0) {
        // Login bem-sucedido
        header('Location: ../view/dashboardCliente.php');
    } else {
        // Login falhou
        header('Location: ../view/login.php?erro=1');
    }
    die();
}

function conectarBD(){
   $conexao = mysqli_connect("127.0.0.1", "root", "", "xhopii");
   if (mysqli_connect_errno()) {
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
       exit();
   }
   return $conexao;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $email = $_POST['email'];
   $new_password = $_POST['new_password'];

   // Conectar ao banco de dados
   $conexao = conectarBD();

   // Verificar se o email existe no banco de dados
   $consulta = "SELECT * FROM cliente WHERE email = '$email'";
   $resultado = mysqli_query($conexao, $consulta);

   if (mysqli_num_rows($resultado) > 0) {
       // Email existe, atualizar a senha
       $update = "UPDATE cliente SET senha = '$new_password' WHERE email = '$email'";
       if (mysqli_query($conexao, $update)) {
           echo "Senha redefinida com sucesso.";
       } else {
           echo "Erro ao redefinir a senha: " . mysqli_error($conexao);
       }
   } else {
       // Email não encontrado
       echo "Email não encontrado.";
   }

   // Fechar a conexão
   mysqli_close($conexao);
}




?>