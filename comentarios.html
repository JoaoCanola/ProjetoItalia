<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentários - Descubra a Itália</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="bg-dark text-white py-3">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="BandeiraLogo">
                <a href="index.html">
                    <img src="img/bandeira.png" alt="Bandeira da Itália" width="40" height="30" class="me-2">
                </a>
            </div>
    
            <div class="PaginasNav">
                <nav class="PaginasNav">
                    <a class="nav-link text-white" href="index.html">Início</a>
                    <a class="nav-link text-white" href="culinaria.html">Culinária</a>
                    <a class="nav-link text-white" href="pontos-turisticos.html">Pontos Turísticos</a>
                    <a class="nav-link text-white" href="comentarios.html">Comentários</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="comentarios-container">
        <h2 class="text-center mt-4">Deixe seu Comentário</h2>
        
        <div class="formulario-comentario">
            <form id="form-comentario" action="processa_comentario.php" method="POST">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                
                <div class="mb-3">
                    <label for="comentario" class="form-label">Seu comentário:</label>
                    <textarea class="form-control" id="comentario" name="comentario" rows="5" required></textarea>
                </div>
                
                <button type="submit" class="btn-comentario">Enviar Comentário</button>
            </form>
        </div>
        
        <?php
        // Exibir erros para facilitar a depuração
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        // Configurações de conexão
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
                echo "<div class='alert alert-success' role='alert'>Comentário enviado com sucesso!</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Erro ao enviar comentário: " . $stmt->error . "</div>";
            }

            // Fechar a declaração
            $stmt->close();
        }

        // Consulta para buscar comentários
        $sql = "SELECT nome, email, mensagem FROM comentarios ORDER BY id DESC"; // ordenando os comentários do mais recente para o mais antigo
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h3>Comentários:</h3>";
            while($row = $result->fetch_assoc()) {
                echo "<div class='comentario'>";
                echo "<strong>" . htmlspecialchars($row["nome"]) . " (" . htmlspecialchars($row["email"]) . "):</strong>";
                echo "<p>" . nl2br(htmlspecialchars($row["mensagem"])) . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>Nenhum comentário encontrado.</p>";
        }

        $conn->close();
        ?>
        
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Descubra a Itália</p>
    </footer>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
