<?php
  

   $servidor = "localhost";
   $usuario = "root";
   $senha = '';
   $nomedb = "php";

   try{
       $banco = new PDO("mysql:host={$servidor};dbname=php",'root','');
   }catch(PDOException $e){
       echo 'Banco de dados não encontrado.';
   }

    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];
    $valor = $_POST['valor'];

   $querry = "INSERT INTO produtos(descricao,quantidade,valor) values ('$descricao','$quantidade','$valor');";

   if ($banco->query($querry) === TRUE){
    echo "Novo registro criado";
   }else{
    echo "Erro: ".$sql."<br>".$banco->error;
   }

   $banco->close();