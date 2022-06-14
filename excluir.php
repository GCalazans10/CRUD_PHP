<?php

include 'conexao.php';

$id = $_POST['idCurso'];
                                 
$recebendo_cadastros = "DELETE FROM
cursos
WHERE idCurso = '$id' ";

$query_cadastros = mysqli_query($conexao, $recebendo_cadastros);

header('location: listagem.php');

?>