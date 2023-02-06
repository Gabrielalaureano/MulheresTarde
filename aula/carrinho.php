<?php   

session_star();
ob_star();

$_SESSION["quant"]+=1;


echo $_SESSION["quant"];

$cesta = filter_input_array(INPUT_POST, FILTER_DEFAULT);
var_dump($cesta);



$codigoproduto =$cesta["codigoproduto"];
$quantcompra


$sql = "SELECT codigoproduto,nome,valor,quamtidade,foto
FROM produto
WHERE codigoproduto = $codigoproduto LIMIT 1";


$resultado= $conn->prepare($sql);
$resultado->execute();


if(($resultado)and($resultado->RowCount()!=0)){
     $linha=$resultado->fetch(PDO::FETCH_ASSOC);
     extract($linha);

     if($quantidade<$quantcompra){
        echo "Sem estoque!";
        header("location:index.php")
     }
     else{
        $sql2 = "INSERT into carrinho(codigoproduto,nome,quantcompra,valor,foto)
        values(:codigoproduto,:nome,:quantcompra,:valor,:foto)";
        $salvar2= $conn->prepare(sql2);
        $salvar2->bindParam('codigoproduto', $codigoproduto, PDO::PARAM_INT);
        $salvar2->bindParam('nome', $nome, PDO::PARAM_STR);
        $salvar2->bindParam('quantcompra', $quantcompra, PDO::PARAM_INT);
        $salvar2->bindParam('valor', $valor, PDO::PARAM_STR);
        $salvar2->bindParam('foto', $foto, PDO::PARAM_STR);
        $salvar2->execute();





     }

}








?>