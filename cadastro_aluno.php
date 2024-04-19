<?php
  //Inclusão do arquivo de conexão com o banco de dados
  include "database.php";


  //Declarar variáveis para armazenar as informações enviadas via formulário
  $nome_aluno= $_POST["nome_aluno"];
  $email_aluno= $_POST["email_aluno"];
  $telefone_aluno = $_POST["telefone_aluno"];


  //Construir uma string para cadastrar as informações no banco de dados
  $sql= "INSERT INTO sge_alunos (nome_aluno, email_aluno, telefone_aluno)
  VALUES ('$nome_aluno','$email_aluno', '$telefone_aluno')";


  //Função para cadastrar no banco de dados
  //Função mysqli_query necessita de dois parâmetros
  //1° conexão com o banco de dados
  //2° comando em sql
  if(mysqli_query($conexao,$sql)){
    //Função para redirecionar para página indicada
    header("Location:listar_alunos.php");
  }
  else{
    echo "falha ao cadastrar no banco de dados";
  }


