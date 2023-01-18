<?php
    include_once 'conexao.php';

    try{

    $dadoscad = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    var_dump($dadoscad);

    if (!empty($dadoscad['btncad'])) {

        $vazio = false;

        $dadoscad = array_map('trim', $dadoscad);
        if (in_array("", $dadoscad)) {
            $vazio = true;
           
            echo "<script>
        alert('Preencher todos os campos!!!');
        parent.location = 'frmaluno.php';
        </script>";

        } else if(!filter_var($dadoscad['email'], FILTER_VALIDATE_EMAIL)) {
            $vazio = true;

            echo "<script>
            alert('Informe um e-mail válido!!');
            parent.location = 'frmaluno.php';
            </script>";
            
            
        }
    

if (!$vazio) {


    $senha = password_hash($dadoscad['senha'], PASSWORD_DEFAULT);

    $sql="insert into aluno(nome,telefone,sexo,cpf,rg,datanascimento,cep,numerocasa,complemento,foto,email,senha)
 values(:nome,:telefone,:sexo,:cpf,:rg,:datanascimento,:cep,:numerocasa,:complemento,:foto,:email,:senha)";

 $salvar= $conn->prepare($sqp);
 $salvar->bindparam('nome',$dadoscad['nome'], PDO::PARAM_STR);
 $salvar->bindparam('telefone',$dadoscad['telefone'], PDO::PARAM_STR);
 $salvar->bindparam('sexo',$dadoscad['sexo'], PDO::PARAM_STR);
 $salvar->bindparam('cpf',$dadoscad['cpf'], PDO::PARAM_STR);
 $salvar->bindparam('rg',$dadoscad['rg'], PDO::PARAM_STR);
 $salvar->bindparam('datanascimento',$dadoscad['dn'], PDO::PARAM_STR); 
 $salvar->bindparam('cep',$dadoscad['cep'], PDO::PARAM_STR); 
 $salvar->bindparam('numerocasa',$dadoscad['numerocasa'], PDO::PARAM_INT);
 $salvar->bindparam('complemento',$dadoscad['cpf'], PDO::PARAM_STR);   
 $salvar->bindparam('foto',$dadoscad['foto'], PDO::PARAM_STR);
 $salvar->bindparam('email',$dadoscad['email'], PDO::PARAM_STR);
 $salvar->bindparam('senha',$dadoscad['senha'], PDO::PARAM_STR);   
 $salvar->execute();
    if ($salvar->rowCount()) {
        
        echo "<script>
        alert('Usuário cadastrado com sucesso!!');
        parent.location = 'frmaluno.php';
        </script>";

        unset($dadoscad);
    } else {
        echo "<script>
        alert('Usuário não cadastrado!');
        parent.location = 'frmaluno.php';
        </script>";
        
    }

}

}

}
catch(PDOException $erro){
    echo $erro;

}

?>