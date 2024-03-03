<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = addslashes($_POST['nome']);
    $sobrenome = addslashes($_POST['sobrenome']);
    $idade = $_POST['idade'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    echo "<h2>Dados Recebidos:</h2>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Sobrenome:</strong> $sobrenome</p>";
    echo "<p><strong>Idade:</strong> $idade</p>";
    echo "<p><strong>Peso:</strong> $peso</p>";
    echo "<p><strong>Altura:</strong> $altura</p>"; 
} else {
    echo "<p>Nenhum dado recebido.</p>";
}
?>
