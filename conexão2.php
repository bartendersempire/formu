<?php
// Defina suas credenciais de banco de dados
$servidor = "localhost";  // Ou o IP do seu servidor
$usuario = "root";        // Seu usuário
$senha = "";              // Sua senha
$banco ="usuarios";     // O nome do banco de dados

// Cria a conexão
$conn = new mysqli($servidor, $usuario, $senha, $banco);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}


if (isset($_GET['nome']) && isset($_GET['numero'])) {
    $nome = $_GET['nome'];
    $numero = $_GET['numero'];
    echo "Nome: " . htmlspecialchars($nome) . "<br>";
    echo "Número: " . htmlspecialchars($numero);
} else {
    echo "Dados não enviados!";
}

// Escreve a query SQL para inserir os dados
$sql = "INSERT INTO usuario (nome, numero) VALUES ('$nome', '$numero')";

// Executa a query e verifica se foi bem-sucedida
if ($conn->query($sql) === TRUE) {
    echo "Novo registro inserido com sucesso!";
} else {
    echo "Erro ao inserir o registro: " . $conn->error;
}

// Fecha a conexão
$conn->close();
?>
