<?php
include '../protocolo/protocolo.php';
$manager = new protocolo();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Gerenciar Usuario</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="shortcut icon" href="../../imagem/Logo-aprendix.png" type="image/ico" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kodchasan:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

</head>

<body>

    <nav class="menu-nav">
        <a href="../index.html">
            <div class="menutoggle"></div>
        </a>

        <div class="perfil">
            <h3>Usuario <br><samp>aaaaa</samp></h3>
            <div class="imgcx">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9Etrj7SYknitFM3_TL7O2S1YoU7yswbXBLQ&s" alt="...">
            </div>
        </div>
        <div class="menu">
            <ul>
                <li>
                    <a href="">
                        <ion-icon name="body-outline"></ion-icon>
                        Gerenciar Usuario
                    </a>
                </li>

                <li>
                    <a href="">
                        <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                        Adiministra Chat
                    </a>
                </li>

                <li>
                    <a href="../../configuracao/index.html">
                        <ion-icon name="settings-outline"></ion-icon>
                        Comfiguração
                    </a>
                </li>

                <li>
                    <a href="../../index.php">
                        <ion-icon name="log-out-outline"></ion-icon>
                        Deslogar
                    </a>
                </li>

            </ul>
        </div>
    </nav>

    <nav class="user">
        <div class="nome">
            <li>Usuarios registrados</li>
        </div>

        <?php foreach ($manager->list_client() as $data) : ?>
            <div class="elemuser">
                <div class="aba1">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9Etrj7SYknitFM3_TL7O2S1YoU7yswbXBLQ&s" alt="">
                    <div class="nomeuser">
                        <ul>
                            <h1><?= $data['nome'] ?> <?= $data['sobrenome'] ?></h1>
                            <li><?= $data['permissao'] ?></li>
                            <li><?= $data['id'] ?></li>
                        </ul>
                    </div>
                </div>

                <div class="aba2">

                    <form method="POST" action="../Gerenciar_user_edt/index.php">
                        <input type="hidden" name="id" value=<?= $data['id'] ?>>
                        <button class="bt_edt">
                            <ion-icon name="create-outline"></ion-icon>
                        </button>
                    </form>

                    <form method="POST" action="">
                        <input type="hidden" name="id" value=<?= $data['id'] ?>>
                        <button class="bt_dlt" type="button">
                            <ion-icon name="trash-outline"></ion-icon>
                        </button>
                    </form>

                </div>
            </div>
        <?php endforeach; ?>

    </nav>


</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src='../../home/main.js'></script>

</html>