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
$email = $_POST['email'];
$senha = $_POST['password']; // Armazenar a senha sem criptografar

// Upload da foto de perfil (opcional)


// Inserir dados na tabela usuario
$sql = "INSERT INTO usuario (nome, sobrenome, email, senha)
        VALUES ('$nome', '$sobrenome', '$email', '$senha')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>