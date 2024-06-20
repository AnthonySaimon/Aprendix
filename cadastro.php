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

// Preparar os dados do formulário
$nome = $_POST['fullname'];
$sobrenome = $_POST['leftname'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['password']; // Armazenar a senha sem criptografar

// Upload da foto de perfil (opcional)
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["foto"]["fullname"]);
move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
$foto_perfil = $target_file;

// Inserir dados na tabela usuario
$sql = "INSERT INTO usuario (nome, sobrenome, telefone, email, senha, foto_perfil)
        VALUES ('$nome', '$sobrenome', '$telefone', '$email', '$senha', '$foto_perfil')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>