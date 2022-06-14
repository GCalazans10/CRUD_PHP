<?php

include 'conexao.php';

$curso = $_POST['nomeCurso'];
$valor = $_POST['valorCurso'];
                        
$recebendo_cadastros = "INSERT INTO
`cursos`
VALUES ('', '$curso', '$valor')";

$query_cadastros = mysqli_query($conexao, $recebendo_cadastros);

header('location: listagem.php');

?>