<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='login.css'>
    <script src='main.js'></script>
</head>

<body>
    <div class="container">
        <div class="panel">
            <h2>Login</h2>
            <form method="POST" action="logar.php">
                <label for="email">Nome:</label>
                <input type="text" id="email" name="email" required>

                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>

                <button class="logar1" type="submit">Logar</button>
            </form>
            <div class="extra">
                <p>Não possui uma conta? <a class="link" href="./cadastrar/cadastro.html">Cadastrar</a></p>
             
                    <?php
                    // Mostra mensagem de erro, se houver
                    if (isset($_GET['erro'])) {
                        $erro = $_GET['erro'];
                        if ($erro == 1) {
                            echo  '<p>Senha incorreta </p>';
                        } elseif ($erro == 2) {
                            echo '<p>Email não encontrado.</p>';
                        }
                    }
                    ?>
              

            </div>
        </div>
    </div>
    </div>
    </div>

</body>

</html>