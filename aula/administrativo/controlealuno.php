<?php
     include_once 'conexão.php';
     $dadoscad = filter_input_array(INPUT_POST,FILTER)

if(!empty($dadoscad{'btncad'})) {

 $sql="insert into aluno(nome,sexo,datadenascimento,telefone,cpf,rg,cep,numerocasa,complemento,foto,email,senha)
 values(:cep,:nome,:sexo,:datadenascimento,:telefone,:cpf,:rg,:numerocasa,:complemento,:foto,:email,:senha)";

 $salvar= $conn->prepare($sqp);
 $salvar->bindparam('cep',$dadoscad['cep'], PDO::PARAM_STR);
 $salvar->bindparam('nome',$dadoscad['nome'], PDO::PARAM_STR);
 $salvar->bindparam('sexo',$dadoscad['sexo'], PDO::PARAM_STR);
 $salvar->bindparam('datadenascimento',$dadoscad['dn'], PDO::PARAM_STR);
 $salvar->bindparam('telefone',$dadoscad['telefone'], PDO::PARAM_STR);
 $salvar->bindparam('cpf',$dadoscad['cpf'], PDO::PARAM_STR); 
 $salvar->bindparam('rg',$dadoscad['rg'], PDO::PARAM_STR); 
 $salvar->bindparam('numerocasa',$dadoscad['numerocasa'], PDO::PARAM_STR);
 $salvar->bindparam('complemento',$dadoscad['cpf'], PDO::PARAM_STR);   
 $salvar->bindparam('foto',$dadoscad['foto'], PDO::PARAM_STR);
 $salvar->bindparam('email',$dadoscad['email'], PDO::PARAM_STR);
 $salvar->bindparam('senha',$dadoscad['senha'], PDO::PARAM_STR);   
 $salvar->execute();
 
 if ($salvar->rowcount()){
   echo "Usuario cadastrado com sucesso!";
   unset($dadoscad);
 } else {
   echo "Este usuario não foi cadastrado </p>";
 }


}

?>