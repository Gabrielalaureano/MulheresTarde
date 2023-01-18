<?php
session_star();
ob_star();


$id = filter_input(INPUT_GET,"matricula", FILTER_SANITIZE_NUMBER_INT);

if (empty($id)) {
    $_SESSION['msg'] = "Erro: usuario não encontrado!";
    header("location: relalunos.php");
    exit();
}
?>
