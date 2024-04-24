<?php
  

   $servidor = "localhost";
   $usuario = "root";
   $senha = '';
   $nomedb = "php";

   try{
       $banco = new PDO("mysql:host={$servidor};dbname=php",'root','');
       $banco -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        if ($_SERVER["REQUEST_METHOD"] == "POST"){

            $descricao = $_POST['descricao'];
            $unidade = $_POST['unidade'];
            $quantidade = $_POST['quantidade'];
            $valor = $_POST['valor'];

            $querry = "INSERT INTO produtos(descricao,unidade,quantidade,valor) values (:descricao, :unidade,:quantidade, :valor);";
            $stmt = $banco->prepare($querry);

            $stmt -> bindParam(':descricao', $descricao);
            $stmt -> bindParam(':unidade', $unidade);
            $stmt -> bindParam(':quantidade', $quantidade);
            $stmt -> bindParam(':valor', $valor);

            if($stmt->execute()){
                echo "Registro criado!";
            }else{
                echo "Erro ao inserir registro";
            }
        } else{
            echo "Metodo incorreto";
        }
   }catch(PDOException $e){
       echo 'Erro' .$e->getMessage();
   }