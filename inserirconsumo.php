<?php     
        $litro=$_POST['litro'];
        $combustivel=$_POST['combustivel'];
        $resultado = $_POST['total'];
             
        include_once("conexao.php"); //inclui o código do arquivo conexao.php
        ///EXECUTAR O Comando INSERT no BD
        $sql = mysqli_query($conexao,"insert into informacoes(litros,combustivel,co2)
        values ('$litro','$combustivel','$resultado')") 
        or die ("Não inserido".mysqli_error($conexao));
        echo "<h2> Cadastro inserido com sucesso</h2>";
        header("location:projeto.php");//comando para REDIRECIONAR a página
?>