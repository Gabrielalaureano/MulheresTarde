<?php
  session_star();
  ob_star();

   require_once 'conexao.php';

   $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
   $codigoproduto = $dados["codigo"];

   if(!empty(dados["excluir"])){

    $sqlexcluir = "DELETE from carrinho where codigoproduto = $codigoproduto";
    $resulexcluir=$conn->prepare($sqlexcluir);
    $resulexcluir->execute();
    $_SESSION["quant"]-=1;
   }
