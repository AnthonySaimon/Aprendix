<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aprendix";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$email = $_POST['email'];
$senha = $_POST['senha'];

// Consulta SQL para verificar o login
$sql = "SELECT * FROM usuario WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if ($senha === $row['senha']) { // Verificar a senha sem criptografia
        // Redirecionar para a página de sucesso
        header("Location: sucesso.php");
        exit();
    } else {
        echo "Senha incorreta.";
    }
} else {
    echo "Email não encontrado.";
}

$conn->close();
?>