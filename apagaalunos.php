<?php

$conn = new mysqli("localhost", "root", "", "escola");

$id = 1;

$sql = "DELETE FROM alunos WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Aluno apagado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();

?>