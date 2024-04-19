<?php include "header.php";?>


<form action="cadastro_aluno.php" method="post">
  <label for="nome_aluno">Nome: </label>
  <input type="text" name="nome_aluno" id=nome_aluno placeholder= "Digite o nome completo">

  <label for="email_aluno">E-mail: </label>
  <input type="text" name="email_aluno" id=email_aluno placeholder= "Digite o E-mail">

  <label for="telefone_aluno">Telefone: </label>
  <input type="text" name="telefone_aluno" id=telefone_aluno placeholder= "Digite o telefone">
  <input type= "submit" value="Cadastrar aluno">
</form>
  

<?php include "footer.php";?>