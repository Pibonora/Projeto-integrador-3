<?php
//receber e guardar os valores do formulário em variáveis
$nome=$_POST['txtnome'];
$email=$_POST['txtemail'];
$mensagem=$_POST['txtmensagem'];




include_once("conexao.php"); //inclui o código do arquivo conexao.php
///EXECUTAR O Comando INSERT no BD
$sql = mysqli_query($conexao,"insert into contato(nome,email,mensagem)
 values ('$nome','$email','$mensagem')") 
 or die ("Não inserido".mysqli_error($conexao));
 echo "<h2> Cadastro inserido com sucesso</h2>";
 header("location:index.php");//comando para REDIRECIONAR a página

?>