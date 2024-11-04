<?php
// Conexão com o banco de dados
$servername = "localhost"; // normalmente é localhost
$username = "root"; // padrão do XAMPP
$password = ""; // padrão do XAMPP (deixe vazio)
$dbname = "italia_website"; // seu banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Verificar se os dados foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['comentario']);

    // Preparar e vincular
    $stmt = $conn->prepare("INSERT INTO comentarios (nome, email, mensagem) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $mensagem);

    // Executar a consulta
    if ($stmt->execute()) {
        echo "Comentário enviado com sucesso!";
    } else {
        echo "Erro ao enviar comentário: " . $stmt->error;
    }

    // Fechar a declaração e a conexão
    $stmt->close();
}
$conn->close();

// Redirecionar de volta para a página de comentários
header("Location: comentarios.html");
exit();
?>

