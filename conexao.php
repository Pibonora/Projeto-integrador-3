<?php
    $servidor="localhost";
    $usuario="root";
    $senha = "";
    $banco="pi3";

    //comando para conectar ao servidor mysql
    $conexao = mysqli_connect($servidor,$usuario,$senha)
     or die ("Não foi possível conectar ao servidor");

     //comando para conbectar ao BANCO DE DADOS
     mysqli_select_db($conexao,$banco)
     or die ("Banco de dados não encontrado");

  //   echo"Conexao OK";
?>