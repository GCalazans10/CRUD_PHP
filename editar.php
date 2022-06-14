<?php

include 'conexao.php';

$id=$_POST['idCurso'];
$curso = $_POST['nomeCurso'];
$valor = $_POST['valorCurso'];

$recebendo_cadastros =" UPDATE `cursos` SET `nomeCurso` = '$curso', `valorCurso` = '$valor' WHERE `cursos`.`idCurso` = '$id'";

$query_cadastros = mysqli_query($conexao, $recebendo_cadastros);

header('location: listagem.php');

?>